@extends('layouts.app')

<head>
    <title> Mind-Unit - Products</title>
</head>

@section('content')
<!-- Hero and Navbar -->
<div class="hero is-relative is-app-grey is-medium is-pricing has-animated-waves waves-bottom waves-primary">

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

    <!--Animated Waves-->
    <div class="animated-waves">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">

                <div class="column is-6 is-offset-3 is-hero-title has-text-centered">
                    <h1 class="title is-1 is-medium">
                        Produkte.
                    </h1>
                    <h2 class="subtitle is-4">
                        Wählen Sie ein Produkt
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pricing Section -->
<div class="section section-primary has-pseudo-lines z-index-0">
    <div class="container">
        <!-- Pricing wrapper -->
        <div class="switch-pricing-wrapper">
            <div class="pricing-container">
                <!-- Pricing Switcher -->
                <div class="pricing-switcher">
                    <p class="fieldset">
                        <input type="radio" name="duration-1" value="monthly" id="monthly-1" checked>
                        <label for="monthly-1">Monthly</label>
                        <input type="radio" name="duration-1" value="yearly" id="yearly-1">
                        <label for="yearly-1">Yearly</label>
                        <span class="switch"></span>
                    </p>
                </div>

                <div class="columns tables-wrap">
                    <!-- Pricing table -->
                    <div class="column is-4">
                        <div class="flex-card hover-inset">
                            <!-- Pricing image -->
                            <div class="pricing-image-container">
                                <img class="featured-svg" src="{{ asset('assets/img/graphics/icons/pricing-icon-1-core.svg') }}" data-base-url="assets/img/graphics/icons/pricing-icon-1" data-extension=".svg" alt="">
                                <div class="plan-price is-monthly is-active">
                                    <span>Ab 20</span>
                                </div>
                                <div class="plan-price is-yearly">
                                    <span>180</span>
                                </div>
                            </div>
                            <!-- Pricing plan name -->
                            <div class="plan-name has-text-centered">
                                <h3>Logo Design</h3>
                            </div>
                            <!-- Pricing plan features -->
                            <ul class="plan-features">
                                <li>Professionelles Logo Design</li>
                                <li>Auf Kunden abgestimmte Logos</li>
                                <li>Source,- und Vectorfiles sind wählbar</li>
                            </ul>
                            <!-- Pricing action -->
                            <div class="button-wrapper">
                                <a href="/products/logo-design" class="button primary-btn btn-outlined is-fullwidth raised btn-align is-bold btn-upper">Zur Kategorie</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing table -->
                    <div class="column is-5">
                        <div class="flex-card hover-inset">
                            <!-- Pricing image -->
                            <div class="pricing-image-container">
                                <img class="featured-svg" src="{{ asset('assets/img/graphics/icons/pricing-icon-2-core.svg') }}" data-base-url="assets/img/graphics/icons/pricing-icon-2" data-extension=".svg" alt="">
                                <div class="plan-price is-monthly is-active">
                                    <span>Ab 50</span>
                                </div>
                                <div class="plan-price is-yearly">
                                    <span>400</span>
                                </div>
                            </div>
                            <!-- Pricing plan name -->
                            <div class="plan-name has-text-centered">
                                <h3>Website</h3>
                            </div>
                            <!-- Pricing plan features -->
                            <ul class="plan-features">
                                <li>Auf Kundenwunsch erstellte Website</li>
                                <li>Hochwertige Website garantiert</li>
                                <li>Source-Code inklusive</li>
                            </ul>
                            <!-- Pricing action -->
                            <div class="button-wrapper">
                                <a href="#" class="button primary-btn is-fullwidth raised btn-align is-bold btn-upper">Zur Kategorie</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing table -->
                    <div class="column is-4">
                        <div class="flex-card hover-inset">
                            <!-- Pricing image -->
                            <div class="pricing-image-container">
                                <img class="featured-svg" src="{{ asset('assets/img/graphics/icons/pricing-icon-3-core.svg') }}" data-base-url="assets/img/graphics/icons/pricing-icon-3" data-extension=".svg" alt="">
                                <div class="plan-price is-monthly is-active">
                                    <span>Ab 30</span>
                                </div>
                                <div class="plan-price is-yearly">
                                    <span>600</span>
                                </div>
                            </div>
                            <!-- Pricing plan name -->
                            <div class="plan-name has-text-centered">
                                <h3>Bewerbungen</h3>
                            </div>
                            <!-- Pricing plan features -->
                            <ul class="plan-features">
                                <li>Perfekte Bewerbung erstellen</li>
                                <li>Sehr gute Gliederung</li>
                                <li>Mind. 3 überarbeitungen möglich</li>
                            </ul>
                            <!-- Pricing action -->
                            <div class="button-wrapper">
                                <a href="#" class="button primary-btn is-fullwidth btn-outlined raised btn-align is-bold btn-upper">Zur Kategorie</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-80"></div>
        <div class="mb-80"></div>
        <div class="mb-80"></div>
    </div>
</div>



<!-- FAQ -->
<section class="section is-medium section-feature-grey">
    <div class="container">

        <h2 class="title section-subtitle dark-text text-bold has-text-centered is-2 pt-20 pb-20">
            You have some questions ?
        </h2>

        <div class="content-wrapper">
            <div class="columns">
                <div class="column is-4 is-offset-2">
                    <div class="content">
                        <p class="text-bold dark-text">1. How do i get started?</p>
                        <p>Lorem ipsum dolor sit amet, accusata voluptatibus per eu, probo summo argumentum ea vel. Pri
                            nonumy sententiae ex, eam adhuc regione tibique te. Et sit alii vero harum, ne his viderer
                            consectetuer.</p>
                    </div>
                    <div class="content">
                        <p class="text-bold dark-text">3. Where can i get training?</p>
                        <p>Lorem ipsum dolor sit amet, accusata voluptatibus per eu, probo summo argumentum ea vel. Pri
                            nonumy sententiae ex, eam adhuc regione tibique te. Et sit alii vero harum, ne his viderer
                            consectetuer.</p>
                    </div>
                    <div class="content">
                        <p class="text-bold dark-text">5. Are updates mandatory?</p>
                        <p>Lorem ipsum dolor sit amet, accusata voluptatibus per eu, probo summo argumentum ea vel. Pri
                            nonumy sententiae ex, eam adhuc regione tibique te. Et sit alii vero harum, ne his viderer
                            consectetuer.</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="content">
                        <p class="text-bold dark-text">2. How can i add people to my team?</p>
                        <p>Lorem ipsum dolor sit amet, accusata voluptatibus per eu, probo summo argumentum ea vel. Pri
                            nonumy sententiae ex, eam adhuc regione tibique te. Et sit alii vero harum, ne his viderer
                            consectetuer.</p>
                    </div>
                    <div class="content pb-40">
                        <p class="text-bold dark-text">4. Do you have a refund policy?</p>
                        <p>Lorem ipsum dolor sit amet, accusata voluptatibus per eu, probo summo argumentum ea vel. Pri
                            nonumy sententiae ex, eam adhuc regione tibique te. Et sit alii vero harum, ne his viderer
                            consectetuer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
