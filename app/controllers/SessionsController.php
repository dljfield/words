<?php

class SessionsController extends \BaseController {

    /**
     * User model
     * @var User
     */
    protected $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Login form
     * @return mixed
     */
    public function create()
    {
        if (Auth::check())
        {
            return Redirect::route('admin.index');
        }

        return View::make('sessions.create');
    }

    /**
     * Log in the user
     * @return Redirect
     */
    public function store()
    {
        if ( ! $this->user->fill(Input::only(['email', 'password']))->exists())
        {
            return Redirect::back()->withInput()->withErrors($this->user->errors);
        }

        return Redirect::intended();
    }

    /**
     * Log out the user
     * @return Redirect
     */
    public function destroy()
    {
        Auth::logout();

        return Redirect::route('home');
    }

}