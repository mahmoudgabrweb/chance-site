<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{ url("/") }}">
                        <img src="{{ url("public/assets/img/logo.jpg") }}" class="black-logo" alt="image">
                        <img src="{{ url("public/assets/img/logo.jpg") }}" class="white-logo" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url("/") }}">
                    <img src="{{ url("public/assets/img/logo.jpg") }}" class="black-logo" alt="image">
                    <img src="{{ url("public/assets/img/logo.jpg") }}" class="white-logo" alt="image">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url("/") }}" class="nav-link @if($pageName === "home") active @endif">
                                <i class='bx bx-home-heart'></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url("services") }}" class="nav-link @if($pageName === "services") active @endif">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url("events") }}" class="nav-link @if($pageName === "events") active @endif">
                                Events
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url("articles") }}" class="nav-link @if($pageName === "articles") active @endif">
                                Articles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url("about-us") }}" class="nav-link @if($pageName === "about") active @endif">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url("contact-us") }}" class="nav-link @if($pageName === "contact") active @endif">
                                Contact Us
                            </a>
                        </li>
                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <div class="dropdown language-switcher d-inline-block">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span><i class='bx bxs-user-circle'></i> Account <i class='bx bx-chevron-down'></i></span>
                                </button>

                                <div class="dropdown-menu">
                                    <a href="{{ url("login") }}" class="dropdown-item d-flex align-items-center">
                                        <span>Login</span>
                                    </a>
                                    <a href="{{ url("profile") }}" class="dropdown-item d-flex align-items-center">
                                        <span>Profile</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="option-item">
                            <a href="{{ url("book") }}" class="default-btn">Book an Appointment</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <div class="dropdown language-switcher d-inline-block">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <span><i class='bx bxs-user-circle'></i> Account <i class='bx bx-chevron-down'></i></span>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ url("login") }}" class="dropdown-item d-flex align-items-center">
                                        <span>Login</span>
                                    </a>
                                    <a href="{{ url("profile") }}" class="dropdown-item d-flex align-items-center">
                                        <span>Profile</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="option-item">
                            <a href="{{ url("book") }}" class="default-btn">Book an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
