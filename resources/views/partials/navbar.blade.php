<nav class="navbar navbar-dark navbar-fixed-top bg-inverse">
    <div class="container">
        <a class="navbar-brand" href="#">Instalbum</a>
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item @if(Request::is('/')) active @endif">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sign up</a>
            </li>
        </ul>
    </div>
</nav>