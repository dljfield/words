@if($posts->count())
    @foreach($posts as $post)
        <small>{{$post->published_at}}</small>
        <h3>{{ link_to_route('posts.show', $post->title, $post->id) }}</h3>
        <div> {{$post->summary}} </div>
    @endforeach
@else
    <p>There aren't any posts, cap'n!</p>
@endif