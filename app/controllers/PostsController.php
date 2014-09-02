<?php

class PostsController extends \BaseController {

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return View::make('posts.index')->withPosts($posts);
    }

    public function show($id)
    {
        $post = Post::find($id);

        if ( ! $post) return View::make('404');

        return View::make('posts.show')->withPost($post);
    }

    public function create()
    {
        return View::make('posts.create');
    }

    public function store()
    {
        $input = Input::all();

        $post = new Post;
        $post->fill($input);
        $post->save();

        return Redirect::route('posts.show', [$post->id]);
    }
}