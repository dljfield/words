@if($posts->count())
	<div class="post-list">

	    @foreach($posts as $post)
	    	<div class="row">
	    		<div class="twelve columns">

			    	<div class="post-summary">
			    		<div class="post-title">

				    		<h3> <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> </h3>

	                   		<div class="info">
	                        	Posted <abbr title="{{ $post->published_at }}">{{{ $post->published_at->diffForHumans() }}}</abbr>
	                    	</div>

			    		</div>

				        <div> {{$post->summary}} </div>
			    	</div>

	    		</div>
	    	</div>
	    @endforeach

	</div>
@else
    <p>There aren't any posts, cap'n!</p>
@endif