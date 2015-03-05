<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usergroup;

use Illuminate\Http\Request;
use App\Http\Requests\UsergroupsRequest;

class UsergroupsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Usergroup $usergroup)
	{
		$usergroups = $usergroup->paginate(10);
		return view('usergroups.index', compact('usergroups'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usergroups.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UsergroupsRequest $request, Usergroup $usergroup)
	{
		$usergroup->create( $request->all() );

		\Session::flash('flash_message', 'User group has been added succcessfully.');

		return redirect()->route('usergroups.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Usergroup $usergroup)
	{
		return view('usergroups.edit', compact('usergroup'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UsergroupsRequest $request, Usergroup $usergroup)
	{
		$usergroup->update( $request->all() );

		\Session::flash('flash_message', 'User group has been updated succcessfully.');

		return redirect()->route('usergroups.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Usergroup $usergroup)
	{
		$usergroup->delete($usergroup);

		\Session::flash('flash_message', 'User group has been deleted succcessfully.');

		return redirect()->route('usergroups.index');
	}

}
