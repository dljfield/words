@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="small-10 small-centered columns form">
            {{ Form::open(['route' => ['posts.update', $post->id], 'method' => 'put']) }}
            <div>
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', $post->title) }}
                {{ $errors->first('title', '<span class=error>:message') }}
            </div>
            <div>
                {{ Form::label('body', 'Body:') }}
                {{ Form::textarea('body', $post->body) }}
                {{ $errors->first('body', '<span class=error>:message') }}
            </div>
            <div>
                {{ Form::label('summary', 'Summary:') }}
                {{ Form::textarea('summary', $post->summary) }}
                {{ $errors->first('summary', '<span class=error>:message') }}
            </div>
            <div>
                {{ Form::checkbox('published', true, $post->published) }}
                {{ Form::label('publish', 'Publish?') }}
                {{ Form::submit('Update This Post', ['class' => 'button right']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>

@stop