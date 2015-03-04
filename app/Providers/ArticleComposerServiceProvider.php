<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ArticleComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer('articles.partials.sidebar', function($view)
		{
			$view->with('latest_articles', \App\Article::latest('published_at')->published()->limit(5)->get())
				->with('article_tags', \App\Tag::get());
		});
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
