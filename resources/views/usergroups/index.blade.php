@extends('app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-header">
					{!! link_to_route('usergroups.create', 'Add New Group', [], ['class' => 'btn btn-info pull-right']) !!}
					<h1>User Groups</h1>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Total Users</th>
							<th>Created At</th>
							<th>Updated At</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@if(count($usergroups) > 0)
							@foreach ($usergroups as $group) 
								<tr>
									<td>{{ $group->id }}</td>
									<td>{{ $group->name }}</td>
									<td>{{ count($group->users) }}</td>
									<td>{{ $group->created_at->diffForHumans() }}</td>
									<td>{{ $group->updated_at->diffForHumans() }}</td>
									<td>
										{!! action_buttons($group, 'usergroups') !!}
									</td>
								</tr>
							@endforeach
						@else 
							<tr>
								<td colspan="5">
									<p class="text-center">
										<small> <em>no user group has been added yet!</em> </small>
									</p>
								</td>
							</tr>
						@endif
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5">
								{{ $usergroups->render() }}
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

	</div>

@stop