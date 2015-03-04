@if($article->tags)
<div class="row">
	<div class="col-sm-12">
		<ul class="list-inline">
			<li class="glyphicon glyphicon-tags"></li>
			@foreach ($article->tags as $tag)
				<li> {!! link_to('tags/'.$tag->name, $tag->name, ['class' => 'btn btn-link'])!!}</li>
			@endforeach
		</ul>
	</div>
</div>
@endif