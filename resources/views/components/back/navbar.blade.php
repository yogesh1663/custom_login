<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand">Navbar</a>
    @auth
        <ul class="list-inline">
            <li class="list-inline-item text-white">{{ auth()->user()->name }}</li>
            <li class="list-inline-item"><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    @else
        <ul class="list-inline">
            <li class="list-inline-item"><a href="{{ route('view.login') }}">Login</a></li>
            <li class="list-inline-item"><a href="{{ route('create.register') }}">Register</a></li>
        </ul>
    @endauth
</nav>
