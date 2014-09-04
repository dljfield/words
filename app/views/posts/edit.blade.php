@extends('layouts.admin')

@section('content')

    <div>
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
            {{ Form::submit('Update This Post') }}
        </div>
        {{ Form::close() }}
    </div>

@stop