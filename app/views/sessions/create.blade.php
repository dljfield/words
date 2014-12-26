@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="one-third column offset-by-one-third">

            <div class="login-form">
                {{ Form::open(['route' => 'sessions.store']) }}
                <div>
                    {{ Form::email('email', '', ['placeholder' => 'Email']) }}
                    {{ $errors->first('email', '<span class=error>:message') }}
                </div>
                <div>
                    {{ Form::password('password', '', ['placeholder' => 'Password']) }}
                    {{ $errors->first('password', '<span class=error>:message') }}
                </div>
                <div>
                    {{ Form::submit('Log In', ['class' => 'button']) }}
                </div>
                {{ Form::close() }}

                <div class="error">{{ $errors->first('auth') }}</div>
            </div>

        </div>

    </div>

@stop