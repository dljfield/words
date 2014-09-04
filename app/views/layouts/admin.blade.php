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
                <li>{{ link_to_route('posts.create', 'Make New Post') }}</li>
                <li>{{ link_to_route('admin.index', 'Admin Section') }}</li>
                <li>{{ link_to_route('logout', 'Log Out') }}</li>
            </ul>
        </nav>

        <h2>ADMIN SECTION</h2>
        <p>Don't be doing anything derpy now, ya hear?</p>

        @yield('content')
    </div>

</body>
</html>