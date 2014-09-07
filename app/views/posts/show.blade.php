@extends('layouts.default')

@section('content')

    <div class="row">

        <article class="post large-8 columns">
            <h2> {{$post->title}} </h2>
            <div class="subheader">{{ $post->summary }}</div>
            <div class="post-body">{{ $post->body }}</div>
        </article>



        <section class="side large-4 columns">
            <h4>Post Info</h4>
            <p>Posted: {{ $post->created_at }} </p>
            @if (Auth::check())
                <span>{{ link_to_route('posts.edit', 'Edit This Post', $post->id) }}</span>
            @endif
        </section>
    </div>

    <div class="row">
        <div class="large-12 columns">{{ link_to_route('posts.index', '&laquo; Go Back') }}</div>
    </div>

@stop