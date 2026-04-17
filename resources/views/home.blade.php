@extends('layouts.app')

@section('body_class', 'uni-body panel home-three text-gray-900 dark:bg-black dark:text-white')

@section('content')
    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">
        <!-- Header start -->
        <div id="hero_header" class="hero-header hero-seven-scene section panel overflow-hidden text-white pt-2">
            <div class="position-absolute top-0 start-0 end-0 w-100 h-850px lg:h-800px xl:h-screen bg-primary"></div>
            <div class="section-outer panel pt-9 lg:pt-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="panel section-inner d-flex flex-column items-center justify-center gap-4 text-white mt-8"
                        data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <img src="{{ asset('assets/images/common/hand.svg ') }}" alt="Icon"
                            class="hand d-inline-block position-absolute w-80px text-yellow-400 d-none lg:d-block z-999"
                            data-uc-svg>
                        <div class="panel"
                            data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                            <div class="row g-4 justify-between">
                                <div class="lg:col-7">
                                    <div class="panel">
                                        <h1 class="display-3 lg:display-2 m-0 text-inherit">Powering Next-Gen <span
                                                class="text-secondary">Industrial</span> Infrastructure <span
                                                class="d-inline-flex bg-contain pb-1 lg:pb-2"
                                                style="background-position: 50% 100%;"
                                                data-src="{{ asset('assets/images/common/line.svg ') }}" data-uc-img> for Africa</span></h1>
                                    </div>
                                </div>
                                <div class="lg:col-4">
                                    <div class="panel vstack gap-4">
                                        <p class="fs-4">We aren’t just building software; we are engineering the digital backbone that powers Africa’s essential industries</p>
                                        <a class='btn btn-lg bg-secondary text-primary text-none d-inline-flex w-fit'
                                            href='request-demo.html'>Explore our Ventures
                                            <i class="icon lg:icon-1 unicon unicon-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel mt-6 lg:mt-8 xl:mt-10"
                        data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 950;">
                        <img src="{{ asset('assets/images/common/cubes.svg ') }}" alt="Icon"
                            class="cubes d-inline-block position-absolute top-0 end-0 w-48px lg:w-80px text-primary d-block z-999"
                            data-uc-svg>
                        <img src="{{ asset('assets/images/common/cubes-02.svg ') }}" alt="Icon"
                            class="cubes d-inline-block position-absolute bottom-0 start-0 w-48px lg:w-80px text-white dark:text-black d-block z-999"
                            data-uc-svg>
                        <img src="{{ asset('assets/images/common/lampe.svg ') }}" alt="Icon"
                            class="lampe d-inline-block position-absolute w-36px lg:w-80px text-yellow-400 d-block z-999"
                            data-uc-svg>
                        <img src="{{ asset('assets/images/template/analytics-02.png ') }}" alt="Icon"
                            class="analytics d-inline-block position-absolute w-150px lg:w-300px text-primary d-block z-999">
                        <img src="{{ asset('assets/images/template/analytics-03.png ') }}" alt="Icon"
                            class="analytics d-inline-block position-absolute bottom-0 end-0 w-150px lg:w-300px text-primary d-block z-999">
                        <figure class="featured-image m-0 rounded ratio ratio-3x2 lg:ratio-21x9 rounded overflow-hidden ">
                            <img class="media-cover image " src="{{ asset('assets/images/template/hero-03.png ') }}" alt="image">
                        </figure>
                    </div>
                    <div class="panel vstack items-center gap-4 text-center mt-6"
                        data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <div class="brands panel">
                            <div
                                class="row child-cols-4 sm:child-cols items-center justify-center text-center g-2 sm:g-6 xl:g-9">
                                <div>
                                    <img class="text-primary dark:text-white" src="{{ asset('assets/images/brands/brand-06.svg ') }}"
                                        alt="Allianz" data-uc-svg>
                                </div>
                                <div>
                                    <img class="text-primary dark:text-white" src="{{ asset('assets/images/brands/brand-07.svg ') }}"
                                        alt="Laborghini" data-uc-svg>
                                </div>
                                <div>
                                    <img class="text-primary dark:text-white" src="{{ asset('assets/images/brands/brand-08.svg ') }}"
                                        alt="Hoya" data-uc-svg>
                                </div>
                                <div>
                                    <img class="text-primary dark:text-white" src="{{ asset('assets/images/brands/brand-09.svg ') }}"
                                        alt="Hisense" data-uc-svg>
                                </div>
                                <div>
                                    <img class="text-primary dark:text-white" src="{{ asset('assets/images/brands/brand-10.svg ') }}"
                                        alt="Amg" data-uc-svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header end -->

        <!-- Section start -->
        <div id="section_numbers" class="section-numbers section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div class="section-content">
                            <div class="row g-4 lg:g-6 xl:g-10 items-center justify-between">
                                <div class="xl:col-6">
                                    <div class="panel lg:w-650px">
                                        <h2 class="display-4 sm:display-2 m-0">Our impact on Insignia’s in numbers</h2>
                                    </div>
                                </div>
                                <div class="xl:col-6">
                                    <div class="panel">
                                        <p class="fs-4 sm:fs-3 xl:fs-4">Security is at the heart of our SaaS platform. With
                                            multi-factor authentication, encryption, and AI-driven protection, we keep your
                                            data safe—so you can focus on what matters most.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel mt-6 lg:mt-7 xl:mt-9">
                                <div class="row xl:child-cols-6 g-4 lg:g-6 xl:g-10 items-center col-match">
                                    <div>
                                        <div class="panel">
                                            <img class="dots rounded position-absolute z-0 text-primary dark:text-secondary d-none xl:d-block"
                                                src="{{ asset('assets/images/common/dots.svg ') }}" alt="Dots Insignia"
                                                style="right: -9%; bottom: -10%;" data-uc-svg>
                                            <figure
                                                class="featured-image m-0 rounded ratio ratio-1x1  rounded overflow-hidden z-99 ">
                                                <img class="media-cover image " src="{{ asset('assets/images/about/about-03.png ') }}"
                                                    alt="image">
                                            </figure>
                                            <img class="analytics-03 rounded position-absolute bottom-0 end-0 w-250px sm:w-350px lg:w-450px xl:w-350px z-99"
                                                src="{{ asset('assets/images/template/analytics-03.png ') }}" alt="Analytics Insignia">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row child-cols-6 g-4">
                                            <div>
                                                <div class="panel vstack gap-2">
                                                    <div class="panel">
                                                        <img class="position-absolute z-1 d-block text-secondary top-2"
                                                            src="{{ asset('assets/images/common/background.svg ') }}" alt="background"
                                                            data-uc-svg>
                                                        <h2 class="display-3 sm:display-2 m-0 z-1 position-relative">900K
                                                        </h2>
                                                    </div>
                                                    <div class="panel vstack gap-1 mt-1">
                                                        <h6 class="display-6 m-0">Customers</h6>
                                                        <p class="fs-5">We’ve helped build over 400 amazing projects.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="panel vstack gap-2">
                                                    <div class="panel mt-1">
                                                        <img class="position-absolute z-1 d-block text-secondary top-2"
                                                            src="{{ asset('assets/images/common/background.svg ') }}" alt="background"
                                                            data-uc-svg>
                                                        <h2 class="display-3 sm:display-2 m-0 z-1 position-relative">97%
                                                        </h2>
                                                    </div>
                                                    <div class="panel vstack gap-1 mt-1">
                                                        <h6 class="display-6 m-0">Plans approved</h6>
                                                        <p class="fs-5">Our customers have reported an average of ~600% ROI.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="panel vstack gap-2">
                                                    <div class="panel">
                                                        <img class="position-absolute z-1 d-block text-secondary top-2"
                                                            src="{{ asset('assets/images/common/background.svg ') }}" alt="background"
                                                            data-uc-svg>
                                                        <h2 class="display-3 sm:display-2 m-0 z-1 position-relative">85k
                                                        </h2>
                                                    </div>
                                                    <div class="panel vstack gap-1 mt-1">
                                                        <h6 class="display-6 m-0">Yearly growth</h6>
                                                        <p class="fs-5">Our free UI kit has been downloaded over 10k times.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="panel vstack gap-2">
                                                    <div class="panel">
                                                        <img class="position-absolute z-1 d-block text-secondary top-2"
                                                            src="{{ asset('assets/images/common/background.svg ') }}" alt="background"
                                                            data-uc-svg>
                                                        <h2 class="display-3 sm:display-2 m-0 z-1 position-relative">300B
                                                        </h2>
                                                    </div>
                                                    <div class="panel vstack gap-1 mt-1">
                                                        <h6 class="display-6 m-0">Current money managed</h6>
                                                        <p class="fs-5">We’re proud of our 5-star rating with over 200
                                                            reviews.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel mt-5">
                                            <a class='btn btn-md bg-primary dark:bg-white border-0 text-white dark:text-primary text-none d-inline-flex'
                                                href='page-about.html'>Learn more
                                                <i class="icon lg:icon-1 unicon unicon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Section start -->
        <div id="section_key_features"
            class="section-key-features section panel overflow-hidden bg-primary dark:bg-gray-900">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <img class="position-absolute d-none xl:d-block text-yellow-400 top-0 translate-middle"
                            src="{{ asset('assets/images/common/emogie.svg ') }}" alt="background" style="right: -5%;" data-uc-svg>
                        <div
                            class="panel vstack items-center gap-2 xl:gap-3 mb-4 sm:mb-8 xl:mb-9 sm:max-w-600px xl:max-w-800px mx-auto text-center">
                            <h2 class="display-4 sm:display-3 xl:display-2 m-0 text-white">The modern <span
                                    class="text-secondary">key features </span>for success</h2>
                        </div>
                    </div>
                    <div class="section-content panel">
                        <div class="row child-cols-12 sm:child-cols-6 xl:child-cols-4 col-match justify-center g-2 lg:g-4"
                            data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 400});">
                            <div>
                                <div
                                    class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                    <div class="hstack justify-start gap-2">
                                        <div class="panel w-48px h-48px cstack bg-primary rounded">
                                            <img class="icon w-32px h-32px text-secondary"
                                                src="{{ asset('assets/images/icons/machine-learning.svg ') }}" alt="Icon Insignia">
                                        </div>
                                        <h3 class="title h5 xl:h4 m-0 text-inherit">AI Automation</h3>
                                    </div>
                                    <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                    <a class='position-cover' href='page-features.html'></a>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                    <div class="hstack justify-start gap-2">
                                        <div class="panel w-48px h-48px cstack bg-primary rounded">
                                            <img class="icon w-32px h-32px text-secondary"
                                                src="{{ asset('assets/images/icons/chart-notification.svg ') }}" alt="Icon Insignia">
                                        </div>
                                        <h3 class="title h5 xl:h4 m-0 text-inherit">Live Analytics</h3>
                                    </div>
                                    <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                    <a class='position-cover' href='page-features.html'></a>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                    <div class="hstack justify-start gap-2">
                                        <div class="panel w-48px h-48px cstack bg-primary rounded">
                                            <img class="icon w-32px h-32px text-secondary"
                                                src="{{ asset('assets/images/icons/pen.svg ') }}" alt="Icon Insignia">
                                        </div>
                                        <h3 class="title h5 xl:h4 m-0 text-inherit">Custom Workflows</h3>
                                    </div>
                                    <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                    <a class='position-cover' href='page-features.html'></a>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                    <div class="hstack justify-start gap-2">
                                        <div class="panel w-48px h-48px cstack bg-primary rounded">
                                            <img class="icon w-32px h-32px text-secondary"
                                                src="{{ asset('assets/images/icons/layer.svg ') }}" alt="Icon Insignia">
                                        </div>
                                        <h3 class="title h5 xl:h4 m-0 text-inherit">App Integrations</h3>
                                    </div>
                                    <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                    <a class='position-cover' href='page-features.html'></a>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                    <div class="hstack justify-start gap-2">
                                        <div class="panel w-48px h-48px cstack bg-primary rounded">
                                            <img class="icon w-32px h-32px text-secondary"
                                                src="{{ asset('assets/images/icons/finger-print.svg ') }}" alt="Icon Insignia">
                                        </div>
                                        <h3 class="title h5 xl:h4 m-0 text-inherit">Secure Access</h3>
                                    </div>
                                    <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                    <a class='position-cover' href='page-features.html'></a>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                    <div class="hstack justify-start gap-2">
                                        <div class="panel w-48px h-48px cstack bg-primary rounded">
                                            <img class="icon w-32px h-32px text-secondary"
                                                src="{{ asset('assets/images/icons/model-alt.svg ') }}" alt="Icon Insignia">
                                        </div>
                                        <h3 class="title h5 xl:h4 m-0 text-inherit">Role Permissions</h3>
                                    </div>
                                    <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                    <a class='position-cover' href='page-features.html'></a>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                    <div class="hstack justify-start gap-2">
                                        <div class="panel w-48px h-48px cstack bg-primary rounded">
                                            <img class="icon w-32px h-32px text-secondary"
                                                src="{{ asset('assets/images/icons/apps-add.svg ') }}" alt="Icon Insignia">
                                        </div>
                                        <h3 class="title h5 xl:h4 m-0 text-inherit">Scalable Plans</h3>
                                    </div>
                                    <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                    <a class='position-cover' href='page-features.html'></a>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                    <div class="hstack justify-start gap-2">
                                        <div class="panel w-48px h-48px cstack bg-primary rounded">
                                            <img class="icon w-32px h-32px text-secondary"
                                                src="{{ asset('assets/images/icons/task.svg ') }}" alt="Icon Insignia">
                                        </div>
                                        <h3 class="title h5 xl:h4 m-0 text-inherit">Smart Reports</h3>
                                    </div>
                                    <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                    <a class='position-cover' href='page-features.html'></a>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                    <div class="hstack justify-start gap-2">
                                        <div class="panel w-48px h-48px cstack bg-primary rounded">
                                            <img class="icon w-32px h-32px text-secondary"
                                                src="{{ asset('assets/images/icons/users.svg ') }}" alt="Icon Insignia">
                                        </div>
                                        <h3 class="title h5 xl:h4 m-0 text-inherit">Dedicated Support</h3>
                                    </div>
                                    <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                    <a class='position-cover' href='page-features.html'></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Section start -->
        <div id="section_about" class="section-about section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div class="section-content">
                            <div class="row xl:child-cols-6 g-6 items-center col-match">
                                <div>
                                    <div class="panel vstack gap-4">
                                        <div class="panel vstack gap-3">
                                            <h1 class="display-4 sm:display-3 xl:display-2 m-0">Insignia: power your
                                                creative freedom</h1>
                                            <p class="fs-4">Atlantic empowers your creativity—break boundaries, innovate
                                                freely, and bring bold ideas to life effortlessly.</p>
                                        </div>
                                        <div class="panel">
                                            <ul class="list nav-y gap-3 text-start">
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-4 fw-light">Break boundaries with bold
                                                        creativity.</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-4 fw-light">Innovate freely, bring ideas alive.</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-4 fw-light">Atlantic empowers effortless creative
                                                        flow.</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-4 fw-light">Advanced Security Protocols</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-4 fw-light">Real-Time Performance Monitoring</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel">
                                            <a class='btn btn-md bg-primary text-white dark:bg-white dark:text-primary border-0 text-none d-inline-flex'
                                                href='page-about.html'>See details
                                                <i class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel">
                                        <div class="row child-cols-6 g-2 sm:g-4 col-match">
                                            <div>
                                                <div class="panel">
                                                    <figure
                                                        class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden h-100 ">
                                                        <img class="media-cover image "
                                                            src="{{ asset('assets/images/about/about-04.png ') }}" alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="row child-cols-12 g-2 sm:g-4">
                                                    <div>
                                                        <div class="panel">
                                                            <figure
                                                                class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden ">
                                                                <img class="media-cover image "
                                                                    src="{{ asset('assets/images/about/about-05.png ') }}" alt="image">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="panel">
                                                            <figure
                                                                class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden ">
                                                                <img class="media-cover image "
                                                                    src="{{ asset('assets/images/about/about-06.png ') }}" alt="image">
                                                            </figure>
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
                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Section start -->
        <div id="section_integrations" class="section-integrations section panel overflow-hidden">
            <div class="section-outer panel pb-6 lg:pb-8 xl:pb-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div
                            class="panel vstack items-center gap-2 xl:gap-3 mb-4 sm:mb-8 xl:mb-9 sm:max-w-600px xl:max-w-800px mx-auto text-center">
                            <h2 class="display-4 sm:display-3 xl:display-2 m-0">We’re a great fit, and we add some more</h2>
                        </div>
                    </div>
                    <div class="section-content panel text-center">
                        <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 g-6 sm:gx-3 sm:gy-6 xl:gx-4 xl:gy-8"
                            data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 400});">
                            <div>
                                <div class="integrations-item panel vstack justify-between gap-3">
                                    <div>
                                        <img class="image w-48px h-48px"
                                            src="{{ asset('assets/images/integrations/tool-procreate.svg ') }}" alt="brand logo">
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-2">
                                            <div class="panel vstack gap-2">
                                                <h5 class="display-5 m-0">Procreate integration</h5>
                                                <p class="fs-5 xl:fs-4 text-gray-500 dark:text-gray-100">Work faster and
                                                    smarter by integrating directly with Procreate, right in the app.</p>
                                            </div>
                                            <a class='uc-link fs-6 xl:fs-5 fw-bold hstack gap-1 sm:mt-1 mx-auto dark:text-secondary'
                                                href='page-integrations.html'>
                                                <span>View integration</span>
                                                <i class="position-relative icon unicon-arrow-right fw-bold"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="integrations-item panel vstack justify-between gap-3">
                                    <div>
                                        <img class="image w-48px h-48px" src="{{ asset('assets/images/integrations/tool-slack.svg ') }}"
                                            alt="brand logo">
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-2">
                                            <div class="panel vstack gap-2">
                                                <h5 class="display-5 m-0">Slack integration</h5>
                                                <p class="fs-5 xl:fs-4 text-gray-500 dark:text-gray-100">Work faster and
                                                    smarter by integrating directly with Slack, right in the app.</p>
                                            </div>
                                            <a class='uc-link fs-6 xl:fs-5 fw-bold hstack gap-1 sm:mt-1 mx-auto dark:text-secondary'
                                                href='page-integrations.html'>
                                                <span>View integration</span>
                                                <i class="position-relative icon unicon-arrow-right fw-bold"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="integrations-item panel vstack justify-between gap-3">
                                    <div>
                                        <img class="image w-48px h-48px" src="{{ asset('assets/images/integrations/tool-figma.svg ') }}"
                                            alt="brand logo">
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-2">
                                            <div class="panel vstack gap-2">
                                                <h5 class="display-5 m-0">Figma integration</h5>
                                                <p class="fs-5 xl:fs-4 text-gray-500 dark:text-gray-100">Work faster and
                                                    smarter by integrating directly with Figma.</p>
                                            </div>
                                            <a class='uc-link fs-6 xl:fs-5 fw-bold hstack gap-1 sm:mt-1 mx-auto dark:text-secondary'
                                                href='page-integrations.html'>
                                                <span>View integration</span>
                                                <i class="position-relative icon unicon-arrow-right fw-bold"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="integrations-item panel vstack justify-between gap-3">
                                    <div>
                                        <img class="image w-48px h-48px"
                                            src="{{ asset('assets/images/integrations/tool-invision.svg ') }}" alt="brand logo">
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-2">
                                            <div class="panel vstack gap-2">
                                                <h5 class="display-5 m-0">Invision integration</h5>
                                                <p class="fs-5 xl:fs-4 text-gray-500 dark:text-gray-100">Work faster and
                                                    smarter by integrating directly with Invision, right in the app.</p>
                                            </div>
                                            <a class='uc-link fs-6 xl:fs-5 fw-bold hstack gap-1 sm:mt-1 mx-auto dark:text-secondary'
                                                href='page-integrations.html'>
                                                <span>View integration</span>
                                                <i class="position-relative icon unicon-arrow-right fw-bold"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="integrations-item panel vstack justify-between gap-3">
                                    <div>
                                        <img class="image w-48px h-48px"
                                            src="{{ asset('assets/images/integrations/tool-notion-blue.svg ') }}" alt="brand logo">
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-2">
                                            <div class="panel vstack gap-2">
                                                <h5 class="display-5 m-0">Notion integration</h5>
                                                <p class="fs-5 xl:fs-4 text-gray-500 dark:text-gray-100">Work faster and
                                                    smarter by integrating directly with Notion, right in the app.</p>
                                            </div>
                                            <a class='uc-link fs-6 xl:fs-5 fw-bold hstack gap-1 sm:mt-1 mx-auto dark:text-secondary'
                                                href='page-integrations.html'>
                                                <span>View integration</span>
                                                <i class="position-relative icon unicon-arrow-right fw-bold"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="integrations-item panel vstack justify-between gap-3">
                                    <div>
                                        <img class="image w-48px h-48px" src="{{ asset('assets/images/integrations/tool-sketch.svg ') }}"
                                            alt="brand logo">
                                    </div>
                                    <div class="panel">
                                        <div class="vstack gap-2">
                                            <div class="panel vstack gap-2">
                                                <h5 class="display-5 m-0">Sketch integration</h5>
                                                <p class="fs-5 xl:fs-4 text-gray-500 dark:text-gray-100">Work faster and
                                                    smarter by integrating directly with Sketch, right in the app.</p>
                                            </div>
                                            <a class='uc-link fs-6 xl:fs-5 fw-bold hstack gap-1 sm:mt-1 mx-auto dark:text-secondary'
                                                href='page-integrations.html'>
                                                <span>View integration</span>
                                                <i class="position-relative icon unicon-arrow-right fw-bold"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Section start -->
        <div id="section_lightbox" class="section-lightbox section panel overflow-hidden bg-primary-25 dark:bg-gray-900">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-content panel"
                        data-anime="translateY: [24, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 200;">
                        <div class="panel" data-uc-lightbox="video-autoplay: true;">
                            <figure class="featured-image m-0 rounded ratio ratio-16x9 lg:rounded-2 overflow-hidden ">
                                <img class="media-cover image " src="{{ asset('assets/images/template/home-03-cover.webp ') }}"
                                    alt="Insignia">
                            </figure>
                            <a class="cstack text-none position-absolute top-50 start-50 translate-middle bg-secondary text-primary w-64px h-64px sm:w-80px sm:h-80px rounded-circle shadow-md"
                                href="https://unistudio.co/html/insignia/assets/images/media/insignia-home-3.webm ') }}"
                                data-caption="Easy numbers for insignia team." data-attrs="width: 640; height: 480;">
                                <i class="icon icon-2 sm:icon-3 unicon-play-filled-alt"></i>
                            </a>
                        </div>
                        <div class="panel text-center mt-7"
                            data-anime="onview:-100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 200;">
                            <div class="row child-cols-6 sm:child-cols-3 g-3 sm:g-5">
                                <div>
                                    <div class="panel">
                                        <h3 class="display-3 lg:display-1 mb-narrow sm:mb-1">2010</h3>
                                        <span class="fs-6 sm:fs-5 xl:fs-4 text-gray-700 dark:text-white">Founded year</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel">
                                        <h3 class="display-3 lg:display-1 mb-narrow sm:mb-1">10%</h3>
                                        <span class="fs-6 sm:fs-5 xl:fs-4 text-gray-700 dark:text-white">Return on
                                            investment</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel">
                                        <h3 class="display-3 lg:display-1 mb-narrow sm:mb-1">2,1k</h3>
                                        <span class="fs-6 sm:fs-5 xl:fs-4 text-gray-700 dark:text-white">Assets on
                                            company</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel">
                                        <h3 class="display-3 lg:display-1 mb-narrow sm:mb-1">100+</h3>
                                        <span class="fs-6 sm:fs-5 xl:fs-4 text-gray-700 dark:text-white">Top in world</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel vstack gap-4 sm:gap-3 mt-7 lg:mt-9 text-center"
                            data-anime="onview:-100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 200;">
                            <div class="panel hstack gap-1 sm:gap-2 justify-center">
                                <a class='btn btn-md bg-primary text-white dark:bg-white dark:text-primary border-0 text-none d-inline-flex'
                                    href='sign-up.html'>Try it now
                                    <i class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                </a>
                                <a class='btn btn-md border border-primary text-primary text-none d-inline-flex dark:text-white dark:border-white'
                                    href='request-demo.html'>Book a free demo
                                    <i class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                </a>
                            </div>
                            <p class="fs-5">No credit card required, 30-day money back guarantee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Section start -->
        <div id="section_clients" class="section-clients section panel overflow-hidden swiper-parent">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container max-w-2xl">
                    <div class="section-inner panel"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div class="panel vstack sm:hstack justify-between sm:items-end gap-4">
                            <div class="panel sm:w-500px md:w-400px lg:w-700px">
                                <h1 class="display-4 sm:display-3 md:display-4 lg:display-3 xl:display-2 m-0">Clients love
                                    our seamless company</h1>
                            </div>
                            <div class="panel hstack items-end gap-1 xl:gap-2 sm:d-flex"
                                data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 800;">
                                <a href="index-3.html#"
                                    class="swiper-nav swiper-nav-prev btn bg-primary text-white dark:bg-secondary dark:text-primary w-48px h-48px xl:w-56px xl:h-56px rounded">
                                    <span class="icon-2 unicon-arrow-left"></span>
                                </a>
                                <a href="index-3.html#"
                                    class="swiper-nav swiper-nav-next btn bg-primary text-white dark:bg-secondary dark:text-primary w-48px h-48px xl:w-56px xl:h-56px rounded">
                                    <span class="icon-2 unicon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="section-content panel expand-container mt-6 lg:mt-7 xl:mt-9 ms-0"
                        data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 800;">
                        <div class="swiper"
                            data-uc-swiper="items: 1.7; gap: 16; loop: true; next: .swiper-nav-next; prev: .swiper-nav-prev;"
                            data-uc-swiper-s="items: 2.2; gap: 24;" data-uc-swiper-m="items: 2.22; gap: 24;"
                            data-uc-swiper-l="items: 3.20; gap: 32;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="panel bg-primary-25 dark:bg-gray-900 p-2 sm:p-5 rounded items-center">
                                        <div class="row g-5 col-match">
                                            <div class="sm:col-7 order-2 sm:order-1">
                                                <div class="panel vstack gap-3 sm:gap-4">
                                                    <img class="text-yellow-400 w-150px"
                                                        src="{{ asset('assets/images/common/stars-rating.svg ') }}" alt="Rating Insignia"
                                                        data-uc-svg>
                                                    <p class="fs-5">Insignia customer service is exceptional. It's rare to
                                                        find someone as dedicated as he is to ensuring customer
                                                        satisfaction.</p>
                                                    <div class="panel vstack gap-1">
                                                        <h6 class="display-6 m-0">Lucas Rivera</h6>
                                                        <span class="fs-6">Senior Project Manager at TechNova</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col order-1 sm:order-2">
                                                <div class="panel">
                                                    <figure
                                                        class="featured-image m-0 rounded ratio ratio-3x2 sm:ratio-16x9 rounded overflow-hidden h-100 ">
                                                        <img class="media-cover image "
                                                            src="{{ asset('assets/images/avatars/01.jpg ') }}" alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="panel bg-primary-25 dark:bg-gray-900 p-2 sm:p-5 rounded items-center">
                                        <div class="row g-5 col-match">
                                            <div class="sm:col-7 order-2 sm:order-1">
                                                <div class="panel vstack gap-3 sm:gap-4">
                                                    <img class="text-yellow-400 w-150px"
                                                        src="{{ asset('assets/images/common/stars-rating.svg ') }}" alt="Rating Insignia"
                                                        data-uc-svg>
                                                    <p class="fs-5">Working with Insignia has been a pleasure. Their
                                                        attention to detail and quick responses show how much they care
                                                        about their clients.</p>
                                                    <div class="panel vstack gap-1">
                                                        <h6 class="display-6 m-0">Watson Rodriguez</h6>
                                                        <span class="fs-6">Head of Growth - At Nexify</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col order-1 sm:order-2">
                                                <div class="panel">
                                                    <figure
                                                        class="featured-image m-0 rounded ratio ratio-3x2 sm:ratio-16x9 rounded overflow-hidden h-100 ">
                                                        <img class="media-cover image "
                                                            src="{{ asset('assets/images/avatars/02.jpg ') }}" alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="panel bg-primary-25 dark:bg-gray-900 p-2 sm:p-5 rounded items-center">
                                        <div class="row g-5 col-match">
                                            <div class="sm:col-7 order-2 sm:order-1">
                                                <div class="panel vstack gap-3 sm:gap-4">
                                                    <img class="text-yellow-400 w-150px"
                                                        src="{{ asset('assets/images/common/stars-rating.svg ') }}" alt="Rating Insignia"
                                                        data-uc-svg>
                                                    <p class="fs-5">Insignia’s team goes above and beyond. Their
                                                        professionalism and commitment to solving issues quickly make them
                                                        stand out.</p>
                                                    <div class="panel vstack gap-1">
                                                        <h6 class="display-6 m-0">Ethan Collins</h6>
                                                        <span class="fs-6">Marketing Director at Finexa</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col order-1 sm:order-2">
                                                <div class="panel">
                                                    <figure
                                                        class="featured-image m-0 rounded ratio ratio-3x2 sm:ratio-16x9 rounded overflow-hidden h-100 ">
                                                        <img class="media-cover image "
                                                            src="{{ asset('assets/images/avatars/03.jpg ') }}" alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="panel bg-primary-25 dark:bg-gray-900 p-2 sm:p-5 rounded items-center">
                                        <div class="row g-5 col-match">
                                            <div class="sm:col-7 order-2 sm:order-1">
                                                <div class="panel vstack gap-3 sm:gap-4">
                                                    <img class="text-yellow-400 w-150px"
                                                        src="{{ asset('assets/images/common/stars-rating.svg ') }}" alt="Rating Insignia"
                                                        data-uc-svg>
                                                    <p class="fs-5">I’m impressed by Insignia’s dedication. They truly
                                                        listen to client needs and always deliver solutions that exceed
                                                        expectations.</p>
                                                    <div class="panel vstack gap-1">
                                                        <h6 class="display-6 m-0">Noah Anderson</h6>
                                                        <span class="fs-6">Growth Strategist at AlphaCore</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col order-1 sm:order-2">
                                                <div class="panel">
                                                    <figure
                                                        class="featured-image m-0 rounded ratio ratio-3x2 sm:rati-16x9 rounded overflow-hidden h-100 ">
                                                        <img class="media-cover image "
                                                            src="{{ asset('assets/images/avatars/08.jpg ') }}" alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="panel bg-primary-25 dark:bg-gray-900 p-2 sm:p-5 rounded items-center">
                                        <div class="row g-5 col-match">
                                            <div class="sm:col-7 order-2 sm:order-1">
                                                <div class="panel vstack gap-3 sm:gap-4">
                                                    <img class="text-yellow-400 w-150px"
                                                        src="{{ asset('assets/images/common/stars-rating.svg ') }}" alt="Rating Insignia"
                                                        data-uc-svg>
                                                    <p class="fs-5">The Insignia support team is outstanding. They’re
                                                        responsive, knowledgeable, and genuinely committed to helping
                                                        customers.</p>
                                                    <div class="panel vstack gap-1">
                                                        <h6 class="display-6 m-0">Mason Lee</h6>
                                                        <span class="fs-6">Product Manager at CloudSphere</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col order-1 sm:order-2">
                                                <div class="panel">
                                                    <figure
                                                        class="featured-image m-0 rounded ratio ratio-3x2 sm:ratio-16x9 rounded overflow-hidden h-100 ">
                                                        <img class="media-cover image "
                                                            src="{{ asset('assets/images/avatars/06.jpg ') }}" alt="image">
                                                    </figure>
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
        </div>

        <!-- Section End -->

        <!-- Section start -->
        <div id="section_pricing" class="section-pricing section panel overflow-hidden">
            <div class="section-outer panel">
                <div class="container max-w-2xl">
                    <div class="section-inner panel"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div class="panel">
                            <div class="row g-6 xl:g-8 items-center"
                                data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                <div class="xl:col-4">
                                    <div class="panel vstack gap-4 xl:gap-5">
                                        <div class="panel vstack gap-2 xl:gap-3">
                                            <h3 class="display-4 sm:display-3 md:display-4 lg:display-3 xl:display-2 m-0">
                                                How much it will cost you? </h3>
                                            <p class="fs-4 sm:fs-3 xl:fs-4">Each package includes personalized consultation
                                                and revisions to guarantee your satisfaction.</p>
                                        </div>
                                        <ul class="uc-switcher-nav nav-x gap-0 panel fs-7 lg:fs-6 fw-semibold rounded border border-primary dark:border-white w-fit p-narrow"
                                            data-uc-switcher="connect: .pricing-switcher;">
                                            <li><a href="index-3.html#"
                                                    class="text-none w-128px cstack p-1 rounded">Monthly</a></li>
                                            <li><a href="index-3.html#"
                                                    class="text-none w-128px cstack p-1 rounded">Yearly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="xl:col">
                                    <div class="panel uc-switcher pricing-switcher">
                                        <div class="panel">
                                            <div class="row g-2 xl:g-3 col-match">
                                                <div>
                                                    <div class="pricing-item panel rounded border p-4 ">
                                                        <div class="row gy-2 sm:gx-6 sep-y items-center" data-uc-grid>
                                                            <div class="sm:col-3">
                                                                <div class="panel vstack gap-2 sm:text-center">
                                                                    <h4 class="display-4 sm:display-5 m-0 text-inherit">Team
                                                                        plan</h4>
                                                                    <h4 class="display-4 sm:display-5 m-0 text-inherit">
                                                                        99$<span class="fs-4 m-0 pb-narrow">/ mo</span></h4>
                                                                </div>
                                                            </div>
                                                            <div class="sm:col">
                                                                <div class="panel mt-2 sm:mt-0">
                                                                    <div class="vstack sm:hstack gap-5 sm:gap-3">
                                                                        <div
                                                                            class="panel vstack gap-2 border-top sm:border-top-0 pt-5 sm:pt-0">
                                                                            <ul class="nav-y gap-2 fs-5 lg:fs-6 xl:fs-5">
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-primary text-white dark:bg-white dark:text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">Access to all
                                                                                        basic features</span>
                                                                                </li>
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-primary text-white dark:bg-white dark:text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">Basic reporting
                                                                                        and analytics</span>
                                                                                </li>
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-primary text-white dark:bg-white dark:text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">Up to 10
                                                                                        individual users</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel lg:vstack gap-2 items-end">
                                                                            <div
                                                                                class="panel hstack md:vstack gap-2 xl:items-center">
                                                                                <a class='btn btn-md rounded w-fit text-white bg-primary dark:bg-secondary dark:text-primary'
                                                                                    href='sign-up.html'>Sign up now
                                                                                    <i
                                                                                        class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                                                                </a>
                                                                                <a class='fs-5 xl:fs-3 w-fit'
                                                                                    href='page-pricing.html'>
                                                                                    <span>Learn more</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div
                                                        class="pricing-item panel rounded border p-4 bg-primary text-white border-primary">
                                                        <div class="row gy-2 sm:gx-6 sep-y items-center" data-uc-grid>
                                                            <div class="sm:col-3">
                                                                <div class="panel vstack gap-2 sm:text-center">
                                                                    <h4 class="display-4 sm:display-5 m-0 text-inherit">
                                                                        Agency plan</h4>
                                                                    <h4 class="display-4 sm:display-5 m-0 text-inherit">
                                                                        199$<span class="fs-4 m-0 pb-narrow">/ mo</span>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="sm:col">
                                                                <div class="panel mt-2 sm:mt-0">
                                                                    <div class="vstack sm:hstack gap-5 sm:gap-3">
                                                                        <div
                                                                            class="panel vstack gap-2 border-top sm:border-top-0 pt-5 sm:pt-0">
                                                                            <ul class="nav-y gap-2 fs-5 lg:fs-6 xl:fs-5">
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-white text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">200+
                                                                                        integrations</span>
                                                                                </li>
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-white text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">Advanced
                                                                                        reporting and analytics</span>
                                                                                </li>
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-white text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">Up to 20
                                                                                        individual users</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel lg:vstack gap-2 items-end">
                                                                            <div
                                                                                class="panel hstack md:vstack gap-2 xl:items-center">
                                                                                <a class='btn btn-md rounded w-fit text-primary bg-white'
                                                                                    href='sign-up.html'>Sign up now
                                                                                    <i
                                                                                        class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                                                                </a>
                                                                                <a class='fs-5 xl:fs-3 w-fit'
                                                                                    href='page-pricing.html'>
                                                                                    <span>Learn more</span>
                                                                                </a>
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
                                        <div class="panel">
                                            <div class="row g-2 xl:g-3 col-match">
                                                <div>
                                                    <div class="pricing-item panel rounded border p-4 ">
                                                        <div class="row gy-2 sm:gx-6 sep-y items-center" data-uc-grid>
                                                            <div class="sm:col-3">
                                                                <div class="panel vstack gap-2 sm:text-center">
                                                                    <h4 class="display-4 sm:display-5 m-0 text-inherit">Team
                                                                        plan</h4>
                                                                    <h4 class="display-4 sm:display-5 m-0 text-inherit">
                                                                        299$<span class="fs-4 m-0 pb-narrow">/ mo</span>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="sm:col">
                                                                <div class="panel mt-2 sm:mt-0">
                                                                    <div class="vstack sm:hstack gap-5 sm:gap-3">
                                                                        <div
                                                                            class="panel vstack gap-2 border-top sm:border-top-0 pt-5 sm:pt-0">
                                                                            <ul class="nav-y gap-2 fs-5 lg:fs-6 xl:fs-5">
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-primary text-white rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">Access to all
                                                                                        basic features</span>
                                                                                </li>
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-primary text-white rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">Basic reporting
                                                                                        and analytics</span>
                                                                                </li>
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-primary text-white rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">Up to 10
                                                                                        individual users</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel lg:vstack gap-2 items-end">
                                                                            <div
                                                                                class="panel hstack md:vstack gap-2 xl:items-center">
                                                                                <a class='btn btn-md rounded w-fit text-white btn-primary'
                                                                                    href='sign-up.html'>Sign up now
                                                                                    <i
                                                                                        class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                                                                </a>
                                                                                <a class='fs-5 xl:fs-3 w-fit'
                                                                                    href='page-pricing.html'>
                                                                                    <span>Learn more</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div
                                                        class="pricing-item panel rounded border p-4 bg-primary text-white border-primary">
                                                        <div class="row gy-2 sm:gx-6 sep-y items-center" data-uc-grid>
                                                            <div class="sm:col-3">
                                                                <div class="panel vstack gap-2 sm:text-center">
                                                                    <h4 class="display-4 sm:display-5 m-0 text-inherit">
                                                                        Agency plan</h4>
                                                                    <h4 class="display-4 sm:display-5 m-0 text-inherit">
                                                                        499$<span class="fs-4 m-0 pb-narrow">/ mo</span>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="sm:col">
                                                                <div class="panel mt-2 sm:mt-0">
                                                                    <div class="vstack sm:hstack gap-5 sm:gap-3">
                                                                        <div
                                                                            class="panel vstack gap-2 border-top sm:border-top-0 pt-5 sm:pt-0">
                                                                            <ul class="nav-y gap-2 fs-5 lg:fs-6 xl:fs-5">
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-white text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">200+
                                                                                        integrations</span>
                                                                                </li>
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-white text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">Advanced
                                                                                        reporting and analytics</span>
                                                                                </li>
                                                                                <li class="hstack items-start gap-2">
                                                                                    <i
                                                                                        class="cstack w-24px h-24px  bg-white text-primary rounded-circle unicon-checkmark fw-bold"></i>
                                                                                    <span class="d-inline">Up to 20
                                                                                        individual users</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="panel lg:vstack gap-2 items-end">
                                                                            <div
                                                                                class="panel hstack md:vstack gap-2 xl:items-center">
                                                                                <a class='btn btn-md rounded w-fit text-primary bg-white'
                                                                                    href='sign-up.html'>Sign up now
                                                                                    <i
                                                                                        class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                                                                </a>
                                                                                <a class='fs-5 xl:fs-3 w-fit'
                                                                                    href='page-pricing.html'>
                                                                                    <span>Learn more</span>
                                                                                </a>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section End -->

        <!-- Section start -->
        <div id="section_faq" class="section-faq section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div class="panel vstack gap-2 sm:w-500px lg:w-900px m-auto text-center">
                            <h1 class="display-3 lg:display-2 m-0">Frequently asked questions</h1>
                            <p class="fs-5 lg:fs-4">Everything you need to know about Insignia and our software.</p>
                        </div>
                    </div>
                    <div class="section-content panel mt-6 lg:mt-7 xl:mt-9"
                        data-anime="onview:-100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 400;">
                        <div class="row child-cols-12 g-3 xl:g-4 col-match">
                            <div class="col sm:col-7 md:col-12 lg:col">
                                <ul class="gap-2 uc-accordion mb-0" data-uc-accordion="collapsible: false">
                                    <li class="panel p-2 md:p-4 bg-primary-25 dark:bg-gray-900 rounded">
                                        <a class="uc-accordion-title h6 md:h5 lg:display-6 fw-bold pe-4"
                                            href="index-3.html#" id="uc-accordion-9" role="button"
                                            aria-controls="uc-accordion-10" aria-expanded="false" aria-disabled="false">1.
                                            How can Insignia’s App benefit my team ?</a>
                                        <div class="uc-accordion-content" hidden="" id="uc-accordion-10" role="region"
                                            aria-labelledby="uc-accordion-9">
                                            <p>Insignia’s App helps your team work smarter by streamlining communication,
                                                automating daily tasks, and providing real-time insights. This allows your
                                                team to save time, reduce errors, and stay more focused on achieving goals.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="panel p-2 md:p-4 bg-primary-25 dark:bg-gray-900 rounded">
                                        <a class="uc-accordion-title h6 md:h5 lg:display-6 fw-bold pe-4"
                                            href="index-3.html#" id="uc-accordion-11" role="button"
                                            aria-controls="uc-accordion-12" aria-expanded="false" aria-disabled="false">2.
                                            What is your data security and compliance protocol ?</a>
                                        <div class="uc-accordion-content" hidden="" id="uc-accordion-12" role="region"
                                            aria-labelledby="uc-accordion-11">
                                            <p>We prioritize data protection with end-to-end encryption, strict access
                                                controls, and regular security audits. Insignia also complies with leading
                                                regulations such as GDPR to ensure your information remains safe and
                                                private.</p>
                                        </div>
                                    </li>
                                    <li class="panel p-2 md:p-4 bg-primary-25 dark:bg-gray-900 rounded">
                                        <a class="uc-accordion-title h6 md:h5 lg:display-6 fw-bold pe-4"
                                            href="index-3.html#" id="uc-accordion-13" role="button"
                                            aria-controls="uc-accordion-14" aria-expanded="false" aria-disabled="false">3.
                                            How do you handle customer support and onboarding?</a>
                                        <div class="uc-accordion-content" hidden="" id="uc-accordion-14" role="region"
                                            aria-labelledby="uc-accordion-13">
                                            <p>Our onboarding process is designed to be quick and seamless, with
                                                step-by-step guidance to get you started. Plus, our support team is
                                                available 24/7 through email, chat, and phone to answer questions and
                                                resolve issues whenever needed</p>
                                        </div>
                                    </li>
                                    <li class="panel p-2 md:p-4 bg-primary-25 dark:bg-gray-900 rounded">
                                        <a class="uc-accordion-title h6 md:h5 lg:display-6 fw-bold pe-4"
                                            href="index-3.html#" id="uc-accordion-15" role="button"
                                            aria-controls="uc-accordion-16" aria-expanded="false" aria-disabled="false">5.
                                            What happens on data if i decide to cancel my subscription ?</a>
                                        <div class="uc-accordion-content" hidden="" id="uc-accordion-16" role="region"
                                            aria-labelledby="uc-accordion-15">
                                            <p>Yes, the platform is flexible and adaptable. You can customize dashboards,
                                                workflows, and integrations so the system works the way your team does,
                                                ensuring a smooth fit with your operations.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 sm:col-5 md:col-12 lg:col-4">
                                <div class="panel p-4 xl:p-6 rounded text-center bg-primary-25 dark:bg-gray-900 h-100">
                                    <div class="vstack items-center gap-3 xl:gap-5 h-100">
                                        <div class="h-100 vstack items-center justify-center gap-2">
                                            <i class="icon-4 xl:icon-5 unicon-chat text-primary dark:text-secondary"></i>
                                            <h3 class="display-6 xl:display-5 my-2">Do you have a different question?</h3>
                                            <p class="fs-6 xl:fs-5">Find quick answers to your questions in our FAQs.</p>
                                            <div>
                                                <a href="page-faq.html"
                                                    class="btn btn-md bg-primary text-white dark:bg-secondary dark:text-primary">
                                                    <span>Find your answers here</span>
                                                    <i class="icon-2 unicon-copy-file"></i>
                                                </a>
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

        <!-- Section End -->

        <!-- Section start -->
        <div id="section_blog" class="section-blog section panel overflow-hidden">
            <div class="section-outer panel pb-6 lg:pb-8 xl:pb-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div
                            class="panel vstack items-center gap-2 xl:gap-3 mb-4 sm:mb-8 xl:mb-9 sm:max-w-600px xl:max-w-800px mx-auto text-center">
                            <h2 class="display-4 sm:display-3 xl:display-2 m-0">Check out the blogs we have prepared for you
                            </h2>
                        </div>
                    </div>
                    <div class="section-content panel"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div class="row child-cols-12 sm:child-cols-4 md:child-cols-6 lg:child-cols-4 justify-center g-4 sm:g-2 lg:g-3 xl:g-4 col-match"
                            data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 700});">
                            <div>
                                <div
                                    class="blog-item panel vstack gap-3 sm:gap-2 lg:gap-3 p-2 rounded bg-primary-25 dark:bg-gray-900">
                                    <div class="panel">
                                        <figure
                                            class="featured-image m-0 rounded ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="{{ asset('assets/images/blog/img-01.jpg ') }}" alt="image">
                                        </figure>
                                        <a class='position-cover' href='blog-details.html'></a>
                                    </div>
                                    <div class="panel vstack items-start gap-2">
                                        <span
                                            class="py-narrow px-2 fw-semibold bg-primary rounded cstack text-white w-fit dark:bg-secondary dark:text-primary">Design</span>
                                        <h3 class="title h3 m-0">
                                            <a class='text-none' href='blog-details.html'>The Smart Buyer’s SaaS Guide</a>
                                        </h3>
                                        <p class="fs-7 sm:fs-6 xl:fs-5">Avoid overpaying and underperforming tools with
                                            data-driven selection strategies that work.</p>
                                        <a class='btn btn-text fs-4 sm:fs-6 xl:fs-5 border-bottom dark:border-white gap-1 mt-1 text-primary dark:text-white'
                                            href='blog-details.html'>
                                            <span>Read More</span>
                                            <i class="icon unicon-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="blog-item panel vstack gap-3 sm:gap-2 lg:gap-3 p-2 rounded bg-primary-25 dark:bg-gray-900">
                                    <div class="panel">
                                        <figure
                                            class="featured-image m-0 rounded ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="{{ asset('assets/images/blog/img-02.jpg ') }}" alt="image">
                                        </figure>
                                        <a class='position-cover' href='blog-details.html'></a>
                                    </div>
                                    <div class="panel vstack items-start gap-2">
                                        <span
                                            class="py-narrow px-2 fw-semibold bg-primary rounded cstack text-white w-fit dark:bg-secondary dark:text-primary">Analytics</span>
                                        <h3 class="title h3 m-0">
                                            <a class='text-none' href='blog-details.html'>No-Code Disrupts Traditional
                                                SaaS</a>
                                        </h3>
                                        <p class="fs-7 sm:fs-6 xl:fs-5">Democratizing software creation: How no-code
                                            platforms are rewriting the rules of enterprise tech.</p>
                                        <a class='btn btn-text fs-4 sm:fs-6 xl:fs-5 border-bottom dark:border-white gap-1 mt-1 text-primary dark:text-white'
                                            href='blog-details.html'>
                                            <span>Read More</span>
                                            <i class="icon unicon-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="blog-item panel vstack gap-3 sm:gap-2 lg:gap-3 p-2 rounded bg-primary-25 dark:bg-gray-900">
                                    <div class="panel">
                                        <figure
                                            class="featured-image m-0 rounded ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="{{ asset('assets/images/blog/img-03.jpg ') }}" alt="image">
                                        </figure>
                                        <a class='position-cover' href='blog-details.html'></a>
                                    </div>
                                    <div class="panel vstack items-start gap-2">
                                        <span
                                            class="py-narrow px-2 fw-semibold bg-primary rounded cstack text-white w-fit dark:bg-secondary dark:text-primary">Products</span>
                                        <h3 class="title h3 m-0">
                                            <a class='text-none' href='blog-details.html'>Collaboration Tools Get
                                                Smarter</a>
                                        </h3>
                                        <p class="fs-7 sm:fs-6 xl:fs-5">Context-aware assistants and smart notifications are
                                            transforming how teams communicate and execute projects.</p>
                                        <a class='btn btn-text fs-4 sm:fs-6 xl:fs-5 border-bottom dark:border-white gap-1 mt-1 text-primary dark:text-white'
                                            href='blog-details.html'>
                                            <span>Read More</span>
                                            <i class="icon unicon-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel mt-6 vstack items-center">
                            <a class='btn btn-md bg-primary text-white dark:bg-secondary dark:text-primary border-0 text-none d-inline-flex w-fit'
                                href='blog.html'>See more blogs
                                <i class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section end -->

        <!-- Cta Start -->
        <div id="section_cta" class="section-cta section panel">
            <div class="section-outer panel pb-6 lg:pb-8 xl:pb-10"
                data-anime="onview: -100; translateY: [24, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 200;">
                <div class="container max-w-2xl">
                    <div class="section-inner panel overflow-hidden rounded bg-primary p-5 lg:p-9 text-white h-100">
                        <div class="position-absolute top-0 start-0 w-64px sm:w-80px md:w-100px lg:w-150px xl:w-fit"><img
                                src="{{ asset('assets/images/common/rectangle-02.svg ') }}" alt="Rectangle Insignia"></div>
                        <div class="position-absolute bottom-0 end-0 w-64px sm:w-80px md:w-100px lg:w-150px xl:w-fit"><img
                                src="{{ asset('assets/images/common/rectangle-03.svg ') }}" alt="Rectangle Insignia"></div>
                        <div class="position-absolute sm:w-64px md:w-40px lg:w-64px d-none sm:d-block"
                            style="top: 12%; right: 12%;"><img src="{{ asset('assets/images/common/shape-02.svg ') }}"
                                alt="Shape Insignia"></div>
                        <div class="position-absolute w-100px md:w-56px lg:w-100px d-none sm:d-block"
                            style="left: 12%; bottom: 20%;"><img src="{{ asset('assets/images/common/shape-01.svg ') }}"
                                alt="Shape Insignia"></div>
                        <div class="hstack justify-center gap-0 mb-2">
                            <img src="{{ asset('assets/images/avatars/07.jpg ') }}" alt="Avatar-image"
                                class="w-56px h-56px md:w-48px md:h-48px lg:w-56px lg:h-56px rounded-circle border border-3 border-primary">
                            <img src="{{ asset('assets/images/avatars/08.jpg ') }}" alt="Avatar-image"
                                class="w-56px h-56px md:w-48px md:h-48px lg:w-56px lg:h-56px rounded-circle border border-3 border-primary ms-n2">
                            <img src="{{ asset('assets/images/avatars/09.jpg ') }}" alt="Avatar-image"
                                class="w-56px h-56px md:w-48px md:h-48px lg:w-56px lg:h-56px rounded-circle border border-3 border-primary d-none sm:d-block ms-n2">
                            <img src="{{ asset('assets/images/avatars/10.jpg ') }}" alt="Avatar-image"
                                class="w-56px h-56px md:w-48px md:h-48px lg:w-56px lg:h-56px rounded-circle border border-3 border-primary d-none sm:d-block ms-n2">
                            <span class="fs-6 ms-1 xl:ms-0">Over 1,5K happy clients</span>
                        </div>
                        <div class="panel vstack items-center gap-2 lg:gap-3 max-w-500px lg:max-w-900px mx-auto text-center z-99"
                            data-anime="onview:-100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: anime.stagger(100, {start: 200});">
                            <h2 class="display-5 sm:display-3 md:display-4 lg:display-2 m-0 text-white">Is your <span
                                    class="text-secondary">CRM</span> holding your sales team back? Get <span
                                    class="text-secondary">Insignia.</span></h2>
                            <p class="fs-6 sm:fs-4 text-white">Easily add new tasks with all the details you need.</p>
                            <div class="panel mt-2 vstack items-center">
                                <a class='btn btn-md bg-white text-primary border-0 text-none d-inline-flex w-fit'
                                    href='page-pricing.html'>Start a free trial
                                    <i class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cta End -->

    </div>
    <!-- Wrapper end -->
@endsection