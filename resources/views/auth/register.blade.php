<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Mind-Unit - Registreren </title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/night.css') }}">
</head>

<body>
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<!-- Wrapper -->
<div class="login-wrapper columns is-gapless">
    <!-- Form section -->
    <div class="column is-5">
        <div class="hero is-fullheight">
            <!-- Header -->
            <div class="hero-heading">
                <div class="auth-logo">
                    <a href="/"><img class="top-logo switcher-logo" src="{{ asset('assets/img/logos/logo/bulkit-core.svg') }}" alt=""></a>
                </div>
            </div>

            <!-- Body -->
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="column is-8 is-offset-2">

                            <div class="auth-content">
                                <h2>Willkommen</h2>
                                <p>Bitte erstellen Sie einen Account.</p>
                                <a href="/login">Haben Sie einen Account? Login</a>
                            </div>

                            <!-- Sign up form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div id="signup-form" class="login-form animated preFadeInLeft fadeInLeft">
                                    <div class="field pb-10">
                                        <div class="control has-icons-right">
                                            <input id="name" name="name" class="input is-medium has-shadow @error('name') is-invalid @enderror" type="text" placeholder="Benutzername">
                                            <span class="icon is-medium is-right">
                                                        <i class="sl sl-icon-user"></i>
                                                    </span>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="field pb-10">
                                        <div class="control has-icons-right">
                                            <input id="email" name="email" class="input is-medium has-shadow @error('email') is-invalid @enderror" type="text" placeholder="Email Adresse">
                                            <span class="icon is-medium is-right">
                                                        <i class="sl sl-icon-envelope-open"></i>
                                                    </span>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="field pb-10">
                                        <div class="control has-icons-right">
                                            <input id="password" name="password" class="input is-medium has-shadow @error('password') is-invalid @enderror" type="password" placeholder="Passwort">
                                            <span class="icon is-medium is-right">
                                                        <i class="sl sl-icon-lock"></i>
                                                    </span>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="field pb-10">
                                        <div class="control has-icons-right">
                                            <input class="input is-medium has-shadow" name="password_confirmation" id="password-confirm" type="password"  placeholder="Passwort bestätigen">
                                            <span class="icon is-medium is-right">
                                                        <i class="sl sl-icon-lock"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <p class="control login">
                                        <button class="button button-cta primary-btn btn-align-lg btn-outlined is-bold is-fullwidth rounded raised no-lh">Registrieren</button>
                                    </p>
                                </div>
                            </form>

                            <div id="back-to-signup" class="pt-10 pb-10 forgot-password animated preFadeInLeft fadeInLeft is-hidden">
                                <p class="has-text-centered">
                                    <a href="#">Zurück zum Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image section (hidden on mobile) -->
    <div class="column login-column is-7 is-hidden-mobile hero-banner">
        <div class="hero signup-hero login-hero is-fullheight is-theme-primary is-relative">
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
<!-- /Side navigation -->
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
