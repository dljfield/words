<?php

// HOME AND ABOUT
Route::get('/', 'HomeController@showWelcome');
Route::get('/about', 'HomeController@showAbout');

// POSTS
Route::resource('posts', 'PostsController');