@extends('app')

@section('content')
	
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<div class="page-header">
					<h1>Create User</h1>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				
				{!! Form::model($user = new \App\User, ['route' => 'users.store'])!!}
					
					<div class="form-group">
						{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
						{!! Form::text('name', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('email', 'Email Address', ['class' => 'control-label']) !!}
						{!! Form::email('email', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
						<div class="input-group">
							{!! Form::password('password', ['class' => 'form-control']) !!}
							<span class="input-group-btn">
								{!! Form::button('Show password', ['class' => 'btn btn-warning', 'type' => 'button', 'id' => 'password-addon']) !!}
							</span>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label">Select Group(s)</label>
					</div>
					<div class="checkbox">
						@if( count($groups) > 0) 
							<ul class="list-unstyled">
								@foreach ($groups as $group) 
									<li>
										<label for="{{$group->name}}_{{$group->id}}">
										{!! Form::checkbox('group_id[]', 1, $group->default, ['id' => $group->name.'_'.$group->id]) !!} 
										{{ $group->name }}
										</label>
									</li>								
								@endforeach
							</ul>
						@endif
					</div>

					<div class="form-group">
						{!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
						{!! link_to_route('users.index', 'Cancel', [], ['class' => 'btn btn-default']) !!}
					</div>

				{!! Form::close() !!}

			</div>
		</div>

	</div>

@stop

@section('scripts')
	<script type="text/javascript">
	$(function(){
		$('#password-addon').click(function(){
			if($('#password').attr('type') == 'password' ) {
				$('#password').attr('type', 'text');
				$('#password-addon').text('Hide password');
			}
			else {
				$('#password').attr('type', 'password');
				$('#password-addon').text('Show password');
			}
		});
	});
	</script>
@stop