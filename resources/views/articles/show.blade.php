@extends('layouts.articles')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h1>{{$article->title}}</h1>
				<p>
					{{$article->created_at}}
					<a href="#">{{$article->author}}</a>
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			{!! nl2br($article->post)!!}
		</div>
	</div>
@stop

@section('sidebar')
	<div class="row">
		<div class="col-sm-12">
			<h4>About</h4>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
			<h4>Archives</h4>
		</div>
	</div>
@stop