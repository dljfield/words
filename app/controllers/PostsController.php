<?php

class PostsController extends \BaseController {

    public function index()
    {
        $posts = Post::all();
        return View::make('posts.index')->withPosts($posts);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return View::make('posts.show')->withPost($post);
    }
}