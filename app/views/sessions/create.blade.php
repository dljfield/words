@extends('layouts.default')

@section('content')

    <div>
        {{ Form::open(['route' => 'sessions.store']) }}
        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email') }}
            {{ $errors->first('email', '<span class=error>:message') }}
        </div>
        <div>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
            {{ $errors->first('password', '<span class=error>:message') }}
        </div>
        <div>
            {{ Form::submit('Log In') }}
        </div>
        {{ Form::close() }}
    </div>

    <div class="error">{{ $errors->first('auth') }}</div>


@stop