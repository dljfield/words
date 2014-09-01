<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thedebonair/words</title>
    {{ HTML::style('css/words.css') }}
</head>
<body>

    <div class="container">
        <h1>thedebonair/words</h1>

        <nav>
            <ul>
                <li>{{ link_to_route('home', 'Home') }}</li>
                <li>{{ link_to_route('posts.index', 'All Posts') }}</li>
            </ul>
        </nav>

        @yield('content')
    </div>

</body>
</html>