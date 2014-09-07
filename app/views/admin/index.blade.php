@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="small-12 columns">
            <h2>Welcome to the jungle.</h2>
            @include('layouts.partials._postlist')
        </div>
    </div>
@stop