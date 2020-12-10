@extends('layouts.app')
@section('main')
    <!-- Hero Wallop Slider -->
    <div class="Wallop Wallop--v1 Wallop--scale">
        <div class="Wallop-list">
            <!-- Slide -->
            <div class="Wallop-item Wallop-item--current has-background-image" data-background="https://via.placeholder.com/1920x1080" data-demo-background="{{ asset('assets/img/demo/agency/agency.jpg') }}">
                <div class="Wallop-overlay"></div>
                <div class="Wallop-caption-wrapper">
                    <div class="Wallop-caption is-centered">
                        <div class="main-inner">
                            <h1>Willkommen bei Mind-Unit</h1>
                        </div>
                        <div>
                            <h4>Suchen Sie nach hochwertigen Lösungen?</h4>
                        </div>
                        <div class="caption-action">
                            <a href="#services" class="button button-cta btn-align light-btn btn-outlined is-bold rounded">Jetzt starten</a>
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
                            <h1>Möchten Sie mit ihrem Projekt durchstarten ?</h1>
                        </div>
                        <div>
                            <h4>Dann sind Sie bei uns genau richtig!</h4>
                        </div>
                        <div class="caption-action">
                            <a href="#services" class="button button-cta btn-align light-btn btn-outlined is-bold rounded">Jetzt starten</a>
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
                            <h1>Nehmen Sie heute noch unsere Dienstleistungen in Anspruch !</h1>
                        </div>
                        <div>
                            <h4>Wir freuen uns auf Sie !</h4>
                        </div>
                        <div class="caption-action">
                            <a href="#services" class="button button-cta btn-align light-btn btn-outlined is-bold rounded">Jetzt starten</a>
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
                    <li><a><img class="partner-logo" src="" alt=""></a></li>
                    <li><a><img class="partner-logo" src="" alt=""></a></li>
                    <li><a><img class="partner-logo" src="{{ asset('assets/img/logos/custom/Purple.svg') }}" alt=""></a></li>
                    <li><a><img class="partner-logo" src="" alt=""></a></li>
                    <li><a><img class="partner-logo" src="" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
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
@endsection
