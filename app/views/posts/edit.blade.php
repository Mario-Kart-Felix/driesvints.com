{{ Form::model($post, array('route' => array('admin.posts.update', $post->id), 'method' => 'PUT')) }}

<p>
	{{ Form::label('title') }}
	{{ Form::text('title') }}
	{{ $errors->first('title') }}
</p>

<p>
	{{ Form::label('slug') }}
	{{ Form::text('slug') }}
	{{ $errors->first('slug') }}
</p>

<p>
	{{ Form::label('body') }}
	{{ Form::textarea('body') }}
</p>

{{ HTML::linkRoute('admin.posts.index', 'cancel') }}
{{ Form::submit() }}

{{ Form::close() }}