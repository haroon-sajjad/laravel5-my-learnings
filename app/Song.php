<?php namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* 
*/
class Song extends Eloquent
{
	/**
	 * Fillable for songs
	 */
	protected $fillable = [
		'title', 'slug', 'lyrics'
	];
}