<div class="row">
	<div class="col-sm-12">
		<h4>About</h4>
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
		
		<h4>Archives</h4>
		<p>archive list</p>

		<h4>Latest Articles</h4>
		@if( $latest_articles )
			<ul class="list-unstyled">
			@foreach ($latest_articles as $article) 
				<li>{!! link_to_route('articles.show', $article->title, [$article->slug]) !!}</li>
			@endforeach
			</ul>
		@else
			<p>no latest article found yet!</p>
		@endif

		<h4>Tags</h4>
		@if( $article_tags )
			<ul class="list-inline">
			@foreach ($article_tags as $tag) 
				{!! link_to('tags/' . $tag->name, $tag->name, ['class' => 'btn btn-link']) !!}
			@endforeach
			</ul>
		@endif
	</div>
</div>
