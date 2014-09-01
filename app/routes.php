<?php

// HOME AND ABOUT
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);
Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@showAbout']);

// POSTS
Route::resource('posts', 'PostsController');