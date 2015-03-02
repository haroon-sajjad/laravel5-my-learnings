@extends('layouts.articles')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h1>Laravel 5 Blog</h1>
				<p>Talk less, do more with laravel 5.</p>
			</div>
		</div>
	</div>
	@if(count($articles)>0)
		@foreach($articles as $article)
			<h2>{!! link_to_route('articles.show', $article->title, [$article->slug]) !!}</h2>
			<p>
				{{$article->published_at->diffForHumans()}}
				<a href="#">{{$article->author}}</a>
			</p>
			<div class="btn-group" role="group" aria-label="...">
				{!! link_to_route('articles.edit', 'Edit', [$article->slug], ['class' => 'btn btn-primary btn-xs'])!!}
				{!! link_to_route('articles.destroy', 'Delete', [$article->slug], ['class' => 'btn btn-danger btn-xs'])!!}
			</div>
			<p>{!! $article->post !!}</p>
			<hr />
		@endforeach
	@else
	<div class="alert alert-info" role="alert">
		Blog posts (articles) will goes here. Nothing found yet!
		<a href="/articles/create">create new</a>
	</div>
	@endif
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