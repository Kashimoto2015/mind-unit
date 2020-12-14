@extends('layouts.app')

<head>
    <title> Mind-Unit - Products</title>
</head>

@section('hero')
    <!-- Hero and Navbar -->
    <div class="hero is-relative is-app-grey is-medium is-pricing has-animated-waves waves-bottom waves-primary">
    @endsection
    @section('content')
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

                        <div class="column is-6 mt-60 is-offset-3 is-hero-title has-text-centered">
                            <h1 class="title is-1 is-medium">
                                Impressum.
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- FAQ -->
    <div class="section section-primary has-pseudo-lines z-index-0">
        <div class="container">

            <h2 class="title section-subtitle dark-text text-bold has-text-centered is-3 pt-20 pb-20">
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
    </div>
@endsection
