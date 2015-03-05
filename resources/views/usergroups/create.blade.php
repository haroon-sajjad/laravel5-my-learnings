@extends('app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-header">
					<h1>Add New User Group</h1>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				{!! Form::model($usergroup = new \App\Usergroup, ['route' => 'usergroups.store']) !!}
					<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
						{!! Form::label('name', 'Group Name', ['class' => 'control-label']) !!}
						{!! Form::text('name', null, ['class' => 'form-control']) !!}
						{!! $errors->first('name', '<p class="help-block">:message</p>')!!}
					</div>
					<div class="form-group">
						{!! Form::submit('Add Group', ['class' => 'btn btn-info']) !!}
						{!! link_to_route('usergroups.index', 'Cancel', [], ['class' => 'btn btn-default'])!!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>

	</div>


@stop