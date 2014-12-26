
<div>
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', isset($post->title) ? $post->title : '') }}
    {{ $errors->first('title', '<span class=error>:message') }}
</div>
<div>
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body', isset($post->body) ? $post->body : '') }}
    {{ $errors->first('body', '<span class=error>:message') }}
</div>
<div>
    {{ Form::label('summary', 'Summary') }}
    {{ Form::textarea('summary', isset($post->summary) ? $post->summary : '' ) }}
    {{ $errors->first('summary', '<span class=error>:message') }}
</div>
<div>
    <label>
        Publish
        {{ Form::checkbox('published', true) }}
    </label>
</div>
