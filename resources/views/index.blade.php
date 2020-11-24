<!DOCTYPE html>
<html lang="en">

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

<body class="is-theme-core">
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<!-- Hero and nav -->
<div class="hero is-cover is-relative is-fullheight is-default is-bold">

    <nav class="navbar navbar-wrapper navbar-fade navbar-light is-transparent">
        <div class="container">
            <!-- Brand -->
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img class="light-logo" src="{{ asset('assets/img/logos/logo/bulkit-white.svg') }}" alt="">
                    <img class="dark-logo switcher-logo" src="{{ asset('assets/img/logos/logo/bulkit-core.svg') }}" alt="">
                </a>

                <!-- Sidebar Trigger -->
                <a id="navigation-trigger" class="navbar-item hamburger-btn" href="javascript:void(0);">
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
                    <a class="navbar-item is-slide" href="agency-about.html">
                        About
                    </a>
                    <!-- Navbar item -->
                    <a class="navbar-item is-slide" href="agency-portfolio.html">
                        Portfolio
                    </a>
                    <!-- Navbar item -->
                    <a class="navbar-item is-slide" href="agency-blog.html">
                        Blog
                    </a>
                </div>

                <!-- Navbar end -->
                <div class="navbar-end">
                    <!-- Signup button -->
                    <div class="navbar-item">
                        <a id="#signup-btn" href="agency-contact.html" class="button button-signup btn-outlined is-bold btn-align light-btn rounded raised">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Hero Wallop Slider -->
    <div class="Wallop Wallop--v1 Wallop--scale">
        <div class="Wallop-list">
            <!-- Slide -->
            <div class="Wallop-item Wallop-item--current has-background-image" data-background="https://via.placeholder.com/1920x1080" data-demo-background="{{ asset('assets/img/demo/agency/agency.jpg') }}">
                <div class="Wallop-overlay"></div>
                <div class="Wallop-caption-wrapper">
                    <div class="Wallop-caption is-centered">
                        <div class="main-inner">
                            <h1>We are a Creative agency</h1>
                        </div>
                        <div>
                            <h4>We create magnificent products that will sublime your business</h4>
                        </div>
                        <div class="caption-action">
                            <a href="#services" class="button button-cta btn-align light-btn btn-outlined is-bold rounded">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide -->
            <div class="Wallop-item has-background-image" data-background="https://via.placeholder.com/1920x1080" data-demo-background="{{ asset('assets/img/demo/agency/agency2.jpg') }}">
                <div class="Wallop-overlay"></div>
                <div class="Wallop-caption-wrapper">
                    <div class="Wallop-caption is-centered">
                        <div class="main-inner">
                            <h1>Looking for epic design ?</h1>
                        </div>
                        <div>
                            <h4>Hire our team of specialists to get the best from the web</h4>
                        </div>
                        <div class="caption-action">
                            <a href="#services" class="button button-cta btn-align light-btn btn-outlined is-bold rounded">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide -->
            <div class="Wallop-item has-background-image" data-background="https://via.placeholder.com/1920x1080" data-demo-background="{{ asset('assets/img/demo/agency/agency3.jpg') }}">
                <div class="Wallop-overlay"></div>
                <div class="Wallop-caption-wrapper">
                    <div class="Wallop-caption is-centered">
                        <div class="main-inner">
                            <h1>You're at the right place</h1>
                        </div>
                        <div>
                            <h4>Our products are mentionned for their code and design quality </h4>
                        </div>
                        <div class="caption-action">
                            <a href="#services" class="button button-cta btn-align light-btn btn-outlined is-bold rounded">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination dots -->
        <div class="Wallop-pagination">
            <button class="Wallop-dot Wallop-dot--current">go to item 1</button>
            <button class="Wallop-dot">go to item 2</button>
            <button class="Wallop-dot">go to item 3</button>
        </div>
        <!-- Navigation arrows -->
        <button class="Wallop-buttonPrevious is-hidden-mobile"><i class="material-icons">arrow_back</i></button>
        <button class="Wallop-buttonNext is-hidden-mobile"><i class="material-icons">arrow_forward</i></button>
    </div>

    <!-- Clients references -->
    <div class="hero-foot is-pulled">
        <div class="container">
            <div class="tabs partner-tabs is-centered">
                <ul>
                    <li><a><img class="partner-logo" src="{{ asset('assets/img/logos/custom/covenant.svg') }}" alt=""></a></li>
                    <li><a><img class="partner-logo" src="{{ asset('assets/img/logos/custom/bitbreaker.svg') }}" alt=""></a></li>
                    <li><a><img class="partner-logo" src="{{ asset('assets/img/logos/custom/phasekit.svg') }}" alt=""></a></li>
                    <li><a><img class="partner-logo" src="{{ asset('assets/img/logos/custom/grubspot.svg') }}" alt=""></a></li>
                    <li><a><img class="partner-logo" src="{{ asset('assets/img/logos/custom/gutwork.svg') }}" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!-- About section -->
<div id="services" class="section is-medium">
    <div class="container">
        <div class="centered-title">
            <h2>What we do</h2>
            <div class="title-divider"></div>
            <div class="subheading">
                We create new quality valued digital products everyday. Check it out !
            </div>
        </div>

        <div class="content-wrapper">
            <div class="columns">
                <!-- Content -->
                <div class="column is-4">
                    <div class="service-box">
                        <h2 class="service-title">Get to know us</h2>
                        <div class="title-divider"></div>
                        <p>Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel hinc solet tincidunt, nec
                            et iisque placerat pertinax. Ei minim probatus mea. Vide movet ad vis, eum at percipitur
                            temporibus signiferumque.</p>
                        <p>Timeam adipisci mei ei, vis ut nulla urbanitas, mel ex tota laudem. Quo ne regione tritani
                            placerat, labitur neglegentur ex vis, sale verterem perfecto an eum. </p>
                        <div class="action">
                            <a class="button btn-align button-cta btn-outlined raised rounded primary-btn is-bold">Learn
                                more</a>
                        </div>
                    </div>
                </div>
                <!-- Icons -->
                <div class="column is-7 is-offset-1">
                    <div class="columns is-vcentered is-multiline">
                        <!-- Icon block -->
                        <div class="column is-6">
                            <div class="agency-icon-box">
                                <div class="is-icon-reveal">
                                    <i class="im im-icon-Mail-Search"></i>
                                </div>
                                <div class="box-title">Digital marketing</div>
                                <p class="box-content">Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel
                                    hinc solet tincidunt, nec et iisque placerat pertinax.</p>
                            </div>
                        </div>
                        <!-- Icon block -->
                        <div class="column is-6">
                            <div class="agency-icon-box">
                                <div class="is-icon-reveal">
                                    <i class="im im-icon-Sidebar-Window"></i>
                                </div>
                                <div class="box-title">UI Design</div>
                                <p class="box-content">Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel
                                    hinc solet tincidunt, nec et iisque placerat pertinax.</p>
                            </div>
                        </div>
                        <!-- Icon block -->
                        <div class="column is-6">
                            <div class="agency-icon-box">
                                <div class="is-icon-reveal">
                                    <i class="im im-icon-Idea-5"></i>
                                </div>
                                <div class="box-title">UX Design</div>
                                <p class="box-content">Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel
                                    hinc solet tincidunt, nec et iisque placerat pertinax.</p>
                            </div>
                        </div>
                        <!-- Icon block -->
                        <div class="column is-6">
                            <div class="agency-icon-box">
                                <div class="is-icon-reveal">
                                    <i class="im im-icon-Shop-4"></i>
                                </div>
                                <div class="box-title">Print & Branding</div>
                                <p class="box-content">Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel
                                    hinc solet tincidunt, nec et iisque placerat pertinax.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio -->
<div class="section is-medium section-feature-grey">
    <div class="container">
        <div class="centered-title">
            <h2>Some of our Projects</h2>
            <div class="title-divider"></div>
            <div class="subheading">
                We create new quality valued digital products everyday. Check it out !
            </div>
        </div>

        <div class="content-wrapper">
            <div class="portfolio">
                <div class="columns is-gapless">
                    <!-- Portfolio item -->
                    <div class="column is-4">
                        <div class="portfolio-item">
                            <img src="https://via.placeholder.com/776x1600" alt="" data-demo-src="{{ asset('assets/img/demo/agency/coffee-long-core.png') }}" data-base-url="{{ asset('assets/img/demo/agency/coffee-long') }}" data-extension=".png">
                            <div class="circle-overlay"></div>
                            <div class="project-info has-text-centered">
                                <div class="wrapper">
                                    <div class="project-title">
                                        Hello Summer Coffee
                                    </div>
                                    <div class="project-link">
                                        <a href="#">View project <i class="material-icons">keyboard_arrow_right</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio item -->
                        <div class="portfolio-item">
                            <img src="https://via.placeholder.com/800x800" alt="" data-demo-src="{{ asset('assets/img/demo/agency/ceramic-core.png') }}" data-base-url="{{ asset('assets/img/demo/agency/ceramic') }}" data-extension=".png">
                            <div class="circle-overlay"></div>
                            <div class="project-info has-text-centered">
                                <div class="wrapper">
                                    <div class="project-title">
                                        Ceramic bottles
                                    </div>
                                    <div class="project-link">
                                        <a href="#">View project <i class="material-icons">keyboard_arrow_right</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio item -->
                    <div class="column is-4">
                        <div class="portfolio-item">
                            <img src="https://via.placeholder.com/800x800" alt="" data-demo-src="{{ asset('assets/img/demo/agency/tin-core.png') }}" data-base-url="{{ asset('assets/img/demo/agency/tin') }}" data-extension=".png">
                            <div class="circle-overlay"></div>
                            <div class="project-info has-text-centered">
                                <div class="wrapper">
                                    <div class="project-title">
                                        The Tin project
                                    </div>
                                    <div class="project-link">
                                        <a href="#">View project <i class="material-icons">keyboard_arrow_right</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio item -->
                        <div class="portfolio-item">
                            <img src="https://via.placeholder.com/800x800" alt="" data-demo-src="{{ asset('assets/img/demo/agency/poster-core.png') }}" data-base-url="{{ asset('assets/img/demo/agency/poster') }}" data-extension=".png">
                            <div class="circle-overlay"></div>
                            <div class="project-info has-text-centered">
                                <div class="wrapper">
                                    <div class="project-title">
                                        The Poster project
                                    </div>
                                    <div class="project-link">
                                        <a href="#">View project <i class="material-icons">keyboard_arrow_right</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio item -->
                        <div class="portfolio-item">
                            <img src="https://via.placeholder.com/800x800" alt="" data-demo-src="{{ asset('assets/img/demo/agency/office-core.png') }}" data-base-url="{{ asset('assets/img/demo/agency/office') }}" data-extension=".png">
                            <div class="circle-overlay"></div>
                            <div class="project-info has-text-centered">
                                <div class="wrapper">
                                    <div class="project-title">
                                        Office branding
                                    </div>
                                    <div class="project-link">
                                        <a href="#">View project <i class="material-icons">keyboard_arrow_right</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4">
                        <!-- Portfolio item -->
                        <div class="portfolio-item">
                            <img src="https://via.placeholder.com/800x800" alt="" data-demo-src="{{ asset('assets/img/demo/agency/art-core.png') }}" data-base-url="{{ asset('assets/img/demo/agency/art') }}" data-extension=".png">
                            <div class="circle-overlay"></div>
                            <div class="project-info has-text-centered">
                                <div class="wrapper">
                                    <div class="project-title">
                                        The Design project
                                    </div>
                                    <div class="project-link">
                                        <a href="#">View project <i class="material-icons">keyboard_arrow_right</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio item -->
                        <div class="portfolio-item">
                            <img src="https://via.placeholder.com/776x1600" alt="" data-demo-src="{{ asset('assets/img/demo/agency/iphonex-core.png') }}" data-base-url="{{ asset('assets/img/demo/agency/iphonex') }}" data-extension=".png">
                            <div class="circle-overlay"></div>
                            <div class="project-info has-text-centered">
                                <div class="wrapper">
                                    <div class="project-title">
                                        Travel.io
                                    </div>
                                    <div class="project-link">
                                        <a href="#">View project <i class="material-icons">keyboard_arrow_right</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team section -->
<div class="section is-medium">
    <div class="container">
        <div class="centered-title">
            <h2>Meet the Team</h2>
            <div class="title-divider"></div>
            <div class="subheading">
                We are part of a global design Community. We are here to make you succeed.
            </div>
        </div>

        <div class="content-wrapper">
            <div class="modern-team">
                <!-- Team member -->
                <article class="modern-team-item circle-mask zoom-effect">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="https://via.placeholder.com/370x450" class="member-avatar" alt="" data-demo-src="{{ asset('assets/img/demo/agency/team/one.jpg') }}">
                        </div>
                        <div class="overlay-wrapper">
                            <div>
                                <a href="#0" class="social">
                                    <i class="social-icon fa fa-twitter"></i>
                                </a>
                                <a href="#0" class="social">
                                    <i class="social-icon fa fa-linkedin"></i>
                                </a>
                                <a href="#0" class="social">
                                    <i class="social-icon fa fa-dribbble"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Alex <strong>Walsh</strong></h3>
                        <span class="member-position">Lead Designer</span>
                    </div>
                </article>
                <!-- Team member -->
                <article class="modern-team-item circle-mask rotate-zoom-effect">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="https://via.placeholder.com/370x450" class="member-avatar" alt="" data-demo-src="{{ asset('assets/img/demo/agency/team/two.jpg') }}">
                        </div>
                        <div class="overlay-wrapper">
                            <div>
                                <a href="#0" class="social">
                                    <i class="social-icon fa fa-twitter"></i>
                                </a>
                                <a href="#0" class="social">
                                    <i class="social-icon fa fa-linkedin"></i>
                                </a>
                                <a href="#0" class="social">
                                    <i class="social-icon fa fa-dribbble"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Naseem <strong>Al Wahabi</strong></h3>
                        <span class="member-position">Lead Developer</span>
                    </div>
                </article>
                <!-- Team member -->
                <article class="modern-team-item circle-mask zoom-slide-effect">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="https://via.placeholder.com/370x450" class="member-avatar" alt="" data-demo-src="{{ asset('assets/img/demo/agency/team/three.jpg') }}">
                        </div>
                        <div class="overlay-wrapper">
                            <div>
                                <a href="#0" class="social">
                                    <i class="social-icon fa fa-twitter"></i>
                                </a>
                                <a href="#0" class="social">
                                    <i class="social-icon fa fa-linkedin"></i>
                                </a>
                                <a href="#0" class="social">
                                    <i class="social-icon fa fa-dribbble"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Dominic <strong>Grilio</strong></h3>
                        <span class="member-position">Head of Sales</span>
                    </div>
                </article>
            </div>
        </div>

    </div>
</div>

<!-- Counters section -->
<div class="section is-medium parallax is-cover is-relative" data-background="https://via.placeholder.com/1920x1080" data-color="#000" data-color-opacity="0.7" data-demo-background="{{ asset('assets/img/demo/agency/agency2.jpg') }}">
    <div class="container">
        <div class="centered-title is-inverted">
            <h2>Work with us !</h2>
            <div class="title-divider"></div>
            <div class="subheading">
                We do everything to satisfy our clients. Let's start a new story together.
            </div>
        </div>

        <div class="content-wrapper">
            <!-- Counters -->
            <div class="columns is-vcentered has-text-centered mt-40">
                <div class="column is-4">
                    <div class="parallax-counter is-primary">
                        <div class="counter-icon">
                            <i class="im im-icon-Address-Book2"></i>
                        </div>
                        <div class="counter counter-number text-bold">126</div>
                        <div class="counter-text">Completed projects</div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="parallax-counter is-primary">
                        <div class="counter-icon">
                            <i class="im im-icon-Code-Window"></i>
                        </div>
                        <div class="counter counter-number text-bold">978</div>
                        <div class="counter-text">Commits pushed</div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="parallax-counter is-primary">
                        <div class="counter-icon">
                            <i class="im im-icon-Laughing"></i>
                        </div>
                        <div class="counter counter-number text-bold">95</div>
                        <div class="counter-text">Satisfied clients</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clients logos carousel -->
<div class="section is-medium">
    <div class="container">

        <div class="columns is-vcentered">
            <div class="column">
                <!-- Carousel -->
                <div class="clients-logo-carousel">
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/grubspot.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/bitbreaker.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/covenant.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/evently.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/gutwork.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/infinite.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom//kromo.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/livetalk.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/phasekit.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/powerball.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/proactive.svg') }}" alt="">
                        </div>
                    </div>
                    <!-- Carousel item -->
                    <div class="carousel-item">
                        <div class="image-wrapper">
                            <img class="client-logo" src="{{ asset('assets/img/logos/custom/tribe.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials carousel -->
<div class="section section-feature-grey is-medium no-padding-bottom">
    <div class="container">

        <div class="centered-title">
            <h2>Our customers speak</h2>
            <div class="title-divider"></div>
            <div class="subheading">
                We do everything to satisfy our clients. Let's start a new story together.
            </div>
        </div>

        <div class="content-wrapper">
            <div class="columns">
                <div class="column is-10 is-12">
                    <!-- Carousel -->
                    <div class="people-carousel">
                        <!-- Carousel item -->
                        <div class="people-carousel-item">
                            <div class="item-wrapper">
                                <div class="image-column is-hidden-mobile">
                                    <div class="carousel-img">
                                        <img src="https://via.placeholder.com/527x613" alt="" data-demo-src="{{ asset('assets/img/demo/agency/testimonials/man-1.png') }}">
                                    </div>
                                </div>
                                <div class="content-column">
                                    <h2 class="testimonial-title">
                                        You gotta hire these guys, they are awesome !
                                        <i class="fa fa-quote-right"></i>
                                    </h2>
                                    <div class="title-divider"></div>
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel hinc solet
                                            tincidunt, nec et iisque placerat pertinax. Ei minim probatus mea. Vide
                                            movet ad vis, eum at percipitur temporibus signiferumque.</p>
                                        <p>Timeam adipisci mei ei, vis ut nulla urbanitas, mel ex tota laudem. Quo ne
                                            regione tritani placerat, labitur neglegentur ex vis, sale verterem perfecto
                                            an eum. </p>
                                    </div>
                                    <div class="customer-info">
                                        <div class="customer-avatar">
                                            <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{ asset('assets/img/demo/agency/testimonials/man-1-avatar.jpg') }}">
                                        </div>
                                        <div class="customer-block">
                                            <div class="name">Alan Caldwell</div>
                                            <div class="position">CFO at Tribe</div>
                                        </div>
                                        <img class="company-logo" src="{{ asset('assets/img/logos/custom/tribe.svg') }}" alt="">
                                    </div>
                                    <div class="mobile-spacer is-hidden-desktop is-hidden-tablet"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel item -->
                        <div class="people-carousel-item">
                            <div class="item-wrapper">
                                <div class="image-column is-hidden-mobile">
                                    <div class="carousel-img">
                                        <img src="https://via.placeholder.com/527x613" alt="" data-demo-src="{{ asset('assets/img/demo/agency/testimonials/woman.png') }}">
                                    </div>
                                </div>
                                <div class="content-column">
                                    <h2 class="testimonial-title">
                                        Elegant design is the key to customer conversion
                                        <i class="fa fa-quote-right"></i>
                                    </h2>
                                    <div class="title-divider"></div>
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel hinc solet
                                            tincidunt, nec et iisque placerat pertinax. Ei minim probatus mea. Vide
                                            movet ad vis, eum at percipitur temporibus signiferumque.</p>
                                        <p>Timeam adipisci mei ei, vis ut nulla urbanitas, mel ex tota laudem. Quo ne
                                            regione tritani placerat, labitur neglegentur ex vis, sale verterem perfecto
                                            an eum. </p>
                                    </div>
                                    <div class="customer-info">
                                        <div class="customer-avatar">
                                            <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{ asset('assets/img/demo/agency/testimonials/woman-avatar.jpg') }}">
                                        </div>
                                        <div class="customer-block">
                                            <div class="name">Lynette Barker</div>
                                            <div class="position">CEO at Phasekit </div>
                                        </div>
                                        <img class="company-logo" src="{{ asset('assets/img/logos/custom/phasekit.svg') }}" alt="">
                                    </div>
                                    <div class="mobile-spacer is-hidden-desktop is-hidden-tablet"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel item -->
                        <div class="people-carousel-item">
                            <div class="item-wrapper">
                                <div class="image-column is-hidden-mobile">
                                    <div class="carousel-img">
                                        <img src="https://via.placeholder.com/527x613" alt="" data-demo-src="{{ asset('assets/img/demo/agency/testimonials/man-2.png') }}">
                                    </div>
                                </div>
                                <div class="content-column">
                                    <h2 class="testimonial-title">
                                        Finely designed products that will increase your customer engagement
                                        <i class="fa fa-quote-right"></i>
                                    </h2>
                                    <div class="title-divider"></div>
                                    <div class="testimonial-content">
                                        <p>Lorem ipsum dolor sit amet, eam ex probo tation tractatos. Ut vel hinc solet
                                            tincidunt, nec et iisque placerat pertinax. Ei minim probatus mea. Vide
                                            movet ad vis, eum at percipitur temporibus signiferumque.</p>
                                        <p>Timeam adipisci mei ei, vis ut nulla urbanitas, mel ex tota laudem. Quo ne
                                            regione tritani placerat, labitur neglegentur ex vis, sale verterem perfecto
                                            an eum. </p>
                                    </div>
                                    <div class="customer-info">
                                        <div class="customer-avatar">
                                            <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{ asset('assets/img/demo/agency/testimonials/man-2-avatar.jpg') }}">
                                        </div>
                                        <div class="customer-block">
                                            <div class="name">Joshua Kovalsky</div>
                                            <div class="position">Manager at Infinite </div>
                                        </div>
                                        <img class="company-logo" src="{{ asset('assets/img/logos/custom/infinite.svg') }}" alt="">
                                    </div>
                                    <div class="mobile-spacer is-hidden-desktop is-hidden-tablet"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Latest posts section -->
<div class="section is-medium">
    <div class="container">
        <!-- title -->
        <div class="centered-title">
            <h2>Our latest News</h2>
            <div class="title-divider"></div>
            <div class="subheading">
                Check out our latest updates and posts. You'll also find the latest trending items.
            </div>
        </div>

        <div class="content-wrapper">
            <div class="columns is-vcentered latest-posts">
                <!-- Article card -->
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://via.placeholder.com/1280x960" alt="" data-demo-src="{{ asset('assets/img/demo/agency/posts/data-insight.jpeg') }}">
                            </figure>
                            <figure class="image author is-48x48">
                                <img src="https://via.placeholder.com/250x250" class="img-circle" alt="" data-demo-src="{{ asset('assets/img/avatars/helen.jpg') }}">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="timestamp"><i class="sl sl-icon-clock"></i> oct 23 2017</p>
                                    <p class="title is-5">How data insight strengthens small businesses</p>
                                </div>
                            </div>

                            <div class="post-exerpt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris.
                            </div>
                            <div class="has-text-centered">
                                <a class="button button-cta is-bold btn-align primary-btn btn-outlined rounded">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Article card -->
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://via.placeholder.com/1280x960" alt="" data-demo-src="{{ asset('assets/img/demo/agency/posts/blog.jpeg') }}">
                            </figure>
                            <figure class="image author is-48x48">
                                <img src="https://via.placeholder.com/250x250" class="img-circle" alt="" data-demo-src="{{ asset('assets/img/avatars/lakisha.jpg') }}">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="timestamp"><i class="sl sl-icon-clock"></i> nov 03 2017</p>
                                    <p class="title is-5">Internet brought a new era for Freelancers</p>
                                </div>
                            </div>

                            <div class="post-exerpt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris.
                            </div>
                            <div class="has-text-centered">
                                <a class="button button-cta is-bold btn-align primary-btn btn-outlined rounded">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Article card -->
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://via.placeholder.com/1280x960" alt="" data-demo-src="{{ asset('assets/img/demo/agency/posts/laptop-living.jpeg') }}">
                            </figure>
                            <figure class="image author is-48x48">
                                <img src="https://via.placeholder.com/250x250" class="img-circle" alt="" data-demo-src="{{ asset('assets/img/avatars/elie.jpg') }}">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="timestamp"><i class="sl sl-icon-clock"></i> nov 17 2017</p>
                                    <p class="title is-5">User experience matters, but design experience does also</p>
                                </div>
                            </div>

                            <div class="post-exerpt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris.
                            </div>
                            <div class="has-text-centered">
                                <a class="button button-cta is-bold btn-align primary-btn btn-outlined rounded">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Final CTA section -->
<div class="section section-feature-grey is-medium">
    <div class="container">
        <div class="centered-title">
            <h2>Start a Project</h2>
            <div class="title-divider"></div>
            <div class="subheading">
                Customized solutions and products to fit your needs
            </div>
        </div>

        <div class="content-wrapper">
            <div class="columns services-cards is-vcentered">
                <!-- Card -->
                <div class="column is-one-third">
                    <div class="feature-card card-md hover-inset has-text-centered mb-20 is-card-reveal">
                        <div class="card-icon">
                            <i class="im im-icon-Two-Windows"></i>
                        </div>
                        <div class="card-title">
                            <h4>Web development</h4>
                        </div>
                        <div class="card-feature-description">
                                <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet cu harum
                                    inermis iudicabit.</span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="column">
                    <div class="feature-card card-md hover-inset has-text-centered mb-20 is-card-reveal">
                        <div class="card-icon">
                            <i class="im im-icon-Gears"></i>
                        </div>
                        <div class="card-title">
                            <h4>Strategy expertise</h4>
                        </div>
                        <div class="card-feature-description">
                                <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet cu harum
                                    inermis iudicabit.</span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="column">
                    <div class="feature-card card-md hover-inset has-text-centered mb-20 is-card-reveal">
                        <div class="card-icon">
                            <i class="im im-icon-Life-Safer"></i>
                        </div>
                        <div class="card-title">
                            <h4>Customer support</h4>
                        </div>
                        <div class="card-feature-description">
                                <span class="">Lorem ipsum dolor sit amet, clita laoreet ne cum. His caelus elet cu harum
                                    inermis iudicabit.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="centered-title pt-40">
            <a class="button button-cta is-bold btn-align primary-btn btn-outlined rounded is-title-reveal">Start a
                project</a>
        </div>
    </div>
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
<!-- Side navigation -->
<div class="side-navigation-menu">
    <!-- Categories menu -->
    <div class="category-menu-wrapper">
        <!-- Menu -->
        <ul class="categories">
            <li class="square-logo"><img src="{{ asset('assets/img/logos/square-white.svg') }}" alt=""></li>
            <li class="category-link is-active" data-navigation-menu="demo-pages"><i class="sl sl-icon-layers"></i></li>
            <li class="category-link" data-navigation-menu="onepagers"><i class="sl sl-icon-docs"></i></li>
            <li class="category-link" data-navigation-menu="components"><i class="sl sl-icon-grid"></i></li>
        </ul>
        <!-- Menu -->

        <ul class="author">
            <li>
                <!-- Theme author -->
                <a href="https://cssninja.io" target="_blank">
                    <img class="main-menu-author" src="{{ asset('assets/img/logos/cssninja.svg') }}" alt="">
                </a>
            </li>
        </ul>
    </div>
    <!-- /Categories menu -->

    <!-- Navigation menu -->
    <div id="demo-pages" class="navigation-menu-wrapper animated preFadeInRight fadeInRight">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Demo pages</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
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
        <!-- Navigation Body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">weekend</span>Agency kit</a>
                <ul>
                    <li><a class="is-submenu" href="/agency-home.html">Homepage</a></li>
                    <li><a class="is-submenu" href="/agency-about.html">About</a></li>
                    <li><a class="is-submenu" href="/agency-portfolio.html">Portfolio</a></li>
                    <li><a class="is-submenu" href="/agency-contact.html">Contact</a></li>
                    <li><a class="is-submenu" href="/agency-blog.html">Blog</a></li>
                    <li><a class="is-submenu" href="/agency-post-nosidebar.html">Post no sidebar</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">wb_incandescent</span>Startup kit</a>
                <ul>
                    <li><a class="is-submenu" href="/startup-landing.html">Homepage</a></li>
                    <li><a class="is-submenu" href="/startup-about.html">About</a></li>
                    <li><a class="is-submenu" href="/startup-product.html">Product</a></li>
                    <li><a class="is-submenu" href="/startup-contact.html">Contact</a></li>
                    <li><a class="is-submenu" href="/startup-login.html">Login</a></li>
                    <li><a class="is-submenu" href="/startup-signup.html">Sign up</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">apps</span>Landing kit 1</a>
                <ul>
                    <li><a class="is-submenu" href="/kit1-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit1-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit1-features.html">Feature page</a></li>
                    <li><a class="is-submenu" href="/kit1-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit1-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit1-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">timelapse</span>Landing kit 2</a>
                <ul>
                    <li><a class="is-submenu" href="/kit2-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit2-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit2-features.html">Feature page</a></li>
                    <li><a class="is-submenu" href="/kit2-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit2-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit2-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">assistant</span>Landing kit 3</a>
                <ul>
                    <li><a class="is-submenu" href="/kit3-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit3-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit3-features.html">Feature page</a></li>
                    <li><a class="is-submenu" href="/kit3-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit3-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit3-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">brightness_2</span>Landing kit 4</a>
                <ul>
                    <li><a class="is-submenu" href="/kit4-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/kit4-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit4-help.html">Help center</a></li>
                    <li><a class="is-submenu" href="/kit4-help-category.html">Help category</a></li>
                    <li><a class="is-submenu" href="/kit4-help-article.html">Help article</a></li>
                    <li><a class="is-submenu" href="/kit4-signup.html">Login</a></li>
                    <li><a class="is-submenu" href="/kit4-login.html">Sign up</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">toys</span>Landing kit 5</a>
                <ul>
                    <li><a class="is-submenu" href="/kit5-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/kit5-features.html">Feature page</a></li>
                    <li><a class="is-submenu" href="/kit5-pricing.html">Pricing Page</a></li>
                    <li><a class="is-submenu" href="/kit5-login.html">Login / Signup</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">mouse</span>Landing kit 6</a>
                <ul>
                    <li><a class="is-submenu" href="kit6-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="kit6-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="kit6-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">work</span>Landing kit
                    7</a>
                <ul>
                    <li><a class="is-submenu" href="/kit7-landing.html">Landing page</a></li>
                    <li><a class="is-submenu" href="/kit7-landing.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit7-authentication.html">Auth page</a></li>
                    <li><a class="is-submenu" href="/kit7-pricing.html">Pricing page</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">public</span>Landing kit 8</a>
                <ul>
                    <li><a class="is-submenu" href="/kit8-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-1.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-2.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-3.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit8-landing-4.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit8-pricing.html">Pricing page</a></li>
                    <li><a class="is-submenu" href="/kit8-jobs.html">Jobs page</a></li>
                    <li><a class="is-submenu" href="/kit8-login.html">Login page</a></li>
                    <li><a class="is-submenu" href="/kit8-signup.html">Signup page</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">assessment</span>Landing kit 9</a>
                <ul>
                    <li><a class="is-submenu" href="/kit9-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit9-landing-4.html">Landing page v4</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">account_balance</span>Landing kit 10</a>
                <ul>
                    <li><a class="is-submenu" href="/kit10-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit10-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit10-landing-3.html">Landing page v3</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">shop</span>Landing kit 11</a>
                <ul>
                    <li><a class="is-submenu" href="/kit11-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-4.html">Landing page v4</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-5.html">Landing page v5</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-6.html">Landing page v6</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-7.html">Landing page v7</a></li>
                    <li><a class="is-submenu" href="/kit11-landing-8.html">Landing page v8</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">stars</span>Landing kit 12</a>
                <ul>
                    <li><a class="is-submenu" href="/kit12-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit12-landing-2.html">Landing page v2</a></li>
                    <li><a class="is-submenu" href="/kit12-landing-3.html">Landing page v3</a></li>
                    <li><a class="is-submenu" href="/kit12-landing-4.html">Landing page v4</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link" href="#">
                    <span class="material-icons">new_releases</span>Landing kit 13</a>
                <ul>
                    <li><a class="is-submenu" href="/kit13-landing.html">Landing page v1</a></li>
                    <li><a class="is-submenu" href="/kit13-landing-2.html">Landing page v2</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Navigation menu -->
    <div id="onepagers" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Sub Pages</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
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
        <!-- Navigation body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">domain</span>Company</a>
                <ul>
                    <li><a class="is-submenu" href="/about-page-1.html">About v1</a></li>
                    <li><a class="is-submenu" href="/about-page-2.html">About v2</a></li>
                    <li><a class="is-submenu" href="/case-study-1.html">Case Study v1</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">call</span>Contact</a>
                <ul>
                    <li><a class="is-submenu" href="/contact-page-1.html">Contact v1</a></li>
                    <li><a class="is-submenu" href="/contact-page-2.html">Contact v2</a></li>
                    <li><a class="is-submenu" href="/contact-page-3.html">Contact v3</a></li>
                    <li><a class="is-submenu" href="/contact-page-4.html">Contact v4</a></li>
                    <li><a class="is-submenu" href="/contact-page-5.html">Contact v5</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">book</span>Blog</a>
                <ul>
                    <li><a class="is-submenu" href="/blog-posts-full.html">Posts List v1</a></li>
                    <li><a class="is-submenu" href="/blog-posts-full-alt.html">Posts List v2</a></li>
                    <li><a class="is-submenu" href="/blog-posts-side.html">Posts List v3</a></li>
                    <li><a class="is-submenu" href="/blog-posts-side-alt.html">Posts List v4</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-full.html">Posts Grid v1</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-full-masonry.html">Posts Grid v2</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-side.html">Posts Grid v3</a></li>
                    <li><a class="is-submenu" href="/blog-posts-grid-side-masonry.html">Posts Grid v4</a></li>
                    <li><a class="is-submenu" href="/blog-single-full.html">Single Post V1</a></li>
                    <li><a class="is-submenu" href="/blog-single-side.html">Single Post V2</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a class="parent-link has-new" href="#"><span class="material-icons">highlight</span>Error Pages</a>
                <ul>
                    <li><a class="is-submenu" href="/error-1.html">Error v1</a></li>
                    <li><a class="is-submenu" href="/error-2.html">Error v2</a></li>
                    <li><a class="is-submenu" href="/error-3.html">Error v3</a></li>
                    <li><a class="is-submenu" href="/error-4.html">Error v4</a></li>
                    <li><a class="is-submenu" href="/error-5.html">Error v5</a></li>
                    <li><a class="is-submenu" href="/error-6.html">Error v6</a></li>
                    <li><a class="is-submenu" href="/error-7.html">Error v7</a></li>
                    <li><a class="is-submenu" href="/error-8.html">Error v8</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Navigation menu -->
    <div id="components" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
        <!-- Navigation Header -->
        <div class="navigation-menu-header">
            <span>Components</span>
            <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
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
        <!-- Navigation body -->
        <ul class="navigation-menu">
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_quilt</span>Layout</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-layout-grid.html">Grid system</a></li>
                    <li><a class="is-submenu" href="/_components-layout-video.html">Video background</a></li>
                    <li><a class="is-submenu" href="/_components-layout-parallax.html">Parallax</a></li>
                    <li><a class="is-submenu" href="/_components-layout-headers.html">Headers</a></li>
                    <li><a class="is-submenu" href="/_components-layout-footers.html">Footers</a></li>
                    <li><a class="is-submenu" href="/_components-layout-typography.html">Typography</a></li>
                    <li><a class="is-submenu" href="/_components-layout-colors.html">Colors</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">subject</span>Navbars</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-layout-navbar-fade-light.html">Fade light</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-fade-dark.html">Fade dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-light.html">Static
                            light</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-dark.html">Static
                            dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-static-solid.html">Static
                            solid</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-double-dark.html">Double
                            dark</a></li>
                    <li><a class="is-submenu" href="/_components-layout-navbar-double-light.html">Double
                            light</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_stream</span>Sections</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-sections-features.html">Features</a></li>
                    <li><a class="is-submenu" href="/_components-sections-pricing.html">Pricing</a></li>
                    <li><a class="is-submenu" href="/_components-sections-team.html">Team</a></li>
                    <li><a class="is-submenu" href="/_components-sections-testimonials.html">Testimonials</a></li>
                    <li><a class="is-submenu" href="/_components-sections-clients.html">Clients</a></li>
                    <li><a class="is-submenu" href="/_components-sections-counters.html">Counters</a></li>
                    <li><a class="is-submenu" href="/_components-sections-carousel.html">Carousel</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add_check</span>Basic
                    UI</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-basicui-cards.html">Cards</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-buttons.html">Buttons</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-dropdowns.html">Dropdowns</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-lists.html">Lists</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-modals.html">Modals</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-tabs.html">Tabs & pills</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-accordion.html">Accordions</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-badges.html">Badges & labels</a></li>
                    <li><a class="is-submenu" href="/_components-basicui-popups.html">Popups</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add</span>Advanced
                    UI</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-advancedui-tables.html">Tables</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-timeline.html">Timeline</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-boxes.html">Boxes</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-messages.html">Messages</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-megamenu.html">Megamenu</a></li>
                    <li><a class="is-submenu" href="/_components-advancedui-calendar.html">Calendar</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">check_box</span>Forms</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-forms-inputs.html">Inputs</a></li>
                    <li><a class="is-submenu" href="/_components-forms-controls.html">Controls</a></li>
                    <li><a class="is-submenu" href="/_components-forms-layouts.html">Form layouts</a></li>
                    <li><a class="is-submenu" href="/_components-forms-steps.html">Step forms</a></li>
                    <li><a class="is-submenu" href="/_components-forms-uploader.html">Uploader</a></li>
                </ul>
            </li>
            <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">adjust</span>Icons</a>
                <ul>
                    <li><a class="is-submenu" href="/_components-icons-im.html">Icons Mind</a></li>
                    <li><a class="is-submenu" href="/_components-icons-sl.html">Simple Line Icons</a></li>
                    <li><a class="is-submenu" href="/_components-icons-fa.html">Font Awesome</a></li>
                    <li><a class="is-submenu" href="https://material.io/icons/" target="_blank">Material Icons</a></li>
                    <li><a class="is-submenu" href="/_components-extensions-iconpicker.html">Icon Picker</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /Navigation menu -->
</div>
<!-- /Side navigation -->
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

<!-- Landing page js -->
</body>

</html>
