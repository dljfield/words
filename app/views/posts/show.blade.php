@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="ten columns offset-by-one column">
            <article class="post">
                <div class="post-title">
                    <h2> {{ $post->title }} </h2>

                    <div class="info">
                        Posted <abbr title="{{ $post->published_at }}">{{{ $post->published_at->diffForHumans() }}}</abbr>

                        @if(Auth::check())
                            <span class="admin-edit-button">
                                &ndash;
                                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                            </span>
                        @endif
                    </div>

                </div>

                <div>{{ $post->body }}</div>

                <p>
                    <span class="return-link">{{ link_to_route('posts.index', '&laquo; All Posts') }}</span>
                </p>
            </article>
        </div>
    </div>

@stop