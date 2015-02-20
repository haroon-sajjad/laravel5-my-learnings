@extends('master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<div class="jumbotron">
					<h1>Edit</h1>
					<h2>{{ $song->title }}</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				{!! Form::model($song, ['url' => route('song_update', [$song->slug]), 'method' => 'PATCH']) !!}
					
					@include('songs._songs_form')

				{!! Form::close() !!}
			</div>
		</div>
	</div>

	
@stop