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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




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


Route::resource('articles', 'ArticlesController', [
	'names' => []
]);
Route::get('/users/{user}/articles', 'ArticlesController@index');

Route::get('tags/{tags}', 'TagsController@show');

Route::resource('usergroups', 'UsergroupsController');

Route::resource('users', 'UsersController');