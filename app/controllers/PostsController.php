<?php

class PostsController extends \BaseController {

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
        $this->beforeFilter('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = $this->post->orderBy('id', 'desc')->get();
        return View::make('posts.index')->withPosts($posts);
    }

    public function show($id)
    {
        $post = $this->post->find($id);

        if ( ! $post) return View::make('404');

        return View::make('posts.show')->withPost($post);
    }

    public function create()
    {
        return View::make('posts.create');
    }

    public function store()
    {
        if ( ! $this->post->fill(Input::all())->isValid())
        {
            return Redirect::back()->withInput()->withErrors($this->post->errors);
        }

        $this->post->save();

        return Redirect::route('posts.show', [$this->post->id]);
    }
}