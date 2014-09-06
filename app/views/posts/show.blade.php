@extends('layouts.default')

@section('content')

    <div class="row">

        <div class="large-8 columns">
            <small>Posted: {{ $post->created_at }} </small>
            <h2> {{$post->title}} </h2>
            @if (Auth::check())
                <span>{{ link_to_route('posts.edit', 'Edit This Post', $post->id) }}</span>
            @endif
            <div class="summary">{{ $post->summary }}</div>
        </div>

        <article class="large-8 columns">

            <div>{{ $post->body }}</div>
        </article>



        <section class="side large-4 columns">
            <p>Flibble flobble.</p>
        </section>
    </div>

    <div class="row">
        {{ link_to_route('posts.index', '&laquo; Go Back') }}
    </div>

@stop