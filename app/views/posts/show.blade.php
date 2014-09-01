@extends('layouts.default')

@section('content')
    <div class="post">
        <h2> {{$post->title}} </h2>
        <div>Posted: {{ $post->created_at }} </div>
        <div>{{ $post->body }}</div>
    </div>

    {{ link_to('posts', '&laquo; Go Back') }}
@stop