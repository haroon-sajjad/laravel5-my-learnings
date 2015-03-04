<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Article;
use \App\Http\Requests\ArticleRequest;
use \Carbon\Carbon;

class ArticlesController extends Controller {

	private $article;

	public function __construct(Article $article) 
	{
		$this->middleware('auth', ['only' => 'create']);
		$this->article = $article;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($user = null)
	{
		if( !is_null( $user ) ) {
			$userO = \App\User::where('name', $user)->first();
			$articles = $userO->articles;
		}
		else {
		//$articles = $this->article->get();
		$articles = $this->article
						->latest('published_at')
						->published()
						->paginate(10);
		}
		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tags = \App\Tag::lists('name', 'id');
		return view('articles.create', compact('tags'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Article $article, ArticleRequest $request)
	{
		//$article->create($request->all());
		$article = \Auth::user()->articles()->create( $request->all() );

		$article->tags()->attach( $request->input('tag_list') );

		\Session::flash('flash_message', 'Article has been created successfully.');

		return redirect()->route('articles.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Article $article)
	{
		if(!$article->exists || $article->exists == false) {
			return redirect()->route('articles.index');
		}
		return view('articles.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Article $article)
	{
		$tags = \App\Tag::lists('name', 'id');
		return view('articles.edit', compact('article', 'tags'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Article $article, ArticleRequest $request)
	{
		$article->update($request->all());

		$article->tags()->sync( $request->input('tag_list') );

		return redirect()->route('articles.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Article $article)
	{
		$article->delete($article);

		\Session::flash('flash_message', 'Article has been deleted successfully.');

		return redirect()->route('articles.index');
	}

}
