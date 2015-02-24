<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Article extends Eloquent {

	/**
	 * Fillable for songs
	 */
	protected $fillable = [
		'title', 'slug', 'author', 'post'
	];

}
