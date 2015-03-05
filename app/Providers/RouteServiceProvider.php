<?php namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);

		$router->bind('songs', function($slug)
		{
			return \App\Song::whereSlug($slug)->first();
		});

		$router->bind('articles', function($identifier)
		{
			if(is_numeric($identifier))
			{
				return \App\Article::published()->whereId($identifier)->first();		
			}
			else {
				return \App\Article::published()->whereSlug($identifier)->first();		
			}
		});

		$router->bind('tags', function($name)
		{
			return \App\Tag::whereName($name)->first();
		});

		$router->bind('usergroups', function($id)
		{
			return \App\Usergroup::whereId($id)->first();
		});

		$router->bind('users', function($id)
		{
			return \App\User::whereId($id)->first();
		});
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php');
		});
	}

}
