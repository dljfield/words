@extends('layouts.default')

@section('content')
    <div class="row">
    	<div class="page-subtitle">
        	<h2>Latest Posts</h2>
    	</div>
        @include('layouts.partials._postlist')
    </div>
@stop