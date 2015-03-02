@extends('layouts.articles')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header">
				<h1>Edit <q>{{$article->title}}</q></h1>
				<p>More precise, well described, efficient in reading, and properly highlighted.</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			{!! Form::model($article, ['url' => route('articles.update', [$article->slug]), 'method' => 'PATCH']) !!}
				@include('articles.partials.form', ['submitBtnTxt' => 'Update Article'])
			{!! Form::close() !!}
		</div>
	</div>
@stop