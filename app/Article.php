<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use \Carbon\Carbon;

class Article extends Eloquent {

	/**
	 * Fillable fields for an Article.
	 * 
	 * @var array
	 */
	protected $fillable = [
		'title', 'slug', 'author', 'post', 'published_at', 'user_id'
	];

	/**
	 * Additional fields to treat as Carbon instances.
	 * 
	 * @var array
	 */
	protected $dates = ['published_at'];

	/**
	 * Mutator: Set the published_at attributes
	 * 
	 * @param $data
	 */
	public function setPublishedAtAttribute( $date )
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
	}
	
	/**
	 * Query Scope: Scope queries to articles that have been published.
	 * 
	 * @param $query
	 */
	public function scopePublished($query) 
	{
		$query->where('published_at', '<=', Carbon::now());
	}

	/**
	 * Query Scope: Scope queries to articles that have been unpublished.
	 * 
	 * @param $data
	 */
	public function scopeUnpublished($query) 
	{
		$query->where('published_at', '>=', Carbon::now());
	}

	/**
	 * An article belongs to and owned by a user.
	 * 
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
