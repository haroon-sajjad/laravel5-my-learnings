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
		<div class="col-sm-12 text-right">
			{!! link_to_route('song_create', 'Add New Song', null, ['class' => 'btn btn-success']) !!}
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Slug</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($songs as $song) 
					<tr>
						<td><strong>{{ $song->id }}</strong></td>
						<td>{!! link_to_route('song_path', $song->title, [$song->slug], ['title' => 'View detail']) !!}</td>
						<td>{{ $song->slug }}</td>
						<td>
							<div class="btn-group" role="group" aria-label="...">
								{!! delete_form(['song_delete', $song->slug], 'Delete') !!}
								</div>
						</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<td colspan="4">
							<nav>
								<ul class="pagination">
									<li class="disabled">
										<a href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li>
									<li class="active">
										<a href="#">1 <span class="sr-only">(current)</span></a>
									</li>
									<li class="disabled">
										<a href="#" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
										</a>
									</li>
								</ul>
							</nav>
						</td>
					</tr>
				</tfoot>
			</table>
		
		</div>
	</div>
</div>
@stop