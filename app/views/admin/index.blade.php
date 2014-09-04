@extends('layouts.admin')

@section('content')

    @if($posts->count())
        @foreach($posts as $post)
            <div class="post">
                <h3>{{ link_to_route('posts.show', $post->title, $post->id) }}</h3>
                <div> {{$post->summary}} </div>
                {{ link_to_route('posts.edit', 'Edit This Post', $post->id) }}
            </div>
        @endforeach
    @else
        <p>There aren't any posts, cap'n!</p>
    @endif

@stop