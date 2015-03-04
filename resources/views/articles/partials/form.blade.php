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
<div class="form-group {{ $errors->has('published_at') ? 'has-error' : ''}}">
	{!! Form::label('published_at', 'Published On', ['class' => 'control-label']) !!}
	{!! Form::input('date', 'published_at', $article->published_at->format('Y-m-d'), ['class' => 'form-control']) !!}
	{{-- Form::input('time', 'published_aad', date('H:i:s'), ['class' => 'form-control']) --}}
	{!! $errors->first('published_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
	{!! Form::label('tag_list', 'Tags') !!}
	{!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>
<div class="form-group {{ $errors->has('post') ? 'has-error' : ''}}">
	{!! Form::label('post', 'Article Body', ['class' => 'control-label']) !!}
	{!! Form::textarea('post', null, ['class' => 'form-control']) !!}
	{!! $errors->first('post', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
	{!! Form::submit($submitBtnTxt, ['class' => 'btn btn-primary']) !!}
	{!! link_to('/articles', 'Cancel', ['class' => 'btn btn-default']) !!}
</div>

@section('footer')
	<script type="text/javascript">
		$('#tag_list').select2({
			placeholder: 'Choose tags',
			tags: true/*,
			data: [
				{id: 'one', text: 'One'},
				{id: 'two', text: 'Two'}
			],
			ajax: {
				dataType: 'json',
				url: 'api/tags',
				delay: 250,
				data: function(params){
					return {
						q: params.term
					}
				},
				processResults: function(data) {
					return {results: data}
				}
			}*/
		});
	</script>
@stop