@extends('layouts.default')

@section('content')

    <h2>Latest Posts</h2>

    @if($posts->count())
        @foreach($posts as $post)
            <div class="post">
                <h3>{{ link_to('posts/' . $post->id, $post->title) }}</h3>
                <div> {{ $post->summary }} </div>
            </div>
        @endforeach

        <div>{{ link_to('posts', 'See All &raquo;') }}</div>
    @else
        <p>There are no posts. Oh dear.</p>
    @endif
@stop