@extends('layouts.default')

@section('content')

    <article>
        <h2> {{$post->title}} </h2>
        <div>{{ $post->summary }}</div>
        <div>{{ $post->body }}</div>
    </article>

    <section>
        <h4>Post Info</h4>
        <p>Posted: {{ $post->created_at }} </p>
        @if (Auth::check())
            <div>{{ link_to_route('posts.edit', 'Edit This Post', $post->id) }}</div>
        @endif
        <div>{{ link_to_route('posts.index', '&laquo; All Posts') }}</div>
    </section>

    <div>
        <div>{{ link_to_route('posts.index', '&laquo; All Posts') }}</div>
    </div>

@stop