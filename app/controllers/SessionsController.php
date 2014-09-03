<?php

class SessionsController extends \BaseController {

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create()
    {
        if (Auth::check()) return Redirect::route('admin');
        return View::make('sessions.create');
    }

    public function store()
    {
        if ( ! $this->user->fill(Input::only(['email', 'password']))->exists())
        {
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }

        return Redirect::intended();
    }

    public function destroy()
    {
        Auth::logout();
        return Redirect::route('home');
    }

}