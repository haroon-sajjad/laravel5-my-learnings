<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
	{!! Form::label('title', 'Title', ['class' => 'control-label'])!!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
	{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
	<label class="control-label">Slug</label>
	{!! Form::text('slug', null, ['class' => 'form-control'])!!}
	{!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
	{!! Form::label('lyrics', 'Lyrics', ['class' => 'control-label'])!!}
	{!! Form::textarea('lyrics', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!! Form::submit('Update Song', ['class' => 'btn btn-primary'])!!}
	{!! link_to_route('songs_path', 'cancel', null, ['class' => 'btn btn-default']) !!}
</div>