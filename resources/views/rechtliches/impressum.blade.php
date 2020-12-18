<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Bulkit - About-Us</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link id="theme-sheet" rel="stylesheet" href="{{ asset('assets/css/night.css') }}">

</head>

<body class="is-theme-core">
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<!-- Hero (Parallax) and nav -->
<div class="hero is-app-grey">

    <nav class="navbar navbar-wrapper is-cloned">
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

    <nav class="navbar navbar-wrapper is-transparent is-static">
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
    <!-- Hero image -->
    <div id="main-hero" class="hero-body">
        <div class="container has-text-centered">
            <div class="columns is-vcentered">
                <div class="column is-6 is-offset-3 has-text-centered is-subheader-caption">
                    <h1 class="title is-2">
                        Impressum
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Article body -->
<div class="flex-card">
    <div class="article-inner">
        <!-- Article meta -->
        <h2 class="title is-3 dark-text">
            Terms of Service
        </h2>
        <h3 class="subtitle is-5">General Terms of Service</h3>
        <div class="article-meta">
            <img class="small-avatar" src="https://cssninja.io/themes/cssninja/assets/images/logo/cssninja-icon.svg" alt="">
            <div class="meta-info">
                <div class="author">Written by <span>Driss</span></div>
                <div class="status">Published on dec 12 2020</div>
            </div>
        </div>

        <!-- Article content -->
        <div class="content">
            <p>These terms and conditions set out the terms and conditions between you, the customer, and Css Ninja (“us”,
                “we”, "Css Ninja"), governing the use of our website and our downloadable digital recordings including the content therein (the
                “products”). Your use of our website, and purchase, download and use of our products, constitutes your full acceptance
                of these terms and conditions. If you do not agree with these terms and conditions, you should not use our website or
                purchase, download or use any of our products.</p>

            <p>By buying a Css Ninja product, you confirm that you
                are in agreement with and bound by the terms and conditions contained in the Terms Of
                Service outlined below. These terms apply to the entire website and any email or other type
                of communication between you and Css Ninja. </p>

            <p>Under no circumstances shall Css Ninja team be liable for any direct, indirect, special,
                incidental or consequential damages, including, but not limited to, loss of data or
                profit, arising out of the use, or the inability to use, the materials on this site,
                even if Css Ninja team or an authorized representative has been advised of the
                possibility of such damages. If your use of materials from this site results in the need
                for servicing, repair or correction of equipment or data, you assume any costs thereof.
            </p>

            <p>Css Ninja will not be responsible for any outcome
                that may occur during the course of usage of our resources.We reserve the rights to
                change prices and revise the resources usage policy in any moment.</p>

            <h4 class="subtitle is-5 dark-text">Products</h4>

            <p>All products and services are delivered by Css Ninja electronically. Every download link issued by Css Ninja is personal and you should not share it. To prevent abusive behaviors, all Css Ninja product download links will expire after 50 successful downloads. A license should be bought each time you use a Css Ninja product in one of your projects (personal license). You can buy some of our products on other marketplaces. In that case, the Terms Of Service of those marketplaces prevail. </p>

            <h4 class="subtitle is-5 dark-text">License and Use</h4>

            <p>Your purchase of one of our products constitutes our granting to you of a non-exclusive, non-sublicensable,
                non-transferable license to download and access that product for the purpose of your own personal use and reference, and
                print or convert the product to an image or vector format for your own storage, retention and reference (the “purpose”).</p>

            <p>You agree that under no circumstances shall you use, or permit to be used, any product other than for the aforesaid
                purpose. For the avoidance of doubt, you shall not copy, re-sell, sublicense, rent out, share or otherwise distribute
                any of our products, whether modified or not, to any third party. You agree not to use any of our products in a way
                which might be detrimental to us or damage our reputation.</p>

            <p>For more information about licenses, please refer to the <a href="/help/terms/licenses/personal" target="_blank">Personal License</a> and <a href="/help/terms/licenses/developer" target="_blank">Developer License</a></p>

            <h4 class="subtitle is-5 dark-text">Payments</h4>

            <p>We process all of our payments through PayPal. PayPal is fully compliant with OFAC regulations, restricting
                shoppers from the following countries from placing orders.</p>
            <ul>
                <li>The Islamic Republic of Iran</li>
                <li>The Republic of Cuba</li>
                <li>The State of Libya</li>
                <li>The Republic of Sudan</li>
                <li>The Syrian Arab Republic</li>
                <li>The Democratic People's Republic of Korea</li>
            </ul>
            <p>The list of countries can be updated without any notice at any moment by OFAC and will be applied immediately. Check the
                official OFAC website for the latest updates.</p>

            <h4 class="subtitle is-5 dark-text">Cookie policy</h4>

            <p>A cookie is a file containing an identifier (a string of letters and numbers) that is
                sent by a web server to a web browser and is stored by the browser. The identifier is
                then sent back to the server each time the browser requests a page from the server. Our
                website uses cookies. By using our website and agreeing to this policy, you consent to
                our use of cookies in accordance with the terms of this policy.</p>

            <p>We use Google Analytics to analyse the use of our website. Our analytics service provider
                generates statistical and other information about website use by means of cookies. Our
                analytics service provider's privacy policy is available at:
                <a href="http://www.google.com/policies/privacy/" target="_blank">http://www.google.com/policies/privacy/</a>.</p>

            <h4 class="subtitle is-5 dark-text">Refunds and Chargebacks</h4>

            <p>Once a product has been purchased by you, no right of cancellation or refund exists under the Consumer Protection
                (Distance Selling) Regulations 2000 due to the electronic nature of our products. Any refunds shall be at our sole and
                absolute discretion. You agree that under no circumstances whatsoever shall you initiate any chargebacks via your
                payment provider. You agree that any payments made by you for any of our products are final and may not be charged back.
                We reserve the right to alter any of our prices from time to time.</p>
            <p>You have 24 hours to inspect your purchase and to determine if it does not meet with the
                expectations laid forth by the seller. In the event that you wish to receive a refund,
                Css Ninja will issue you a refund and ask you to specify how the product failed to live
                up to expectations.</p>

            <h4 class="subtitle is-5 dark-text">Warranties and Liability</h4>

            <p>We make every effort to ensure that our products are accurate, authoritaive and fit for the use of our customers.
                However, we take no responsibility whatsoever for the suitability of the product, and we provide no warranties as to the
                function or use of the product, whether express, implied or statutory, including without limitation any warranties of
                merchantability or fitness for particular purpose</p>

            <p>You agree to indemnify us against all liabilities, claims, demands,
                expenses, actions, costs, damages, or loss arising out of your breach of these terms and conditions. Furthermore, we
                shall not be liable to you or any party for consequential, indirect, special or exemplary damages including but not
                limited to damages for loss of profits, business or anticipated benefits whether arising under tort, contract,
                negligence or otherwise whether or not foreseen, reasonably foreseeable or advised of the possibility of such damages.</p>

            <h4 class="subtitle is-5 dark-text">Ownership</h4>

            <p>Ownership of the product is governed by the usage license selected by the buyer.</p>

            <h4 class="subtitle is-5 dark-text">Term changes</h4>

            <p>If we change our terms of use we will post those changes on this page. Registered users
                will be sent an email that outlines changes made to the terms of use.</p>

        </div>
        <!-- /Article content -->
    </div>
</div>
<!-- /Article body -->

<footer class="footer-light-medium is-white">
    <div class="container">
        <div class="footer-head">
            <div class="head-text">
                <h3>Ready to get started?</h3>
                <p>Create your free account now</p>
            </div>
            <div class="head-action">
                <div class="buttons">
                    <a class="button primary-btn raised action-button is-bold">Try it free</a>
                    <a class="button chat-button">Chat with us</a>
                </div>
            </div>
        </div>
        <div class="columns footer-body">
            <!-- Column -->
            <div class="column is-4">
                <div class="pt-10 pb-10">
                    <img class="small-footer-logo" src="{{ asset('assets/img/logos/bulkit-logo-g.png') }}" alt="">
                    <div class="footer-description">
                        Bulkit is built for developers and designers. It's modular approach lets you create an original
                        landing page for your brand.
                    </div>
                </div>
                <div>
                        <span class="moto">Designed and coded with <i class="fa fa-heart color-red"></i> by CSS
                            Ninja.</span>
                    <div class="social-links">
                        <a href="#">
                            <span class="icon"><i class="fa fa-facebook"></i></span>
                        </a>
                        <a href="#">
                            <span class="icon"><i class="fa fa-twitter"></i></span>
                        </a>
                        <a href="#">
                            <span class="icon"><i class="fa fa-linkedin"></i></span>
                        </a>
                        <a href="#">
                            <span class="icon"><i class="fa fa-dribbble"></i></span>
                        </a>
                        <a href="#">
                            <span class="icon"><i class="fa fa-github"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="column is-6 is-offset-2">
                <div class="columns">
                    <!-- Column -->
                    <div class="column">
                        <ul class="footer-column">
                            <li class="column-header">
                                Bulkit
                            </li>
                            <li class="column-item"><a href="#">Home</a></li>
                            <li class="column-item"><a href="#">Pricing</a></li>
                            <li class="column-item"><a href="#">Get started</a></li>
                            <li class="column-item"><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- Column -->
                    <div class="column">
                        <ul class="footer-column">
                            <li class="column-header">
                                Ressources
                            </li>
                            <li class="column-item"><a href="#">Learning</a></li>
                            <li class="column-item"><a href="#">Support center</a></li>
                            <li class="column-item"><a href="#">Frequent questions</a></li>
                            <li class="column-item"><a href="#">Schedule a demo</a></li>
                        </ul>
                    </div>
                    <!-- Column -->
                    <div class="column">
                        <ul class="footer-column">
                            <li class="column-header">
                                Terms
                            </li>
                            <li class="column-item"><a href="#">Terms of Service</a></li>
                            <li class="column-item"><a href="#">Privacy policy</a></li>
                            <li class="column-item"><a href="#">SaaS services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright has-text-centered">
            <p>&copy; 2019-2020 | <a href="https://cssninja.io">Css Ninja</a> | All Rights Reserved.</p>
        </div>
    </div>
</footer>
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
<!-- Concatenated jQuery and plugins -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Bulkit js -->
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script src="{{ asset('assets/js/auth.js') }}"></script>
<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Landing page js -->
</body>

</html>
