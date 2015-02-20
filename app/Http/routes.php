<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

Route::bind('songs', function($slug)
{
	return App\Song::whereSlug($slug)->first();
});

/*Route::get('songs', 'SongsController@index');
Route::get('songs/{song}', 'SongsController@show');
Route::get('songs/{song}/edit', 'SongsController@edit');
Route::patch('songs/{song}', 'SongsController@update');*/

Route::resource('songs', 'SongsController', [
	'names' => [
		'index' => 'songs_path',
		'show' => 'song_path',
		'edit' => 'song_edit',
		'update' => 'song_update',
		'destroy' => 'song_delete',
		'create' => 'song_create',
		'store' => 'song_store'
	]
]);

/*Route::get('books', 'BooksController@index');*/