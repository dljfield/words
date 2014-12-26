@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="ten columns offset-by-one column">
            <article class="post">
                <div class="post-title">
                    <h2> {{ $post->title }} </h2>

                    <span class="info">Posted <abbr title="{{ $post->created_at }}">{{{ $post->created_at->diffForHumans() }}}</abbr></span>

                </div>

                <div>{{ $post->body }}</div>

                <p>
                    <span class="return-link">{{ link_to_route('posts.index', '&laquo; All Posts') }}</span>
                </p>
            </article>
        </div>
    </div>

@stop