@extends('layouts.articles')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h1>Create New Article</h1>
				<p>More precise, well described, efficient in reading, and properly highlighted.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			{!! Form::open(['route' => 'articles.store']) !!}
				<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
					{!! Form::label('title', 'Article Title', ['class' => 'control-label']) !!}
					{!! Form::text('title', null, ['class' => 'form-control']) !!}
					{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
				</div>
				<div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
					{!! Form::label('slug', 'URL Slug', ['class' => 'control-label']) !!}
					{!! Form::text('slug', null, ['class' => 'form-control']) !!}
					{!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
				</div>
				<div class="form-group {{ $errors->has('author') ? 'has-error' : ''}}">
					{!! Form::label('author', 'Author Full Name', ['class' => 'control-label']) !!}
					{!! Form::text('author', null, ['class' => 'form-control']) !!}
					{!! $errors->first('author', '<p class="help-block">:message</p>') !!}
				</div>
				<div class="form-group {{ $errors->has('post') ? 'has-error' : ''}}">
					{!! Form::label('post', 'Article Body', ['class' => 'control-label']) !!}
					{!! Form::textarea('post', null, ['class' => 'form-control']) !!}
					{!! $errors->first('post', '<p class="help-block">:message</p>') !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Create Article', ['class' => 'btn btn-primary']) !!}
					{!! link_to('/articles', 'Cancel', ['class' => 'btn btn-default']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@stop