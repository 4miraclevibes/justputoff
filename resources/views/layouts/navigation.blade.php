<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/its.png') }}" alt="Logo" style="width: 50px; height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('landing') ? 'active' : '' }}" aria-current="page" href="{{ route('landing') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('landing') ? 'active' : '' }}" aria-current="page" href="{{ route('landing') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('landing') ? 'active' : '' }}" aria-current="page" href="{{ route('landing') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('landing') ? 'active' : '' }}" aria-current="page" href="{{ route('landing') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('landing') ? 'active' : '' }}" aria-current="page" href="{{ route('landing') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('landing') ? 'active' : '' }}" aria-current="page" href="{{ route('landing') }}">Home</a>
                </li>
            </ul>
            @if (Auth::check())
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="nav-link">Logout</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                </ul>
            @else
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>