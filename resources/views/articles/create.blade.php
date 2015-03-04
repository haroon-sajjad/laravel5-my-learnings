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
			{!! Form::model($article = new \App\Article, ['route' => 'articles.store']) !!}
				@include('articles.partials.form', ['submitBtnTxt' => 'Create Article'])
			{!! Form::close() !!}
		</div>
	</div>
@stop