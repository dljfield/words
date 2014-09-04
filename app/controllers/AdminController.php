<?php

class AdminController extends \BaseController {

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
        $this->beforeFilter('auth');
    }

    public function index()
    {
        $posts = $this->post->orderBy('id', 'desc')->get();
        return View::make('admin.index')->withPosts($posts);
    }

}