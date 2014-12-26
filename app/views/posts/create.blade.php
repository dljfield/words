@extends('layouts.default')

@section('content')

<div class="row">
    <div class="ten columns offset-by-one column">
        <div class="post-form">
            {{ Form::open(['route' => 'posts.store']) }}

                @include('posts.partials.form')

                {{ Form::submit('Make Post For Great Justice', ['class' => 'button right']) }}

            {{ Form::close() }}
        </div>
    </div>
</div>


@stop