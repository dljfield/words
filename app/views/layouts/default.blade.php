<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>/words</title>

    <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Crimson:400,400i,600,600i/Open+Sans:300,300i/Inconsolata:500">

    {{ HTML::style('css/normalize.css') }}
    {{ HTML::style('css/foundation.css') }}
    <!-- {{ HTML::style('css/words.css') }} -->
</head>
<body>

    <div class="container">
        <!-- <div class="row"> -->
            @if(Auth::check())
                @include('layouts.partials._adminbar')
            @endif

            <div class="row">
                <div class="small-12 columns title-main">
                    <h1>/words</h1>
                </div>
            </div>


            @include('layouts.partials._navigation')

            @yield('content')
        <!-- </div> -->
    </div>

    @include('layouts.partials._footer')

</body>
</html>