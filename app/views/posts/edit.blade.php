@extends('layouts.default')

@section('content')

<div class="row">
    <div class="ten columns offset-by-one column">
        <div class="post-form">
            {{ Form::open(['route' => ['posts.update', $post->id], 'method' => 'PUT']) }}

                @include('posts.partials.form')

                {{ Form::submit('Update Post', ['class' => 'button right']) }}

            {{ Form::close() }}
        </div>
    </div>
</div>


@stop