@extends('layouts.app')

<head>
    <title>Mind-Unit - Logo Design</title>
</head>

@section('content')
    <div class="hero is-relative is-app-grey is-medium is-pricing has-animated-waves waves-bottom waves-primary">

        <!--Nav-->
        <nav class="navbar navbar-wrapper is-cloned">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img class="light-logo" src="{{ asset('assets/img/logos/logo/bulkit-night.svg') }}" alt="">
                        <img class="dark-logo switcher-logo" src="{{ asset('assets/img/logos/logo/bulkit-night.svg') }}" alt="">
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
                                <a id="#signup-btn" href="/login" class="button button-signup btn-outlined is-bold btn-align dark-btn rounded raised">
                                    Login
                                </a>
                            @endguest
                            @auth
                                <div class="button button-signup btn btn-outlined is-bold btn-align dark-btn rounded raised is-drop">{{ auth()->user()->name }} <i class="sl sl-icon-arrow-down is-icon-xs ml-2"></i>
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

        <nav class="navbar navbar-wrapper is-transparent is-static">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img class="light-logo" src="{{ asset('assets/img/logos/logo/bulkit-night.svg') }}" alt="">
                        <img class="dark-logo switcher-logo" src="{{ asset('assets/img/logos/logo/bulkit-night.svg') }}" alt="">
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
                                <a id="#signup-btn" href="/login" class="button button-signup btn-outlined is-bold btn-align dark-btn rounded raised">
                                    Login
                                </a>
                            @endguest
                            @auth
                                <div class="button button-signup btn btn-outlined is-bold btn-align dark-btn rounded raised is-drop">{{ auth()->user()->name }} <i class="sl sl-icon-arrow-down is-icon-xs ml-2"></i>
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
                            Beschreibung.
                        </h1>
                        <h2 class="subtitle is-4">
                            Beschreibe dein Logo und füge Beispiele hinzu
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-primary has-pseudo-lines z-index-0">
        <!-- Material contact form -->
        <div class="columns is-vcentered pb-60">
            <div class="column is-4 is-offset-4">
                <div class="flex-card light-bordered light-raised">
                    <div class="card-body">
                        <form class="padding-20">
                            <div class="control-material is-secondary">
                                <textarea rows="5"></textarea>
                                <span class="material-highlight"></span>
                                <span class="bar"></span>
                                <label>Beschreibung deines Logo Designs *</label>
                            </div>
                            <div class="column"></div>
                            <h4>Beispieldesigns angeben</h4>
                            <div class="column"></div>
                            <div class="uploader-controls animated preFadeInUp fadeInUp">
                                <input type="file" name="fielduploader">
                                <label>Bitte nur .png oder .jpg hochladen</label>
                            </div>
                            <div class="column"></div>
                            <div class="mt-20 has-text-right">
                                <button type="submit" class="button btn-align button-cta no-lh is-bold secondary-btn raised">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
