<?php

class HomeController extends \BaseController {

	public function showWelcome()
	{
		$posts = Post::all()->take(5);
		return View::make('home')->with('posts', $posts);
	}

	public function showAbout()
	{
		return View::make('about');
	}

}