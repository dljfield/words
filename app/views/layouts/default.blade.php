<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thedebonair/words</title>

    <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Crimson:400,400i,600,600i/Muli:200,200i">

    {{ HTML::style('css/normalize.css') }}
    {{ HTML::style('css/foundation.css') }}
    {{ HTML::style('css/words.css') }}
</head>
<body>

    <div class="container">
        @if(Auth::check())
            @include('layouts.partials._adminbar')
        @endif

        <h1>thedebonair/words</h1>

        @include('layouts.partials._navigation')

        @yield('content')
    </div>

</body>
</html>