<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thedebonair/words</title>
    {{ HTML::style('css/normalize.css') }}
    {{ HTML::style('css/foundation.css') }}
    {{ HTML::style('css/words.css') }}
</head>
<body>

    <div class="container">
        <h1>thedebonair/words</h1>

        @if(Auth::check())
            @include('layouts.partials._adminbar')
        @endif

        @include('layouts.partials._navigation')

        @yield('content')
    </div>

</body>
</html>