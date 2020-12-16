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
                            Website.
                        </h1>
                        <h2 class="subtitle is-4">
                            Suche dein perfektes Paket aus
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing V1-D -->
    <div class="section section-primary has-pseudo-lines z-index-0">
        <div class="container">
            <div class="content-wrapper">
                <div class="classic-pricing">
                    <div class="pricing-table is-horizontal">
                        <!-- Pricing Plan -->
                        <div class="pricing-plan">
                            <div class="plan-header">Starter</div>
                            <div class="plan-items">
                                <div class="plan-item"><b>Professionelles</b> Logo</div>
                                <div class="plan-item"><b>PNG</b> Datei</div>
                                <div class="plan-item">Verschiedene Farben</div>
                                <div class="plan-item">Alle Rechte</div>
                                <div class="plan-item">-</div>
                                <div class="plan-item">-</div>
                                <div class="plan-item">-</div>
                                <div class="plan-item">-</div>
                            </div>
                            <div class="plan-footer">
                                <div class="plan-price"><span class="plan-price-amount">14,99<span class="plan-price-currency">€</span></span></div>
                                @guest
                                    <a href="/login" class="button is-fullwidth">Anmelden</a>
                                @endguest
                                @auth
                                    {!! Form::open(['url' => '/products', 'method' => 'post']) !!}
                                    {{ Form::hidden('id', '1') }}
                                    {{ Form::submit('In den Warenkorb legen', ['class' => 'button is-fullwidth']) }}
                                    {!! Form::close() !!}
                                @endauth
                            </div>
                        </div>
                        <!-- Pricing Plan -->
                        <div class="pricing-plan is-secondary">
                            <div class="plan-header">Pro</div>
                            <div class="plan-items">
                                <div class="plan-item"><b>Professionelles</b> Logo</div>
                                <div class="plan-item"><b>PNG & JPEG</b> Datei</div>
                                <div class="plan-item">Verschiedene Farben</div>
                                <div class="plan-item">Alle Rechte</div>
                                <div class="plan-item"><b>5</b> Überarbeitungen</div>
                                <div class="plan-item">-</div>
                                <div class="plan-item">-</div>
                                <div class="plan-item">-</div>
                            </div>
                            <div class="plan-footer">
                                <div class="plan-price"><span class="plan-price-amount">24,99<span class="plan-price-currency">€</span></span></div>
                                @guest
                                    <a href="/login" class="button is-fullwidth">Anmelden</a>
                                @endguest
                                @auth
                                    {!! Form::open(['url' => '/products', 'method' => 'post']) !!}
                                    {{ Form::hidden('id', '2') }}
                                    {{ Form::submit('In den Warenkorb legen', ['class' => 'button is-fullwidth']) }}
                                    {!! Form::close() !!}
                                @endauth
                            </div>
                        </div>
                        <!-- Pricing Plan -->
                        <div class="pricing-plan is-primary is-active">
                            <div class="plan-header">Business</div>
                            <div class="plan-items">
                                <div class="plan-item"><b>Professionelles</b> Logo</div>
                                <div class="plan-item"><b>PNG & JPEG</b> Datei</div>
                                <div class="plan-item">Verschiedene Farben</div>
                                <div class="plan-item">Alle Rechte</div>
                                <div class="plan-item"><b>7</b> Überarbeitungen</div>
                                <div class="plan-item"><b>Vector</b> Dateien</div>
                                <div class="plan-item">-</div>
                                <div class="plan-item">-</div>
                            </div>
                            <div class="plan-footer">
                                <div class="plan-price"><span class="plan-price-amount">32,99<span class="plan-price-currency">€</span></span></div>
                                @guest
                                    <a href="/login" class="button is-fullwidth">Anmelden</a>
                                @endguest
                                @auth
                                    {!! Form::open(['url' => '/products', 'method' => 'post']) !!}
                                    {{ Form::hidden('id', '3') }}
                                    {{ Form::submit('In den Warenkorb legen', ['class' => 'button is-fullwidth']) }}
                                    {!! Form::close() !!}
                                @endauth
                            </div>
                        </div>
                        <!-- Pricing Plan -->
                        <div class="pricing-plan is-accent">
                            <div class="plan-header">Enterprise</div>
                            <div class="plan-items">
                                <div class="plan-item"><b>Professionelles</b> Logo</div>
                                <div class="plan-item"><b>PNG & JPEG</b> Datei</div>
                                <div class="plan-item">Verschiedene Farben</div>
                                <div class="plan-item">Alle Rechte</div>
                                <div class="plan-item"><b>10</b> Überarbeitungen</div>
                                <div class="plan-item"><b>Vector</b> Dateien</div>
                                <div class="plan-item"><b>Source</b> Dateien</div>
                                <div class="plan-item">Express Lieferung</div>
                            </div>
                            <div class="plan-footer">
                                <div class="plan-price"><span class="plan-price-amount">49,99<span class="plan-price-currency">€</span></span></div>
                                @guest
                                    <a href="/login" class="button is-fullwidth">Anmelden</a>
                                @endguest
                                @auth
                                    {!! Form::open(['url' => '/products', 'method' => 'post']) !!}
                                    {{ Form::hidden('id', '4') }}
                                    {{ Form::submit('In den Warenkorb legen', ['class' => 'button is-fullwidth']) }}
                                    {!! Form::close() !!}
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
