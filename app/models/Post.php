<?php

class Post extends Eloquent {

    protected $fillable = ['title', 'body', 'summary', 'published'];

    public $errors;

    protected static $rules = [
        'title'   => 'required',
        'body'    => 'required',
        'summary' => 'required',
    ];

    public function isValid()
    {
        $validation = Validator::make($this->attributes, static::$rules);

        if ($validation->passes()) return true;

        $this->errors = $validation->messages();

        return false;
    }

}