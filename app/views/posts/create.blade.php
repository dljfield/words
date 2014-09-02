@extends('layouts.default')

@section('content')

    <div>
        {{ Form::open(['route' => 'posts.store']) }}
        <div>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
            {{ $errors->first('title', '<span class=error>:message') }}
        </div>
        <div>
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body') }}
            {{ $errors->first('body', '<span class=error>:message') }}
        </div>
        <div>
            {{ Form::label('summary', 'Summary:') }}
            {{ Form::textarea('summary') }}
            {{ $errors->first('summary', '<span class=error>:message') }}
        </div>
        <div>
            {{ Form::submit('Make Post For Great Justice') }}
        </div>
        {{ Form::close() }}
    </div>

@stop