<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/images/logos/logo-2.png') }}" alt="Backspace Software Developers">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav main-nav-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logos/logo-1.png') }}" alt="Backspace Software Developers">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->routeIs('portfolio.*') ? 'active' : '' }}">
                                Portfolio
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('portfolio.case-studies') }}" class="nav-link">
                                        Our Projects
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('portfolio.testimonials') }}" class="nav-link">
                                        Client Testimonials
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('portfolio.team') }}" class="nav-link">
                                        Our Team
                                    </a>
                                </li>
                            </ul>
                        </li>

                       <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}">
                                Services
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('services.index') }}" class="nav-link">
                                        All Services
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('services.style-one') }}" class="nav-link">
                                        Web Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('services.style-two') }}" class="nav-link">
                                        Mobile Apps
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog.index') }}" class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }}">
                                Insights
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>

                    <div class="nav-btn">
                        <a href="{{ route('contact') }}" class="default-btn btn-bg1 border-radius-5">Request A Quote</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
