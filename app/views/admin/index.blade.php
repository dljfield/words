@extends('layouts.default')

@section('content')

    <div>
        <p>Hello, {{ Auth::user()->username }}</p>
    </div>

@stop