@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="small-12 columns">
            <h2>All Posts</h2>
            @include('layouts.partials._postlist')
        </div>
    </div>
@stop