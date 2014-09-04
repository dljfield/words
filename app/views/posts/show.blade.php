@extends('layouts.default')

@section('content')
    <div class="post">
        <h2> {{$post->title}} </h2>
        @if (Auth::check())
            <span>{{ link_to_route('posts.edit', 'Edit This Post', $post->id) }}</span>
        @endif
        <div>Posted: {{ $post->created_at }} </div>
        <div>{{ $post->body }}</div>
    </div>

    {{ link_to_route('posts.index', '&laquo; Go Back') }}
@stop