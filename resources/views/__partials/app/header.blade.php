<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="/">
                    <img src="assets/images/logo/logo.png" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <x-nav-link title="home" route="home" />
                <x-nav-link title="movies" route="movies" />
                <x-nav-link title="shop" route="shop" />
                {{-- <x-nav-link title="history" route="history" />
                <x-nav-link title="my ticket" route="my-ticket" /> --}}
                <li>
                    <div class="d-flex gap-2">
                        @guest
                            <a class="btn btn-sm btn-primary fs-16 fw-normal me-2 px-4"
                                href="{{ route('login') }}">Login</a>
                        @endguest
                        @auth
                            <a class="btn btn-sm btn-danger fs-16 fw-normal px-4" href="{{ route('logout') }}">Logout</a>
                        @endauth
                    </div>
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
