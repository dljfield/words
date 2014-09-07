@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="small-10 small-centered columns form">
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
                {{ Form::checkbox('published', true) }}
                {{ Form::label('published', 'Publish?') }}
                {{ Form::submit('Make Post For Great Justice', ['class' => 'button right']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>



@stop