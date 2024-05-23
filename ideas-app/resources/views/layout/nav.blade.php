<nav class="navbar navbar-expand-lg ticky-top bg-primary" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-light" href="/"><span class="fas fa-brain me-1">
            </span>{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="{{ Route::is('login') ? 'active' : '' }} nav-link" aria-current="page"
                            href="{{ route('login') }}">{{ trans('ideas.login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Route::is('register') ? 'active' : '' }} nav-link"
                            href="{{ route('register') }}">{{ trans('ideas.register') }}</a>
                    </li>
                @endguest
                @auth
                    @if (Auth::user()->is_admin)
                        <li class="nav-item">
                            <a class="{{ Route::is('admin.dashboard') ? 'active' : '' }} nav-link"
                                href="{{ route('admin.dashboard') }}">{{ trans('ideas.admin_dashboard') }}</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="{{ Route::is('profile') ? 'active' : '' }} nav-link"
                            href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-small">{{ trans('ideas.logout') }}</button>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
