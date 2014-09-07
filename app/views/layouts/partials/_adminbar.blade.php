<nav class="row admin-bar">
    <div class="small-12 columns">
        <ul>
            <li>{{ link_to_route('posts.create', 'Make New Post') }}</li>
            <li>{{ link_to_route('admin.index', 'Admin Section') }}</li>
            <li>{{ link_to_route('logout', 'Log Out') }}</li>
        </ul>
    </div>
</nav>