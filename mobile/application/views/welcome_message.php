<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Omniview | Sistema de rastreo y gestión de alarmas</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/icon-line-pro/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/chosen/chosen.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.op-shipping.css">

    <!-- pNotify -->
    <link href="<?=base_url()?>css/pnotify.custom.min.css" rel="stylesheet">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/custom.css">
</head>

<body>
<main class="g-pt-130 g-pt-140--md g-pt-170--lg">
    <!-- Header -->
    <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance"
            data-header-fix-moment="200"
            data-header-fix-effect="slide">
        <div class="text-center text-lg-left u-header__section u-header__section--hidden u-header__section--light g-bg-white g-brd-bottom g-brd-gray-light-v4 g-py-20">
            <div class="container">
                <div class="row flex-lg-row align-items-center justify-content-lg-start">
                    <div class="col-6 col-sm-3 col-lg-2">
                        <!-- Logo -->
                        <a href="#" class="navbar-brand">
                            <img class="img-fluid g-width-150" src="assets/img/logo.png" alt="Logo">
                        </a>
                        <!-- End Logo -->
                    </div>

                    <div class="col-6 col-sm-9 col-lg-10">
                        <div class="row">
                            <div class="col-sm g-brd-right--sm g-brd-gray-light-v4">
                                <div class="g-pa-10--lg">
                                    <span class="icon icon-screen-smartphone g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
                                    <span class="text-uppercase g-font-size-13">Call Us</span>
                                    <strong class="d-block g-pl-25">+469 548 521</strong>
                                </div>
                            </div>

                            <div class="col-sm g-hidden-lg-down g-brd-right--sm g-brd-gray-light-v4">
                                <div class="g-pa-10--lg">
                                    <span class="icon icon-clock g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
                                    <span class="text-uppercase g-font-size-13">Opening time</span>
                                    <strong class="d-block g-pl-25">Mon-Sat: 08.00 - 18.00</strong>
                                </div>
                            </div>

                            <div class="col-sm g-hidden-sm-down g-brd-right--sm g-brd-gray-light-v4">
                                <div class="g-pa-10--lg">
                                    <span class="icon icon-envelope g-valign-middle g-font-size-18 g-color-primary g-mr-5"></span>
                                    <span class="text-uppercase g-font-size-13">Email us</span>
                                    <strong class="d-block g-pl-25">market@info.com</strong>
                                </div>
                            </div>

                            <div class="col-sm g-hidden-sm-down">
                                <ul class="list-inline mb-0 g-pa-10--lg">
                                    <li class="list-inline-item g-valign-middle g-mx-3">
                                        <a class="d-block u-icon-v3 u-icon-size--sm g-rounded-50x g-bg-gray-light-v4 g-color-gray-light-v1 g-bg-primary--hover g-color-white--hover" href="#"><i class="fa fa-facebook g-font-size-default"></i></a>
                                    </li>
                                    <li class="list-inline-item g-valign-middle g-mx-3">
                                        <a class="d-block u-icon-v3 u-icon-size--sm g-rounded-50x g-bg-gray-light-v4 g-color-gray-light-v1 g-bg-primary--hover g-color-white--hover" href="#"><i class="fa fa-twitter g-font-size-default"></i></a>
                                    </li>
                                    <li class="list-inline-item g-valign-middle g-mx-3">
                                        <a class="d-block u-icon-v3 u-icon-size--sm g-rounded-50x g-bg-gray-light-v4 g-color-gray-light-v1 g-bg-primary--hover g-color-white--hover" href="#"><i class="fa fa-instagram g-font-size-default"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="u-header__section u-header__section--dark g-bg-gray-dark-v1 g-py-15"
             data-header-fix-moment-classes="u-shadow-v18">
            <nav class="navbar navbar-expand-lg py-0">
                <div class="container">
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse align-items-center flex-sm-row g-mr-40--sm" id="navBar">
                        <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-font-weight-700 g-py-10--md mr-auto">
                            <li class="nav-item g-mr-15--lg g-mb-7 g-mb-0--lg active">
                                <a href="#home" class="nav-link g-color-primary--hover p-0">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                                <a href="#about" class="nav-link g-color-primary--hover p-0">About</a>
                            </li>
                            <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                                <a href="#services" class="nav-link g-color-primary--hover p-0">Services</a>
                            </li>
                            <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                                <a href="#skills" class="nav-link g-color-primary--hover p-0">Skills</a>
                            </li>
                            <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                                <a href="#offers" class="nav-link g-color-primary--hover p-0">Offers</a>
                            </li>
                            <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                                <a href="#gallery" class="nav-link g-color-primary--hover p-0">Gallery</a>
                            </li>
                            <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                                <a href="#FAQ" class="nav-link g-color-primary--hover p-0">FAQ</a>
                            </li>
                            <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                                <a href="#testimonials" class="nav-link g-color-primary--hover p-0">Testimonials</a>
                            </li>
                            <li class="nav-item g-ml-15--lg">
                                <a href="#contact" class="nav-link g-color-primary--hover p-0">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Navigation -->

                    <!-- Search -->
                    <div class="g-hidden-md-down text-uppercase g-valign-middle">
                        <a href="#" class="btn btn-md text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-brd-none g-rounded-4 g-py-12 g-px-15">Get a Quote</a>
                    </div>
                    <!-- End Search -->

                    <!-- Responsive Toggle Button -->
                    <button class="navbar-toggler btn g-pos-rel g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-minus-8 g-right-0" type="button"
                            aria-label="Toggle navigation"
                            aria-expanded="false"
                            aria-controls="navBar"
                            data-toggle="collapse"
                            data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
                    </button>
                    <!-- End Responsive Toggle Button -->
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <!-- Section Content -->
    <section id="home" class="u-bg-overlay g-height-100vh g-bg-img-hero g-bg-black-opacity-0_3--after g-py-20" style="background-image: url(assets/img-temp/1732x1155/tracking-image-one.jpg);">
        <div class="u-bg-overlay__inner g-absolute-centered--y w-100">
            <div class="container g-z-index-1 g-py-100">
                <div class="row">
                    <div class="col-md-6 col-lg-5 align-self-center">
                        <div class="g-bg-white g-rounded-5 g-pa-15 g-pa-30--md">
                            <h3 class="h6 g-color-black g-font-weight-600 text-uppercase text-center g-mb-25">Authenticate</h3>

                            <!-- Promo Block - Form -->
                            <form action="<?=base_url()?>auth" method="post">
                                <div class="form-group g-mb-10 g-mb-20--md">
                                    <input class="form-control g-theme-color-gray-light-v10 g-placeholder-inherit g-brd-gray-light-v5 g-bg-gray-light-v5 g-bg-gray-light-v5--focus g-px-10 g-py-12" name="email" type="email" placeholder="Email" required>
                                </div>

                                <div class="form-group g-mb-10 g-mb-20--md">
                                    <input class="form-control g-theme-color-gray-light-v10 g-placeholder-inherit g-brd-gray-light-v5 g-bg-gray-light-v5 g-bg-gray-light-v5--focus g-px-10 g-py-12" name="password" type="password" placeholder="Password" required>
                                </div>
                                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                <button class="btn btn-md btn-block text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-brd-none g-rounded-4 g-py-12 g-px-15" type="submit">Login</button>
                            </form>
                            <!-- End Promo Block - Form -->
                        </div>
                    </div>

                    <!-- Promo Block - Info -->
                    <div class="col-md-6 col-lg-7 g-hidden-sm-down align-self-center g-color-white">
                        <h2 class="text-uppercase g-line-height-1 g-font-weight-700 g-font-size-40 g-font-size-56--md g-color-white g-mb-30">Planning
                            <br>&amp; Shiping</h2>
                        <h3 class="text-uppercase g-font-weight-700 g-font-size-18 g-color-white g-mb-20">Delivering anything to anywhere</h3>
                        <p class="g-font-size-default g-color-white-opacity-0_8 g-mb-35">Maecenas lacus magna, pretium in congue a, pharetra at lacus. Nulla neque justo, sodales vitae dui non, imperdiet luctus libero.</p>
                        <a class="btn btn-md text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-brd-none g-rounded-4 g-py-12 g-px-25" href="#">Learn more</a>
                    </div>
                    <!-- End Promo Block - Info -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <div id="about">
        <!-- Section Content -->
        <section class="g-py-50">
            <div class="container text-center text-md-left g-max-width-960">
                <div class="row justify-content-md-around">
                    <div class="col-md-8 align-self-md-center">
                        <h2 class="text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-32">Order now and get
                            <span class="g-color-primary">20% off</span></h2>
                        <p class="g-mb-20 g-mb-0--md">Raecenas lacus magna, pretium in congue a, pharetra at lacus imperdiet luctus libero</p>
                    </div>

                    <div class="col-md-4 align-self-md-center text-md-center">
                        <a class="btn btn-md text-uppercase u-btn-darkgray g-font-weight-700 g-font-size-12 g-brd-none g-rounded-4 g-py-15 g-px-15 g-px-35--md" href="#">Calculate and order</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section Content -->

        <!-- Section Content -->
        <section>
            <div class="row no-gutters">
                <div class="col-md-4 g-brd-around g-brd-top-none g-brd-gray-light-v4">
                    <!-- Article -->
                    <article class="u-block-hover">
                        <figure class="u-bg-overlay g-bg-black-opacity-0_4--after g-overflow-hidden g-ml-minus-1--md g-mr-minus-1--md">
                            <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="assets/img-temp/600x400/about1.png" alt="Image description">
                        </figure>

                        <div class="text-center g-pa-40">
                            <h3 class="text-uppercase g-font-weight-700 g-font-size-22 g-mb-15">
                                <a class="g-color-gray-dark-v2 g-text-underline--none--hover" href="#">Cargo</a>
                            </h3>
                            <p>Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem</p>
                            <a class="text-uppercase g-font-weight-600 g-font-size-12" href="#">Learn More</a>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-md-4 g-brd-around g-brd-top-none g-brd-gray-light-v4 g-ml-minus-1--md g-mr-minus-1--md">
                    <!-- Article -->
                    <article class="u-block-hover">
                        <figure class="u-bg-overlay g-bg-black-opacity-0_4--after g-overflow-hidden g-ml-minus-1--md g-mr-minus-1--md">
                            <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="assets/img-temp/600x400/about2.jpg" alt="Image description">
                        </figure>

                        <div class="text-center g-pa-40">
                            <h3 class="text-uppercase g-font-weight-700 g-font-size-22 g-mb-15">
                                <a class="g-color-gray-dark-v2 g-text-underline--none--hover" href="#">Logistic services</a>
                            </h3>
                            <p>Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem</p>
                            <a class="text-uppercase g-font-weight-600 g-font-size-12" href="#">Learn More</a>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-md-4 g-brd-around g-brd-top-none g-brd-gray-light-v4">
                    <!-- Article -->
                    <article class="u-block-hover">
                        <figure class="u-bg-overlay g-bg-black-opacity-0_4--after g-overflow-hidden g-ml-minus-1--md g-mr-minus-1--md">
                            <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="assets/img-temp/600x400/about3.png" alt="Image description">
                        </figure>

                        <div class="text-center g-pa-40">
                            <h3 class="text-uppercase g-font-weight-700 g-font-size-22 g-mb-15">
                                <a class="g-color-gray-dark-v2 g-text-underline--none--hover" href="#">Storage</a>
                            </h3>
                            <p>Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem</p>
                            <a class="text-uppercase g-font-weight-600 g-font-size-12" href="#">Learn More</a>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>
            </div>
        </section>
        <!-- End Section Content -->

        <!-- Section Content -->
        <section class="g-pt-100">
            <div class="container g-width-760 g-mb-70">
                <div class="text-center mx-auto u-heading-v2-2--bottom g-brd-primary g-mb-30">
                    <h2 class="text-uppercase g-font-weight-700 g-font-size-26 g-mb-15">Types of shiping</h2>
                    <p class="mb-0">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                </div>
            </div>

            <div class="container-fluid px-0">
                <!-- Banners -->
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-3">
                        <!-- Article -->
                        <article class="h-100 text-center info-v3-3 g-parent g-bg-gray-light-v5 g-bg-cover g-bg-primary-opacity-0_6--after g-color-gray-dark-v3 g-color-white--hover g-py-30">
                            <!-- Article Image -->
                            <img class="info-v3-3__img" src="assets/img-temp/objects/img1.png" alt="Image description">
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="info-v3-3__description g-pos-cover g-flex-middle">
                                <div class="g-flex-middle-item g-pa-30">
                                    <h4 class="h3 text-uppercase g-line-height-1 g-font-weight-700 g-mb-20">
                                        <a class="info-v3-3__title g-color-gray-dark-v2 g-color-white--parent-hover g-text-underline--none--hover g-transition-0_3" href="#">
                                            <strong class="d-block">Small</strong>
                                            <span class="g-font-weight-400">Objects</span>
                                        </a>
                                    </h4>
                                    <em class="info-v3-3__category g-font-style-normal g-font-size-11 text-uppercase">Shipping & package</em>

                                    <div class="info-v3-3__content g-opacity-0_7">
                                        <p class="g-color-white--parent-hover mb-0">Maecenas tempus, tellus eget condimentum rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Article Content -->
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <!-- Article -->
                        <article class="h-100 text-center info-v3-3 g-parent g-bg-gray-light-v5 g-bg-cover g-bg-primary-opacity-0_6--after g-color-gray-dark-v3 g-color-white--hover g-py-30">
                            <!-- Article Image -->
                            <img class="info-v3-3__img" src="assets/img-temp/objects/img2.png" alt="Image description">
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="info-v3-3__description g-pos-cover g-flex-middle">
                                <div class="g-flex-middle-item g-pa-30">
                                    <h4 class="h3 text-uppercase g-line-height-1 g-font-weight-700 g-mb-20">
                                        <a class="info-v3-3__title g-color-gray-dark-v2 g-color-white--parent-hover g-text-underline--none--hover g-transition-0_3" href="#">
                                            <strong class="d-block">Medium</strong>
                                            <span class="g-font-weight-400">Objects</span>
                                        </a>
                                    </h4>
                                    <em class="info-v3-3__category g-font-style-normal g-font-size-11 text-uppercase">Shipping & package</em>

                                    <div class="info-v3-3__content g-opacity-0_7">
                                        <p class="g-color-white--parent-hover mb-0">Maecenas tempus, tellus eget condimentum rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Article Content -->
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <!-- Article -->
                        <article class="h-100 text-center info-v3-3 g-parent g-bg-gray-light-v5 g-bg-cover g-bg-primary-opacity-0_6--after g-color-gray-dark-v3 g-color-white--hover g-py-30">
                            <!-- Article Image -->
                            <img class="info-v3-3__img" src="assets/img-temp/objects/img3.png" alt="Image description">
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="info-v3-3__description g-pos-cover g-flex-middle">
                                <div class="g-flex-middle-item g-pa-30">
                                    <h4 class="h3 text-uppercase g-line-height-1 g-font-weight-700 g-mb-20">
                                        <a class="info-v3-3__title g-color-gray-dark-v2 g-color-white--parent-hover g-text-underline--none--hover g-transition-0_3" href="#">
                                            <strong class="d-block">Large</strong>
                                            <span class="g-font-weight-400">Objects</span>
                                        </a>
                                    </h4>
                                    <em class="info-v3-3__category g-font-style-normal g-font-size-11 text-uppercase">Shipping & package</em>

                                    <div class="info-v3-3__content g-opacity-0_7">
                                        <p class="g-color-white--parent-hover mb-0">Maecenas tempus, tellus eget condimentum rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Article Content -->
                        </article>
                        <!-- End Article -->
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <!-- Article -->
                        <article class="h-100 text-center info-v3-3 g-parent g-bg-gray-light-v5 g-bg-cover g-bg-primary-opacity-0_6--after g-color-gray-dark-v3 g-color-white--hover g-py-30">
                            <!-- Article Image -->
                            <img class="info-v3-3__img" src="assets/img-temp/objects/img4.png" alt="Image description">
                            <!-- End Article Image -->

                            <!-- Article Content -->
                            <div class="info-v3-3__description g-pos-cover g-flex-middle">
                                <div class="g-flex-middle-item g-pa-30">
                                    <h4 class="h3 text-uppercase g-line-height-1 g-font-weight-700 g-mb-20">
                                        <a class="info-v3-3__title g-color-gray-dark-v2 g-color-white--parent-hover g-text-underline--none--hover g-transition-0_3" href="#">
                                            <strong class="d-block">XXXXL</strong>
                                            <span class="g-font-weight-400">Objects</span>
                                        </a>
                                    </h4>
                                    <em class="info-v3-3__category g-font-style-normal g-font-size-11 text-uppercase">Shipping & package</em>

                                    <div class="info-v3-3__content g-opacity-0_7">
                                        <p class="g-color-white--parent-hover mb-0">Maecenas tempus, tellus eget condimentum rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Article Content -->
                        </article>
                        <!-- End Article -->
                    </div>
                </div>
                <!-- End Banners -->
            </div>
        </section>
        <!-- End Section Content -->
    </div>

    <!-- Section Content -->
    <section id="services" class="u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_6--after g-py-85" style="background-image: url(assets/img-temp/1732x1155/convoy.jpg);">
        <div class="container u-bg-overlay__inner g-width-760">
            <div class="text-center mx-auto u-heading-v2-2--bottom g-brd-primary g-mb-70">
                <h2 class="text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-26 g-color-white g-mb-15">Tour services</h2>
                <p class="g-color-white-opacity-0_8 mb-0">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus.</p>
            </div>
        </div>

        <div class="container u-bg-overlay__inner">
            <!-- Icon Blocks -->
            <div class="row">
                <div class="col-md-4 g-mb-80">
                    <!-- Icon Blocks -->
                    <div class="u-info-v2-2 h-100 g-color-white text-center">
                        <div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
                  <span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
                    <i class="icon-transport-026 u-line-icon-pro"></i>
                  </span>
                            <h3 class="h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">International Shiping</h3>
                            <p class="g-color-white-opacity-0_8 mb-0">Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-md-4 g-mb-80">
                    <!-- Icon Blocks -->
                    <div class="u-info-v2-2 h-100 g-color-white text-center">
                        <div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
                  <span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
                    <i class="icon-christmas-090 u-line-icon-pro"></i>
                  </span>
                            <h3 class="h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">Packaging</h3>
                            <p class="g-color-white-opacity-0_8 mb-0">Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-md-4 g-mb-80">
                    <!-- Icon Blocks -->
                    <div class="u-info-v2-2 h-100 g-color-white text-center">
                        <div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
                  <span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
                    <i class="icon-travel-044 u-line-icon-pro"></i>
                  </span>
                            <h3 class="h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">Competitive rates</h3>
                            <p class="g-color-white-opacity-0_8 mb-0">Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-md-4 g-mb-80 g-mb-0--md">
                    <!-- Icon Blocks -->
                    <div class="u-info-v2-2 h-100 g-color-white text-center">
                        <div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
                  <span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
                    <i class="icon-hotel-restaurant-249 u-line-icon-pro"></i>
                  </span>
                            <h3 class="h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">Quick shiping</h3>
                            <p class="g-color-white-opacity-0_8 mb-0">Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-md-4 g-mb-80 g-mb-0--md">
                    <!-- Icon Blocks -->
                    <div class="u-info-v2-2 h-100 g-color-white text-center">
                        <div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
                  <span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
                    <i class="icon-hotel-restaurant-211 u-line-icon-pro"></i>
                  </span>
                            <h3 class="h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">Quality protection</h3>
                            <p class="g-color-white-opacity-0_8 mb-0">Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-md-4">
                    <!-- Icon Blocks -->
                    <div class="u-info-v2-2 h-100 g-color-white text-center">
                        <div class="u-info-v2-2__item h-100 g-brd-around g-brd-top-none g-brd-white-opacity-0_2 g-px-20 g-pb-30">
                  <span class="u-icon-v1 u-icon-size--2xl g-line-height-1 g-color-white g-pull-50x-up">
                    <i class="icon-hotel-restaurant-234 u-line-icon-pro"></i>
                  </span>
                            <h3 class="h6 text-uppercase g-font-weight-700 g-color-white g-mt-minus-35 g-mb-15">Shiping anywhere</h3>
                            <p class="g-color-white-opacity-0_8 mb-0">Fusce mauris eros, ullamcorper in gravida a, feugiat in mauris. Curabitur ac scelerisque nisi. Vivamus accumsan in purus et egestas.</p>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
            </div>
            <!-- End Icon Blocks -->
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Section Content -->
    <section id="skills">
        <div class="g-py-85">
            <div class="container text-center g-width-760 u-heading-v2-2--bottom g-brd-primary g-mb-40">
                <h2 class="text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-26 g-mb-15">Our skills</h2>
                <p class="mb-0">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas ac nulla vehicula risus pulvinar feugiat ullamcorper sit amet mi.</p>
            </div>

            <div class="container">
                <div class="row">
                    <!-- Counter Pie Chart -->
                    <div class="col-md-6 col-lg-3 text-center g-mb-50 g-mb-0--lg">
                        <div class="js-pie g-font-weight-600 g-mb-35"
                             data-circles-value="84"
                             data-circles-max-value="100"
                             data-circles-bg-color="#f8f8f8"
                             data-circles-fg-color="#f00"
                             data-circles-radius="80"
                             data-circles-stroke-width="10"
                             data-circles-duration="2000"
                             data-circles-scroll-animate="true"
                             data-circles-font-size="20"
                             data-circles-color="#000">
                        </div>

                        <h4 class="h6 text-uppercase g-font-weight-600 g-mb-15">Happy Clients</h4>
                        <p class="mb-0">Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo odio maximus efficitur</p>
                    </div>
                    <!-- End Counter Pie Chart -->

                    <!-- Counter Pie Chart -->
                    <div class="col-md-6 col-lg-3 text-center g-mb-50 g-mb-0--lg">
                        <div class="js-pie g-font-weight-600 g-mb-35"
                             data-circles-value="34"
                             data-circles-max-value="100"
                             data-circles-bg-color="#f8f8f8"
                             data-circles-fg-color="#f00"
                             data-circles-radius="80"
                             data-circles-stroke-width="10"
                             data-circles-duration="2000"
                             data-circles-scroll-animate="true"
                             data-circles-font-size="20"
                             data-circles-color="#000">
                        </div>

                        <h4 class="h6 text-uppercase g-font-weight-600 g-mb-15">Completed Projects</h4>
                        <p class="mb-0">Quisque vestibulum sem eget nibh commodo, non elementum nibh pulvinar. Duis mattis venenatis tortor iaculis ultricies</p>
                    </div>
                    <!-- End Counter Pie Chart -->

                    <!-- Counter Pie Chart -->
                    <div class="col-md-6 col-lg-3 text-center g-mb-50 g-mb-0--md">
                        <div class="js-pie g-font-weight-600 g-mb-35"
                             data-circles-value="35"
                             data-circles-max-value="100"
                             data-circles-bg-color="#f8f8f8"
                             data-circles-fg-color="#f00"
                             data-circles-radius="80"
                             data-circles-stroke-width="10"
                             data-circles-duration="2000"
                             data-circles-scroll-animate="true"
                             data-circles-font-size="20"
                             data-circles-color="#000">
                        </div>

                        <h4 class="h6 text-uppercase g-font-weight-600 g-mb-15">Our Team</h4>
                        <p class="mb-0">Nullam in diam arcu. Etiam nisl justo, tempor scelerisque sagittis vel, bibendum vestibulum metus. Donec eget nunc neque</p>
                    </div>
                    <!-- End Counter Pie Chart -->

                    <!-- Counter Pie Chart -->
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="js-pie g-font-weight-600 g-mb-35"
                             data-circles-value="67"
                             data-circles-max-value="100"
                             data-circles-bg-color="#f8f8f8"
                             data-circles-fg-color="#f00"
                             data-circles-radius="80"
                             data-circles-stroke-width="10"
                             data-circles-duration="2000"
                             data-circles-scroll-animate="true"
                             data-circles-font-size="20"
                             data-circles-color="#000">
                        </div>

                        <h4 class="h6 text-uppercase g-font-weight-600 g-mb-15">Countries</h4>
                        <p class="mb-0">Rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis</p>
                    </div>
                    <!-- End Counter Pie Chart -->
                </div>
            </div>
        </div>

        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="g-bg-img-hero g-min-height-360 h-100" style="background-image: url(assets/img-temp/600x985/gps.jpg);"></div>
                </div>

                <div class="col-md-8">
                    <div class="g-theme-bg-gray-light-v1 g-py-70 g-px-35">
                        <h2 class="text-uppercase g-font-weight-700 g-font-size-26 g-mb-15">Packing fragile items</h2>
                        <p class="g-mb-30">Aenean volutpat erat quis mollis accumsan. Mauris at cursus ipsum. Praesent molestie imperdiet purus in finibus. Pellentesque elit enim, malesuada a varius elementum, sodales id turpis. Maecenas interdum enim egestas risus semper, consectetur auctor metus rhoncus.</p>
                        <p class="mb-0">Proin tempus tincidunt nunc sed pellentesque. Vivamus suscipit, tellus nec auctor egestas, urna augue hendrerit est, vel luctus nisl leo ut sem. Suspendisse sed tincidunt risus.</p>
                    </div>

                    <div class="g-py-55 g-px-35">
                        <div class="row">
                            <div class="col-lg-6 g-mb-30">
                                <div class="media">
                                    <div class="d-flex mr-4">
                                        <span class="d-block g-font-size-30 g-font-weight-700 g-line-height-1 g-color-primary">01.</span>
                                    </div>

                                    <div class="media-body">
                                        <h3 class="h5 text-uppercase g-font-weight-700 g-mb-15">Fusce accumsan faucibus</h3>
                                        <p class="mb-0">Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem. Fusce accumsan faucibus laoreet. Maecenas auctor mauris erat quis mollis.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 g-mb-30">
                                <div class="media">
                                    <div class="d-flex mr-4">
                                        <span class="d-block g-font-size-30 g-font-weight-700 g-line-height-1 g-color-primary">02.</span>
                                    </div>

                                    <div class="media-body">
                                        <h3 class="h5 text-uppercase g-font-weight-700 g-mb-15">Maecenas auctor mauris</h3>
                                        <p class="mb-0">Aenean volutpat erat quis mollis accumsan. Mauris at cursus ipsum. Praesent molestie imperdiet purus in finibus. Pellentesque elit enim, malesuada a varius elementum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 g-mb-30">
                                <div class="media">
                                    <div class="d-flex mr-4">
                                        <span class="d-block g-font-size-30 g-font-weight-700 g-line-height-1 g-color-primary">03.</span>
                                    </div>

                                    <div class="media-body">
                                        <h3 class="h5 text-uppercase g-font-weight-700 g-mb-15">Suspendisse pharetra elit ac</h3>
                                        <p class="mb-0">Maecenas interdum enim egestas risus semper, consectetur auctor metus rhoncus. Proin tempus tincidunt nunc sed pellentesque. Vivamus suscipit, tellus nec</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 g-mb-30">
                                <div class="media">
                                    <div class="d-flex mr-4">
                                        <span class="d-block g-font-size-30 g-font-weight-700 g-line-height-1 g-color-primary">04.</span>
                                    </div>

                                    <div class="media-body">
                                        <h3 class="h5 text-uppercase g-font-weight-700 g-mb-15">Vestibulum fringilla risus ege</h3>
                                        <p class="mb-0">Suspendisse sed tincidunt risus. Nam vehicula nunc vel metus rutrum, eu venenatis nulla porttitor. Nam iaculis nunc eu tincidunt consectetur. Nullam et ex at velit tempor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 g-mb-30 g-mb-0--lg">
                                <div class="media">
                                    <div class="d-flex mr-4">
                                        <span class="d-block g-font-size-30 g-font-weight-700 g-line-height-1 g-color-primary">05.</span>
                                    </div>

                                    <div class="media-body">
                                        <h3 class="h5 text-uppercase g-font-weight-700 g-mb-15">Enim egestas risus semper</h3>
                                        <p class="mb-0">Maecenas interdum enim egestas risus semper, consectetur auctor metus rhoncus. Proin tempus tincidunt nunc sed pellentesque. Vivamus suscipit, tellus nec</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="media">
                                    <div class="d-flex mr-4">
                                        <span class="d-block g-font-size-30 g-font-weight-700 g-line-height-1 g-color-primary">06.</span>
                                    </div>

                                    <div class="media-body">
                                        <h3 class="h5 text-uppercase g-font-weight-700 g-mb-15">Eu venenatis nulla porttitor</h3>
                                        <p class="mb-0">Suspendisse sed tincidunt risus. Nam vehicula nunc vel metus rutrum, eu venenatis nulla porttitor. Nam iaculis nunc eu tincidunt consectetur. Nullam et ex at velit tempor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Section Content -->
    <section id="offers" class="g-theme-bg-gray-light-v1 g-py-100">
        <div class="container text-center g-width-760 u-heading-v2-2--bottom g-brd-primary g-mb-70">
            <h2 class="text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-26 g-mb-15">Best offers</h2>
            <p class="mb-0">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, Etiam rhoncus. Maecenas tempus.</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 g-mb-30">
                    <!-- Article -->
                    <article class="text-center u-block-hover u-block-hover__additional--jump g-color-gray-dark-v3 g-bg-white">
                        <!-- Article Image -->
                        <img class="w-100" src="assets/img-temp/600x400/img3.jpg" alt="Image description">
                        <!-- End Article Image -->

                        <!-- Article Content -->
                        <div class="g-py-40 g-px-30">
                            <h4 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-black g-mb-15">Small</h4>
                            <em class="d-block g-font-style-normal g-color-gray-dark-v3 g-mb-35">Dimentions: 10x10x15cm</em>
                            <strong class="d-block g-font-size-30 g-color-gray-dark-v3 g-mb-30">$10.00</strong>
                            <ul class="list-unstyled text-uppercase g-mb-30">
                                <li class="g-mb-9">Curabitur sit amet</li>
                                <li class="g-mb-9">Etiam ac massa sit</li>
                                <li class="g-mb-9">Fusce accumsan faucibus</li>
                                <li class="g-mb-9">Duis tristique bibendum</li>
                                <li class="g-mb-9">Duis vehicula</li>
                                <li class="g-mb-9">Donec fringilla</li>
                            </ul>

                            <a class="btn btn-md text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-brd-none g-rounded-4 g-py-12 g-px-15" href="#">Order Now</a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-lg-3 col-sm-6 g-mb-30">
                    <!-- Article -->
                    <article class="text-center u-block-hover u-block-hover__additional--jump g-color-gray-dark-v3 g-bg-white">
                        <!-- Article Image -->
                        <img class="w-100" src="assets/img-temp/600x400/img4.jpg" alt="Image description">
                        <!-- End Article Image -->

                        <!-- Article Content -->
                        <div class="g-py-40 g-px-30">
                            <h4 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-black g-mb-15">Medium</h4>
                            <em class="d-block g-font-style-normal g-color-gray-dark-v3 g-mb-35">Dimentions: 10x10x15cm</em>
                            <strong class="d-block g-font-size-30 g-color-gray-dark-v3 g-mb-30">$20.00</strong>
                            <ul class="list-unstyled text-uppercase g-mb-30">
                                <li class="g-mb-9">Curabitur sit amet</li>
                                <li class="g-mb-9">Etiam ac massa sit</li>
                                <li class="g-mb-9">Fusce accumsan faucibus</li>
                                <li class="g-mb-9">Duis tristique bibendum</li>
                                <li class="g-mb-9">Duis vehicula</li>
                                <li class="g-mb-9">Donec fringilla</li>
                            </ul>
                            <a class="btn btn-md text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-brd-none g-rounded-4 g-py-12 g-px-15" href="#">Order now</a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-lg-3 col-sm-6 g-mb-30 g-mb-0--md">
                    <!-- Article -->
                    <article class="text-center u-block-hover u-block-hover__additional--jump g-color-gray-dark-v3 g-bg-white">
                        <!-- Article Image -->
                        <img class="w-100" src="assets/img-temp/600x400/img5.jpg" alt="Image description">
                        <!-- End Article Image -->

                        <!-- Article Content -->
                        <div class="g-py-40 g-px-30">
                            <h4 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-black g-mb-15">Large</h4>
                            <em class="d-block g-font-style-normal g-color-gray-dark-v3 g-mb-35">Dimentions: 10x10x15cm</em>
                            <strong class="d-block g-font-size-30 g-color-gray-dark-v3 g-mb-30">$40.00</strong>
                            <ul class="list-unstyled text-uppercase g-mb-30">
                                <li class="g-mb-9">Curabitur sit amet</li>
                                <li class="g-mb-9">Etiam ac massa sit</li>
                                <li class="g-mb-9">Fusce accumsan faucibus</li>
                                <li class="g-mb-9">Duis tristique bibendum</li>
                                <li class="g-mb-9">Duis vehicula</li>
                                <li class="g-mb-9">Donec fringilla</li>
                            </ul>
                            <a class="btn btn-md text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-brd-none g-rounded-4 g-py-12 g-px-15" href="#">Order now</a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <!-- Article -->
                    <article class="text-center u-block-hover u-block-hover__additional--jump g-color-gray-dark-v3 g-bg-white">
                        <!-- Article Image -->
                        <img class="w-100" src="assets/img-temp/600x400/img6.jpg" alt="Image description">
                        <!-- End Article Image -->

                        <!-- Article Content -->
                        <div class="g-py-40 g-px-30">
                            <h4 class="text-uppercase g-font-weight-700 g-font-size-16 g-color-black g-mb-15">Extra large</h4>
                            <em class="d-block g-font-style-normal g-color-gray-dark-v3 g-mb-35">Dimentions: 10x10x15cm</em>
                            <strong class="d-block g-font-size-30 g-color-gray-dark-v3 g-mb-30">$100.00</strong>
                            <ul class="list-unstyled text-uppercase g-mb-30">
                                <li class="g-mb-9">Curabitur sit amet</li>
                                <li class="g-mb-9">Etiam ac massa sit</li>
                                <li class="g-mb-9">Fusce accumsan faucibus</li>
                                <li class="g-mb-9">Duis tristique bibendum</li>
                                <li class="g-mb-9">Duis vehicula</li>
                                <li class="g-mb-9">Donec fringilla</li>
                            </ul>
                            <a class="btn btn-md text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-brd-none g-rounded-4 g-py-12 g-px-15" href="#">Order now</a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <section id="gallery" class="g-pt-90">
        <div class="container text-center g-width-760 u-heading-v2-2--bottom g-brd-primary g-mb-70">
            <h2 class="text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-26 g-mb-15">Gallery</h2>
            <p class="mb-0">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, Etiam rhoncus. Maecenas tempus.</p>
        </div>

        <!-- Cube Portfolio -->
        <div class="cbp"
             data-layout="grid"
             data-animation="slideLeft"
             data-caption-animation="zoom"
             data-x-gap="0"
             data-y-gap="0"
             data-media-queries='[
               {"width": 800, "cols": 3},
               {"width": 480, "cols": 2},
               {"width": 320, "cols": 1}
             ]'>
            <div class="cbp-item">
                <a class="cbp-caption cbp-lightbox" href="assets/img-temp/1732x1155/img3.jpg"
                   data-title="Design Object">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img-temp/600x400/img7.jpg" alt="Image description">
                    </div>
                </a>
            </div>

            <div class="cbp-item">
                <a class="cbp-caption cbp-lightbox" href="assets/img-temp/1732x1155/img4.jpg"
                   data-title="Design Object">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img-temp/600x400/img8.jpg" alt="Image description">
                    </div>
                </a>
            </div>

            <div class="cbp-item">
                <a class="cbp-caption cbp-lightbox" href="assets/img-temp/1732x1155/img5.jpg"
                   data-title="Design Object">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img-temp/600x400/img9.jpg" alt="Image description">
                    </div>
                </a>
            </div>

            <div class="cbp-item">
                <a class="cbp-caption cbp-lightbox" href="assets/img-temp/1732x1155/img6.jpg"
                   data-title="Design Object">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img-temp/600x400/img10.jpg" alt="Image description">
                    </div>
                </a>
            </div>

            <div class="cbp-item">
                <a class="cbp-caption cbp-lightbox" href="assets/img-temp/1732x1155/img7.jpg"
                   data-title="Design Object">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img-temp/600x400/img11.jpg" alt="Image description">
                    </div>
                </a>
            </div>

            <div class="cbp-item">
                <a class="cbp-caption cbp-lightbox" href="assets/img-temp/1732x1155/img8.jpg"
                   data-title="Design Object">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img-temp/600x400/img12.jpg" alt="Image description">
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Section Content -->
    <section id="FAQ" class="g-theme-bg-gray-light-v1 g-pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex align-items-center g-order-2--lg g-mb-50 g-mb-0--lg">
                    <div class="w-100">
                        <div class="u-heading-v2-2--bottom g-brd-primary g-mb-50">
                            <h2 class="text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-26 g-mb-15">FAQ</h2>
                            <p class="mb-0">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
                        </div>

                        <div id="FAQAccordion">
                            <div class="card g-brd-none">
                                <div id="FAQAccordionHeading1" class="card-header u-accordion__header g-pos-rel g-bg-transparent g-brd-none rounded-0 g-py-10 g-px-30">
                                    <a class="g-font-weight-700 g-font-size-18" href="#FAQAccordionBody1" aria-expanded="true" aria-controls="FAQAccordionBody1"
                                       data-toggle="collapse"
                                       data-parent="#FAQAccordion">
                      <span class="u-accordion__control-icon g-absolute-centered--y g-left-0 g-color-primary">
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-minus"></i>
                      </span>
                                        Phasellus bibendum semper lectus, in ornare erat tempus eget?
                                    </a>
                                </div>

                                <div id="FAQAccordionBody1" class="collapse show" aria-labelledby="FAQAccordionHeading1">
                                    <div class="card-block u-accordion__body g-py-10 g-px-30">
                                        <p class="g-line-height-1_5 mb-0">Anim pariatur cliche reprehenderit, 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card g-brd-none">
                                <div id="FAQAccordionHeading2" class="card-header u-accordion__header g-pos-rel g-bg-transparent g-brd-none rounded-0 g-py-10 g-px-30">
                                    <a class="g-font-weight-700 g-font-size-18 collapsed" href="#FAQAccordionBody2" aria-expanded="false" aria-controls="FAQAccordionBody2"
                                       data-toggle="collapse"
                                       data-parent="#FAQAccordion">
                      <span class="u-accordion__control-icon g-absolute-centered--y g-left-0 g-color-primary">
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-minus"></i>
                      </span>
                                        Duis vehicula turpis tincidunt, malesuada mauris et, tincidunt nisl?
                                    </a>
                                </div>

                                <div id="FAQAccordionBody2" class="collapse" aria-labelledby="FAQAccordionHeading2">
                                    <div class="card-block u-accordion__body g-py-10 g-px-30">
                                        <p class="g-line-height-1_5 mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card g-brd-none">
                                <div id="FAQAccordionHeading3" class="card-header u-accordion__header g-pos-rel g-bg-transparent g-brd-none rounded-0 g-py-10 g-px-30">
                                    <a class="g-font-weight-700 g-font-size-18 collapsed" href="#FAQAccordionBody3" aria-expanded="false" aria-controls="FAQAccordionBody3"
                                       data-toggle="collapse"
                                       data-parent="#FAQAccordion">
                      <span class="u-accordion__control-icon g-absolute-centered--y g-left-0 g-color-primary">
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-minus"></i>
                      </span>
                                        Mauris et lacus ut massa luctus varius?
                                    </a>
                                </div>

                                <div id="FAQAccordionBody3" class="collapse" aria-labelledby="FAQAccordionHeading3">
                                    <div class="card-block u-accordion__body g-py-10 g-px-30">
                                        <p class="g-line-height-1_5 mb-0">3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card g-brd-none">
                                <div id="FAQAccordionHeading4" class="card-header u-accordion__header g-pos-rel g-bg-transparent g-brd-none rounded-0 g-py-10 g-px-30">
                                    <a class="g-font-weight-700 g-font-size-18 collapsed" href="#FAQAccordionBody4" aria-expanded="false" aria-controls="FAQAccordionBody4"
                                       data-toggle="collapse"
                                       data-parent="#FAQAccordion">
                      <span class="u-accordion__control-icon g-absolute-centered--y g-left-0 g-color-primary">
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-minus"></i>
                      </span>
                                        Curabitur id elit lobortis, malesuada nibh in, fringilla metus?
                                    </a>
                                </div>

                                <div id="FAQAccordionBody4" class="collapse" aria-labelledby="FAQAccordionHeading4">
                                    <div class="card-block u-accordion__body g-py-10 g-px-30">
                                        <p class="g-line-height-1_5 mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. nesciunt laborum eiusmod.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card g-brd-none">
                                <div id="FAQAccordionHeading5" class="card-header u-accordion__header g-pos-rel g-bg-transparent g-brd-none rounded-0 g-py-10 g-px-30">
                                    <a class="g-font-weight-700 g-font-size-18 collapsed" href="#FAQAccordionBody5" aria-expanded="false" aria-controls="FAQAccordionBody5"
                                       data-toggle="collapse"
                                       data-parent="#FAQAccordion">
                      <span class="u-accordion__control-icon g-absolute-centered--y g-left-0 g-color-primary">
                        <i class="fa fa-plus"></i>
                        <i class="fa fa-minus"></i>
                      </span>
                                        Fusce accumsan faucibus laoreet?
                                    </a>
                                </div>

                                <div id="FAQAccordionBody5" class="collapse" aria-labelledby="FAQAccordionHeading5">
                                    <div class="card-block u-accordion__body g-py-10 g-px-30">
                                        <p class="g-line-height-1_5 mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-center g-order-1--lg">
                    <img class="img-fluid" src="assets/img-temp/348x660/img1.png" alt="Image description">
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Section Content -->
    <section id="testimonials">
        <div class="u-bg-overlay g-bg-img-hero g-bg-black-opacity-0_5--after g-py-90" style="background-image: url(assets/img-temp/1920x1280/flotilla.jpg);">
            <div class="container u-bg-overlay__inner g-width-760">
                <div class="text-center mx-auto u-heading-v2-2--bottom g-brd-primary g-mb-70">
                    <h2 class="text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-26 g-color-white g-mb-15">What do people say about us?</h2>
                    <p class="g-color-white-opacity-0_8 mb-0">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Nam eget dui. Etiam rhoncus. ullamcorper ultricies nisi, ullamcorper ultricies nisi</p>
                </div>
            </div>

            <div class="container u-bg-overlay__inner g-width-900">
                <div class="js-carousel g-pb-70"
                     data-infinite="true"
                     data-arrows-classes="u-arrow-v1 g-absolute-centered--x g-bottom-0 g-width-40 g-height-40 g-rounded-50x g-font-size-default g-theme-color-gray-light-v2 g-color-white--hover g-bg-white g-bg-primary--hover g-transition-0_2 g-transition--ease-in"
                     data-arrow-left-classes="fa fa-angle-left g-ml-minus-30"
                     data-arrow-right-classes="fa fa-angle-right g-ml-30">
                    <div class="js-slide">
                        <!-- Testimonial Block -->
                        <div class="media d-block d-md-flex">
                            <div class="g-mb-30 g-mb-0--md g-pr-30--sm">
                                <img class="img-fluid rounded-circle img-bordered g-brd-white mx-auto" src="assets/img-temp/120x120/img1.jpg" alt="Image description">
                            </div>

                            <div class="media-body align-self-center text-sm-left text-center g-color-white">
                                <blockquote class="g-mb-25">The customisation options you implemented are countless, and I feel sorry I can't use them all. Good job, and keep going! are countless, and I feel</blockquote>
                                <h4 class="h6 text-uppercase g-font-weight-700 g-color-white mb-0">Someone someone</h4>
                            </div>
                        </div>
                        <!-- End Testimonial Block -->
                    </div>

                    <div class="js-slide">
                        <!-- Testimonial Block -->
                        <div class="media d-block d-md-flex">
                            <div class="g-mb-30 g-mb-0--md g-pr-30--sm">
                                <img class="img-fluid rounded-circle img-bordered g-brd-white mx-auto" src="assets/img-temp/120x120/img2.jpg" alt="Image Description">
                            </div>

                            <div class="media-body align-self-center text-center text-sm-left g-color-white">
                                <blockquote class="g-mb-25">The customisation options you implemented are countless, and I feel sorry I can't use them all. Good job, and keep going! are countless, and I feel</blockquote>
                                <h4 class="h6 text-uppercase g-font-weight-700 g-color-white mb-0">Someone someone</h4>
                            </div>
                        </div>
                        <!-- End Testimonial Block -->
                    </div>

                    <div class="js-slide">
                        <!-- Testimonial Block -->
                        <div class="media d-block d-md-flex">
                            <div class="g-mb-30 g-mb-0--md g-pr-30--sm">
                                <img class="img-fluid rounded-circle img-bordered g-brd-white mx-auto" src="assets/img-temp/120x120/img3.jpg" alt="Image Description">
                            </div>

                            <div class="media-body align-self-center text-center text-sm-left g-color-white">
                                <blockquote class="g-mb-25">The customisation options you implemented are countless, and I feel sorry I can't use them all. Good job, and keep going! are countless, and I feel</blockquote>
                                <h4 class="h6 text-uppercase g-font-weight-700 g-color-white mb-0">Someone someone</h4>
                            </div>
                        </div>
                        <!-- End Testimonial Block -->
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselCus1" class="js-carousel g-brd-bottom g-brd-gray-light-v4"
             data-autoplay="true"
             data-slides-show="7">
            <div class="js-slide g-brd-left g-brd-gray-light-v4 g-py-50">
                <img class="mx-auto g-width-120" src="assets/img-temp/250x200/img1.png" alt="Image description">
            </div>

            <div class="js-slide g-brd-left g-brd-gray-light-v4 g-py-50">
                <img class="mx-auto g-width-120" src="assets/img-temp/250x200/img2.png" alt="Image description">
            </div>

            <div class="js-slide g-brd-left g-brd-gray-light-v4 g-py-50">
                <img class="mx-auto g-width-120" src="assets/img-temp/250x200/img3.png" alt="Image description">
            </div>

            <div class="js-slide g-brd-left g-brd-gray-light-v4 g-py-50">
                <img class="mx-auto g-width-120" src="assets/img-temp/250x200/img4.png" alt="Image description">
            </div>

            <div class="js-slide g-brd-left g-brd-gray-light-v4 g-py-50">
                <img class="mx-auto g-width-120" src="assets/img-temp/250x200/img8.png" alt="ImagedDescription">
            </div>

            <div class="js-slide g-brd-left g-brd-gray-light-v4 g-py-50">
                <img class="mx-auto g-width-120" src="assets/img-temp/250x200/img9.png" alt="ImagedDescription">
            </div>

            <div class="js-slide g-brd-left g-brd-gray-light-v4 g-py-50">
                <img class="mx-auto g-width-120" src="assets/img-temp/250x200/img5.png" alt="Image description">
            </div>

            <div class="js-slide g-brd-left g-brd-gray-light-v4 g-py-50">
                <img class="mx-auto g-width-120" src="assets/img-temp/250x200/img6.png" alt="Image description">
            </div>

            <div class="js-slide g-brd-left g-brd-gray-light-v4 g-py-50">
                <img class="mx-auto g-width-120" src="assets/img-temp/250x200/img7.png" alt="Image description">
            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Section Content -->
    <section id="contact" class="g-pt-80">
        <div class="container text-center g-width-760 u-heading-v2-2--bottom g-brd-primary g-mb-70">
            <h2 class="text-uppercase g-line-height-1_1 g-font-weight-700 g-font-size-26 g-mb-15">Contact us</h2>
            <p class="mb-0">Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
        </div>

        <!-- Google Map -->
        <div id="gMap" class="js-g-map g-min-height-500 h-100"
             data-type="custom"
             data-lat="40.674"
             data-lng="-73.946"
             data-zoom="12"
             data-title="Travel"
             data-styles='[
               ["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]],
               ["", "labels", [{"visibility":"on"}]],
               ["water", "", [{"color":"#cccccc"}]]
             ]'
             data-pin="true"
             data-pin-icon="assets/img/pin.png">
        </div>
        <!-- End Google Map -->

        <div class="container g-py-80">
            <div class="row">
                <div class="col-lg-4 text-uppercase">
                    <h3 class="h5 g-font-weight-600 g-color-gray-dark-v2 g-mb-20">Where to meet</h3>
                    <p class="g-font-size-12 g-mb-40">Curabitur sit amet fringilla mi. Etiam ac massa sit amet nulla eleifend rutrum vitae non sem.</p>

                    <h3 class="h5 g-font-weight-600 g-color-gray-dark-v2 g-mb-20">Say Hello!</h3>
                    <address class="g-font-size-12">
                        <p>Phone number <strong class="g-color-gray-dark-v2">+48 555 2566 112</strong></p>
                        <p> Email
                            <a class="g-color-gray-dark-v2" href="mailto:info@unify.com"><strong>info@unify.com</strong></a></p>
                    </address>
                </div>

                <div class="col-lg-8">
                    <form>
                        <div class="row">
                            <div class="col-lg-12 form-group g-mb-20">
                                <input class="form-control g-font-size-default g-color-gray-dark-v5 g-placeholder-inherit g-bg-gray-light-v5 g-brd-gray-light-v5 g-brd-primary--focus g-color-gray-dark-v5 g-rounded-4 g-py-13 g-px-12" type="text" placeholder="Your name">
                            </div>

                            <div class="col-lg-12 form-group g-mb-20">
                                <input class="form-control g-font-size-default g-color-gray-dark-v5 g-placeholder-inherit g-bg-gray-light-v5 g-brd-gray-light-v5 g-brd-primary--focus g-color-gray-dark-v5 g-rounded-4 g-py-13 g-px-12" type="tel" placeholder="Your email *">
                            </div>

                            <div class="col-lg-12 form-group g-mb-20">
                                <textarea class="form-control g-font-size-default g-color-gray-dark-v5 g-placeholder-inherit g-resize-none g-bg-gray-light-v5 g-brd-gray-light-v5 g-brd-primary--focus g-color-gray-dark-v5 g-rounded-4 g-py-13 g-px-12" rows="5" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-md btn-block text-uppercase u-btn-primary g-font-weight-700 g-font-size-12 g-brd-none g-rounded-4 g-py-12 g-px-15" type="submit" role="button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Footer -->
    <footer class="text-center text-md-left g-color-gray-dark-v4 g-bg-gray-dark-v2 g-py-25">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center g-mb-10 g-mb-0--md">
                    <p class="w-100 g-color-gray-light-v8 mb-0">
                        © 2017 All right reserved. Development by
                        <a class="g-font-weight-700 g-color-white" href="#">HTML Stream</a>
                    </p>
                </div>

                <div class="col-md-6">
                    <ul class="list-inline float-md-right mb-0">
                        <li class="list-inline-item g-mr-10">
                            <a class="u-icon-v3 g-width-28 g-height-28 g-font-size-14 g-color-gray-light-v9 g-color-white--hover g-brd-gray-dark-v2 g-bg-gray-dark-v2 g-bg-primary--hover g-rounded-4 g-transition-0_2 g-transition--ease-in" href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item g-mr-10">
                            <a class="u-icon-v3 g-width-28 g-height-28 g-font-size-14 g-color-gray-light-v9 g-color-white--hover g-brd-gray-dark-v2 g-bg-gray-dark-v2 g-bg-primary--hover g-rounded-4 g-transition-0_2 g-transition--ease-in" href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li class="list-inline-item g-mr-10">
                            <a class="u-icon-v3 g-width-28 g-height-28 g-font-size-14 g-color-gray-light-v9 g-color-white--hover g-brd-gray-dark-v2 g-bg-gray-dark-v2 g-bg-primary--hover g-rounded-4 g-transition-0_2 g-transition--ease-in" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="u-icon-v3 g-width-28 g-height-28 g-font-size-14 g-color-gray-light-v9 g-color-white--hover g-brd-gray-dark-v2 g-bg-gray-dark-v2 g-bg-primary--hover g-rounded-4 g-transition-0_2 g-transition--ease-in" href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="u-icon-v3 g-width-28 g-height-28 g-font-size-14 g-color-gray-light-v9 g-color-white--hover g-brd-gray-dark-v2 g-bg-gray-dark-v2 g-bg-primary--hover g-rounded-4 g-transition-0_2 g-transition--ease-in" href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a class="js-go-to u-go-to-v1" href="#"
       data-type="fixed"
       data-position='{
           "bottom": 15,
           "right": 15
         }'
       data-offset-top="400"
       data-compensation="#js-header"
       data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
</main>

<!-- JS Global Compulsory -->
<script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.easing/js/jquery.easing.js"></script>
<script src="<?=base_url()?>assets/vendor/popper.min.js"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="<?=base_url()?>assets/vendor/appear.js"></script>
<script src="<?=base_url()?>assets/vendor/chosen/chosen.jquery.js"></script>
<script src="<?=base_url()?>assets/vendor/image-select/src/ImageSelect.jquery.js"></script>
<script src="<?=base_url()?>assets/vendor/circles/circles.min.js"></script>
<script src="<?=base_url()?>assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="<?=base_url()?>assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="<?=base_url()?>assets/vendor/gmaps/gmaps.min.js"></script>

<!-- JS Unify -->
<script src="<?=base_url()?>assets/js/hs.core.js"></script>
<script src="<?=base_url()?>assets/js/components/hs.header.js"></script>
<script src="<?=base_url()?>assets/js/helpers/hs.hamburgers.js"></script>
<script src="<?=base_url()?>assets/js/components/hs.scroll-nav.js"></script>
<script src="<?=base_url()?>assets/js/components/hs.select.js"></script>
<script src="<?=base_url()?>assets/js/components/hs.chart-pie.js"></script>
<script src="<?=base_url()?>assets/js/components/hs.carousel.js"></script>
<script src="<?=base_url()?>assets/js/components/hs.cubeportfolio.js"></script>
<script src="<?=base_url()?>assets/js/components/gmap/hs.map.js"></script>
<script src="<?=base_url()?>assets/js/components/hs.go-to.js"></script>

<script src="https://www.google.com/recaptcha/api.js?render=6LfkZrsUAAAAALj1Jm3qYgGt03RcQSnmz3K3ngff"></script>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSq9P5O_9Z025djqkKVY0uxtFSemASXD0&callback=initMap" type="text/javascript"></script>

<!-- JS Customization -->
<script src="<?=base_url()?>assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    // initialization of google map
    function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
    }

    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        $('#carouselCus1').slick('setOption', 'responsive', [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 7
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }], true);

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of custom select
        $.HSCore.components.HSSelect.init('.js-custom-select');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of chart pies
        var items = $.HSCore.components.HSChartPie.init('.js-pie');

        <?php if(isset($message)) { ?>
        new PNotify({
            title: 'Alarmas',
            text: '<?=$message?>',
            type: 'info'
        });
        <?php } ?>


        grecaptcha.ready(function() {
            grecaptcha.execute('6LfkZrsUAAAAALj1Jm3qYgGt03RcQSnmz3K3ngff', {action: 'login'}).then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });

    });

    $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
            duration: 700,
            easing: 'easeOutExpo'
        });

        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');
    });
</script>

<script src="<?=base_url()?>js/pnotify.custom.min.js"></script>

</body>
</html>