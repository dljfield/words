@extends('layouts.default')

@section('content')

    <h2>All Posts</h2>

    @if($posts->count())
        @foreach($posts as $post)
            <div class="post">
                <h3>{{ link_to('posts/' . $post->id, $post->title) }}</h3>
                <div> {{$post->summary}} </div>
            </div>
        @endforeach
    @endif
@stop