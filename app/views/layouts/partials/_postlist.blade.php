@if($posts->count())
    @foreach($posts as $post)
        <div class="post panel">
            <h3>{{ link_to_route('posts.show', $post->title, $post->id) }}</h3>
            <div> {{$post->summary}} </div>
        </div>
    @endforeach
@else
    <p>There aren't any posts, cap'n!</p>
@endif