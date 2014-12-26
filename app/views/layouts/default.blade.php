<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>/words</title>
</head>
<body>

    <div class="container">
            @if(Auth::check())
                @include('layouts.partials._adminbar')
            @endif

            <h1>/words</h1>

            @include('layouts.partials._navigation')

            @yield('content')
    </div>

    @include('layouts.partials._footer')

</body>
</html>