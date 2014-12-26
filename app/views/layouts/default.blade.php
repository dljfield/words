<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>words</title>

    <!-- body text -->
    <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Libre+Caslon+Text:400,400i,700">

    <!-- other text -->
    <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Source+Sans+Pro:300,300i">

    <!-- monospace -->
    <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Inconsolata:500">

    {{ HTML::style('css/lib/normalize.css') }}
    {{ HTML::style('css/lib/skeleton.css') }}

    {{ HTML::style('css/words.css') }}

</head>
<body>

    <div class="container">
        @if(Auth::check())
            @include('layouts.partials._adminbar')
        @endif

        @include('layouts.partials._header')

        @yield('content')
    </div>

    @include('layouts.partials._footer')

</body>
</html>