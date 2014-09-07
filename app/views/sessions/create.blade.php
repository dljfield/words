@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="small-6 small-centered columns form">
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
                {{ Form::submit('Log In', ['class' => 'button right']) }}
            </div>
            {{ Form::close() }}
        </div>

        <div class="error">{{ $errors->first('auth') }}</div>
    </div>




@stop