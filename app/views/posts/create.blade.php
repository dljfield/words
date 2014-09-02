@extends('layouts.default')

@section('content')

    <div>
        {{ Form::open(['route' => 'posts.store']) }}
        <div>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </div>
        <div>
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body') }}
        </div>
        <div>
            {{ Form::label('summary', 'Summary:') }}
            {{ Form::textarea('summary') }}
        </div>
        <div>
            {{ Form::submit('Make Post For Great Justice') }}
        </div>
        {{ Form::close() }}
    </div>

@stop