@extends('master')
@section('content')
<div class="container">
	<div class="row">
		<header class="jumbotron">
			<h1>Justin Beiber Songs</h1>
			<h2>Justin Beiber Official Fan Club</h2>
		</header>
	</div>
	<div class="row">
		<div class="col-sm-12">
			{!! link_to_route('songs_path', '&laquo; back to list', null, ['class' => 'btn btn-link']) !!}
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h2>
				{{$song->title}}
				<small><a href="/songs/{{$song->slug}}/edit">(edit)</a></small>
			</h2>
			@if($song->lyrics)
			<article class="lyrics">
				{!! nl2br($song->lyrics) !!}
			</article>
			@endif
		</div>
	</div>
</div>
@stop