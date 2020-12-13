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

@yield('content')

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
