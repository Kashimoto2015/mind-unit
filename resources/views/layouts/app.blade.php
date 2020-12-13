<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Mind-Unit - Home</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link id="theme-sheet" rel="stylesheet" href="{{ asset('assets/css/night.css') }}">

</head>

<body class="is-theme-night">
<div class="pageloader"></div>
<div class="infraloader is-active"></div>

@yield('hero')
    <!--Nav-->
    <nav class="navbar navbar-wrapper navbar-faded navbar-dark">
        <div class="container">
            <!-- Brand -->
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img class="light-logo" src="{{ asset('assets/img/logos/logo/bulkit-white.svg') }}" alt="">
                    <img class="dark-logo switcher-logo" src="{{ asset('assets/img/logos/logo/bulkit-core.svg') }}" alt="">
                </a>

                <!-- Responsive toggle -->
                <div class="custom-burger" data-target="">
                    <a id="" class="responsive-btn" href="javascript:void(0);">
                                <span class="menu-toggle">
                                    <span class="icon-box-toggle">
                                        <span class="rotate">
                                            <i class="icon-line-top"></i>
                                            <i class="icon-line-center"></i>
                                            <i class="icon-line-bottom"></i>
                                        </span>
                                </span>
                                </span>
                    </a>
                </div>
                <!-- /Responsive toggle -->
            </div>

            <!-- Navbar menu -->
            <div class="navbar-menu">
                <!-- Navbar Start -->
                <div class="navbar-start">
                    <!-- Navbar item -->
                    <a class="navbar-item is-slide" href="/about-us">
                        About Us
                    </a>
                    <!-- Navbar item -->
                    <a class="navbar-item is-slide" href="/products">
                        Products
                    </a>
                    <!-- Navbar item -->
                    <a class="navbar-item is-slide" href="/register">
                        Register
                    </a>
                </div>

                <!-- Navbar end -->
                <div class="navbar-end">
                    <!-- Signup button -->
                    <div class="navbar-item">
                        @guest
                            <a id="#signup-btn" href="/login" class="button button-signup btn-outlined is-bold btn-align rounded raised">
                                Login
                            </a>
                        @endguest
                        @auth
                            <div class="button button-signup btn btn-outlined is-bold btn-align rounded raised is-drop">{{ auth()->user()->name }} <i class="sl sl-icon-arrow-down is-icon-xs ml-2"></i>
                                <div class="dropContain">
                                    <div class="dropOut">
                                        <ul>
                                            <li><a href="/credits" style="text-decoration: none;"><i class="drop-icon sl sl-icon-wallet"></i> Guthaben: {{ auth()->user()->credit }}€</a></li>
                                            <li>
                                                <a href="{{ route('logout') }}" style="text-decoration: none;" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="drop-icon sl sl-icon-logout"></i> Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</div>

<!-- Dark footer -->
<footer id="dark-footer" class="footer footer-dark">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="footer-column">
                    <div class="footer-header">
                        <h3>Product</h3>
                    </div>
                    <ul class="link-list">
                        <li><a href="#">Discover features</a></li>
                        <li><a href="#">CMS integration</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Weekly sessions</a></li>
                        <li><a href="#">Free trials and demo</a></li>
                        <li><a href="#">What's next ?</a></li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="footer-column">
                    <div class="footer-header">
                        <h3>Company</h3>
                    </div>
                    <ul class="link-list">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">About security</a></li>
                        <li><a href="#">User guide</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Terms of website use</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="footer-column">
                    <div class="footer-header">
                        <h3>Learning</h3>
                    </div>
                    <ul class="link-list">
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">API documentation</a></li>
                        <li><a href="#">Admin guide</a></li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="footer-column">
                    <div class="footer-logo">
                        <img class="switcher-logo-w" src="{{ asset('assets/img/logos/logo/bulkit-core-w.svg') }}" alt="">
                    </div>
                    <div class="footer-header">
                        <nav class="level is-mobile">
                            <div class="level-left level-social">
                                <a href="#" class="level-item">
                                    <span class="icon"><i class="fa fa-facebook"></i></span>
                                </a>
                                <a href="#" class="level-item">
                                    <span class="icon"><i class="fa fa-twitter"></i></span>
                                </a>
                                <a href="#" class="level-item">
                                    <span class="icon"><i class="fa fa-linkedin"></i></span>
                                </a>
                                <a href="#" class="level-item">
                                    <span class="icon"><i class="fa fa-dribbble"></i></span>
                                </a>
                                <a href="#" class="level-item">
                                    <span class="icon"><i class="fa fa-github"></i></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="copyright">
                        <span class="moto light-text">Designed and coded with <i class="fa fa-heart color-red"></i> by CSS Ninja.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Dark footer -->
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
<!-- Google maps api call with api key -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU"></script>
<!-- Concatenated jQuery and plugins -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Bulkit js -->
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script src="{{ asset('assets/js/auth.js') }}"></script>
<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
