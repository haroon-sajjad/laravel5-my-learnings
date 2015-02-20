<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Song;

use DB;
use \Illuminate\Http\Request;
use \App\Http\Requests\CreateSongRequest;

class SongsController extends Controller {

	private $song;

	public function __construct(Song $song)
	{
		$this->song = $song;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$songs = $this->song->get();
		return view('songs.index', compact('songs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		return view('songs.new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Song $song, CreateSongRequest $request)
	{
		$song->create($request->all());

		return redirect()->route('songs_path');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Song $song)
	{
		//$song = is_numeric($id) ? Song::find($id) : Song::whereSlug($id)->first();
		return view('songs.show', compact('song'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Song $song)
	{
		return view('songs.edit', compact('song'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Song $song, Request $request)
	{
		//METHOD 1
		/*$song->title = $request->get('title');
		$song->slug = $request->get('slug');
		$song->lyrics = $request->get('lyrics');
		$song->save();*/

		// Methods 2 && 3 - Need to define fillables in model. See App\Song model.
		
		//METHOD 2 
		/*$song->fill([
			'title' => $request->get('title'),
			'slug' => $request->get('slug'),
			'lyrics' => $request->get('lyrics'),
		])->save();*/
		
		//METHOD 3
		$song->fill($request->input())->save();


		return redirect('songs');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Song $song)
	{
		$song->delete();

		return redirect('songs');
	}

}
