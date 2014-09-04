<?php

class HomeController extends \BaseController {

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

	public function showWelcome()
	{
		$posts = $this->post->where('published', '=', true)->orderBy('id', 'desc')->get()->take(5);
		return View::make('home')->with('posts', $posts);
	}

	public function showAbout()
	{
		return View::make('about');
	}

}