
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="index.html">
                    <img src="assets/images/logo/logo.png" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <x-nav-link route="home" title="home" />
                <li>
                    <a href="#0">pages</a>
                    <ul class="submenu">
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="apps-download.html">Apps Download</a>
                        </li>
                        <li>
                            <a href="sign-in.html">Sign In</a>
                        </li>
                        <li>
                            <a href="sign-up.html">Sign Up</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#0">blog</a>
                    <ul class="submenu">
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="blog-details.html">Blog Single</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
                <li>
                    <div class="d-flex gap-2">
                        @guest
                            <a href="{{ route('login') }}"
                                class="btn btn-sm btn-primary fs-16 fw-normal me-2 px-4"
                            >Login</a>
                        @endguest
                        @auth
                            <a href="{{ route('logout') }}"
                                class="btn btn-sm btn-danger fs-16 fw-normal px-4"
                            >Logout</a>
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
