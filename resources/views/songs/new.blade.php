@extends('master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<div class="jumbotron">
					<h1>New</h1>
					<h2>Song</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				{!! Form::open(['route' => 'song_store']) !!}
					
					@include('songs._songs_form')
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>

	
@stop