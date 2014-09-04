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
        $posts = $this->post->where('published', '=', true)->orderBy('id', 'desc')->get();
        return View::make('posts.index')->withPosts($posts);
    }

    public function show($id)
    {
        $post = $this->post->find($id);

        if ( ! $post || $post->published == false && Auth::guest()) return View::make('404');

        return View::make('posts.show')->withPost($post);
    }

    public function create()
    {
        return View::make('posts.create');
    }

    public function store()
    {
        $input = Input::only('title', 'body', 'summary', 'published');

        if ( ! $this->post->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($this->post->errors);
        }

        $this->post->save();

        return Redirect::route('posts.show', $this->post->id);
    }

    public function edit($id)
    {
        $post = $this->post->find($id);

        if ( ! $post) return View::make('404');

        return View::make('posts.edit')->withPost($post);
    }

    public function update($id)
    {
        $input = Input::only('title', 'body', 'summary', 'published');

        $post = $this->post->find($id);

        // TODO: 404 isn't really appropriate. Will have to make some other
        // error pages and use those.
        if ( ! $post) return View::make('404');

        if ( ! $post->fill($input)->isValid())
        {
            return Redirect::back()->withInput()->withErrors($post->errors);
        }

        $post->save();

        return Redirect::route('posts.show', $post->id);

    }
}