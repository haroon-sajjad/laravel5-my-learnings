<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class Usergroup extends Model {

	protected $fillable = ['name'];

	/**
	 * A group can belongs to many users.
	 * 
	 * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
	 */
	public function users() {
		return $this->belongsToMany('\App\User');
	}

	/**
	 * Mutator: Get the created_at attributes
	 * 
	 * @param $data
	 */
	public function getCreatedAtAttribute( $date )
	{
		return new Carbon($date);
	}

	/**
	 * Mutator: Get the updated_at attributes
	 * 
	 * @param $data
	 */
	public function getUpdatedAtAttribute( $date )
	{
		return new Carbon($date);
	}

}
