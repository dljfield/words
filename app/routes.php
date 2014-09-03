<?php

// HOME AND ABOUT
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);
Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@showAbout']);

// SESSIONS
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

// POSTS
Route::resource('posts', 'PostsController');

// ADMIN
Route::get('admin',['as' => 'admin', 'uses' => function()
{
    return "Welcome to the admin page, " . Auth::user()->username . ".";
}])->before('auth');