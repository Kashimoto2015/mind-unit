<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Mind-Unit - Login</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link id="theme-sheet" rel="stylesheet" href="{{ asset('assets/css/night.css') }}">
</head>

<body>
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<!-- Wrapper -->
<div class="login-wrapper columns is-gapless">

    <!-- Form section -->
    <div class="column is-7">
        <div class="hero is-fullheight">
            <div class="hero-heading">
                <div class="auth-logo">
                    <a href="/"><img class="top-logo switcher-logo" src="{{ asset('assets/img/logos/logo/bulkit-core.svg') }}" alt=""></a>
                </div>
            </div>
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="column"></div>
                        <div class="column is-5">

                            <div class="auth-content">
                                <h2>Welcome Back.</h2>
                                <p>Please sign in to your account</p>
                                <a href="/register">I do not have an account yet </a>
                            </div>

                            <!-- Login Form -->
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div id="signin-form" class="login-form animated preFadeInLeft fadeInLeft">
                                    <!-- Input -->
                                    <div class="field pb-10">
                                        <div class="control has-icons-right">
                                            <input id="email" type="email" class="input is-medium has-shadow @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <span class="icon is-medium is-right">
                                                        <i class="sl sl-icon-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Input -->
                                    <div class="field pb-10">
                                        <div class="control has-icons-right">
                                            <input id="password" type="password" class="input is-medium has-shadow @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Passwort">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <span class="icon is-medium is-right">
                                                        <i class="sl sl-icon-lock"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Submit -->
                                    <p class="control login">
                                        <button type="submit" class="button button-cta primary-btn btn-align-lg is-bold is-fullwidth rounded raised no-lh">
                                            {{ __('Login') }}
                                        </button>
                                    </p>
                                </div>
                            </form>

                            <!-- Toggles -->
                            <div id="recover" class="pt-10 pb-10 forgot-password animated preFadeInLeft fadeInLeft">
                                <p class="has-text-centered">
                                    <a href="#">Forgot password ?</a>
                                </p>
                            </div>

                            <div id="back-to-login" class="pt-10 pb-10 forgot-password animated preFadeInLeft fadeInLeft is-hidden">
                                <p class="has-text-centered">
                                    <a href="#">Back to Sign in</a>
                                </p>
                            </div>
                        </div>
                        <div class="column"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image section (hidden on mobile) -->
    <div class="column login-column is-5 is-hidden-mobile hero-banner">
        <div class="hero login-hero is-fullheight is-theme-primary is-relative">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <!-- /Image section -->
</div>
<!-- /Wrapper -->
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div> <!-- Concatenated jQuery and plugins -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Bulkit js -->
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script src="{{ asset('assets/js/auth.js') }}"></script>
<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Landing page js -->
</body>

</html>
