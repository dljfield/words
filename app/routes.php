<?php

// HOME AND ABOUT
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);
Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@showAbout']);

// SESSIONS
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController',
    ['only' => ['create', 'store', 'destroy']]
);

// POSTS
Route::resource('posts', 'PostsController',
    ['except' => 'destroy']
);

// ADMIN
Route::resource('admin', 'AdminController',
    ['only' => 'index']
);