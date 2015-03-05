@extends('app')

@section('content')
	
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<div class="page-header">
					{!! link_to_route('users.create', 'Create User', [], ['class' => 'btn btn-info pull-right']) !!}
					<h1>Users</h1>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Full Name</th>
							<th>Email Address</th>
							<th>Privilege Group(s)</th>
							<th>Last Login</th>
							<th>Create At</th>
							<th>Update At</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@if( count($users) > 0 )
							@foreach ($users as $user) 
								<tr>
									<td> {{ $user->id }} </td>
									<td> {{ $user->name }} </td>
									<td> {{ $user->email }} </td>
									<td> -- </td>
									<td> -- </td>
									<td> {{ $user->created_at->diffForHumans() }} </td>
									<td> {{ $user->updated_at->diffForHumans() }} </td>
									<td>
										{!! action_buttons($user, 'users') !!}
									</td>
								</tr>
							@endforeach

						@else
							<tr>
								<td colspan="8">
									<p class="text-center">
										<small> <em>no user has been added yet!</em> </small>
									</p>
								</td>
							</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop