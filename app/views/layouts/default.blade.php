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

        <nav>
            <ul>
                <li>{{ link_to_route('home', 'Home') }}</li>
                <li>{{ link_to_route('posts.index', 'All Posts') }}</li>
                @if(Auth::check())
                    <li>{{ link_to_route('posts.create', 'Make New Post') }}</li>
                    <li>{{ link_to_route('admin.index', 'Admin Section') }}</li>
                    <li>{{ link_to_route('logout', 'Log Out') }}</li>
                @endif
            </ul>
        </nav>

        @yield('content')
    </div>

</body>
</html>