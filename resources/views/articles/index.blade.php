@extends('layouts.articles')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h1>Laravel 5 Blog</h1>
				<p>Talk less, do more with laravel 5.</p>
				{!! link_to_route('articles.create', 'Create New', null, ['class' => 'btn btn-info']) !!}
			</div>
		</div>
	</div>
	@if(count($articles)>0)
		<div class="row">
			<div class="col-sm-12">
				{!!$articles->render()!!}
			</div>
		</div>
		@foreach($articles as $article)
			<div class="row">
				<div class="col-sm-12">
					<h2>{!! link_to_route('articles.show', $article->title, [$article->slug]) !!}</h2>					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					{{$article->published_at->diffForHumans()}}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					@if(\Auth::User()) 
						{!! action_buttons($article, 'articles') !!} {{-- see app/http/helpers.php --}}
					@endif
				</div>
			</div>

			@include('articles.partials.tags')

			<div class="row">
				<div class="com-sm-12">
					<p>{!! $article->post !!}</p>
				</div>
			</div>
			<hr />
		@endforeach

		<div class="row">
			<div class="col-sm-12">
				{!!$articles->render()!!}
			</div>
		</div>
	@else
	<div class="alert alert-info" role="alert">
		Blog posts (articles) will goes here. Nothing found yet!
		<a href="/articles/create">create new</a>
	</div>
	@endif
@stop