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
                                            data-src="{{ asset('assets/images/common/line.svg ') }}" data-uc-img> for
                                            Africa</span></h1>
                                </div>
                            </div>
                            <div class="lg:col-4">
                                <div class="panel vstack gap-4">
                                    <p class="fs-4">We aren’t just building software; we are engineering the digital
                                        backbone that powers Africa’s essential industries</p>
                                    <a class='btn btn-lg bg-secondary text-primary text-none d-inline-flex w-fit'
                                        href="{{ url('/services') }}">Explore our Solutions
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
                        <img class="media-cover image " src="{{ asset('assets/images/template/hero-03.png ') }}"
                            alt="image">
                    </figure>
                </div>
                <div class="panel vstack items-center gap-4 text-center mt-6"
                    data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                    <div class="brands panel">
                        <div
                            class="row child-cols-4 sm:child-cols items-center justify-center text-center g-2 sm:g-6 xl:g-9">
                            <div>
                                <img class="text-primary dark:text-white"
                                    src="{{ asset('assets/images/brands/brand-01.svg ') }}" alt="Partner Institution" data-uc-svg>
                            </div>
                            <div>
                                <img class="text-primary dark:text-white"
                                    src="{{ asset('assets/images/brands/brand-07.svg ') }}" alt="Partner Institution"
                                    data-uc-svg>
                            </div>
                            <div>
                                <img class="text-primary dark:text-white"
                                    src="{{ asset('assets/images/brands/brand-08.svg ') }}" alt="Partner Institution" data-uc-svg>
                            </div>
                            <div>
                                <img class="text-primary dark:text-white"
                                    src="{{ asset('assets/images/brands/brand-09.svg ') }}" alt="Partner Institution" data-uc-svg>
                            </div>
                            <div>
                                <img class="text-primary dark:text-white"
                                    src="{{ asset('assets/images/brands/brand-10.svg ') }}" alt="Partner Institution" data-uc-svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header end -->

    <!-- Section start -->
    <div id="section_about" class="section-about section panel overflow-hidden">
        <div class="section-outer panel pt-6 lg:pt-8 xl:pt-10 pb-2 lg:pb-3 xl:pb-4">
            <div class="container sm:max-w-xl xl:max-w-2xl">
                <div class="section-inner panel"
                    data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                    <div class="section-content">
                        <div class="row xl:child-cols-6 g-6 items-center col-match">
                            <div>
                                <div class="panel vstack gap-4">
                                    <div class="panel vstack gap-3">
                                        <h1 class="display-4 sm:display-3 xl:display-2 m-0">Local Challenges. Global Standards.</h1>
                                        <p class="fs-4">We engineer foundational trust for African industries. By replacing systemic bottlenecks like fraud and administrative inefficiency with high-integrity digital frameworks, we build systems designed specifically for the African landscape.
                                        </p>
                                    </div>
                                    <div class="panel">
                                        <ul class="list nav-y gap-3 text-start">
                                            <li class="hstack items-center gap-1">
                                                <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                <span class="fs-4 fw-light"><strong>Transparency by Design:</strong> Eliminating trust gaps in finance and real estate with immutable data.</span>
                                            </li>
                                            <li class="hstack items-center gap-1">
                                                <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                <span class="fs-4 fw-light"><strong>Radical Affordability:</strong> Lowering barriers of entry to make essential protection accessible to all.</span>
                                            </li>
                                            <li class="hstack items-center gap-1">
                                                <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                <span class="fs-4 fw-light"><strong>Localized Engineering:</strong> Custom-built solutions that navigate regional infrastructure realities.</span>
                                            </li>
                                            <li class="hstack items-center gap-1">
                                                <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                <span class="fs-4 fw-light"><strong>Unified Ecosystems:</strong> Consolidating fragmented operations into reliable, single-source platforms.</span>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- <div class="panel">
                                            <a class='btn btn-md bg-primary text-white dark:bg-white dark:text-primary border-0 text-none d-inline-flex'
                                                href='{{ url('/projects') }}'>View Industrial Portfolio
                                    <i class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                    </a>
                                </div> --}}
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
                                                    src="{{ asset('assets/images/about/about-04.png ') }}"
                                                    alt="Cortia Industrial Infrastructure Execution">
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
                                                            src="{{ asset('assets/images/about/about-05.png ') }}"
                                                            alt="Infrastructure Asset Auditing">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="panel">
                                                    <figure
                                                        class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden ">
                                                        <img class="media-cover image "
                                                            src="{{ asset('assets/images/about/about-06.png ') }}"
                                                            alt="Proprietary Engineering Protocols">
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
<div id="section_projects" class="section-project section panel overflow-hidden swiper-parent">
    <div class="section-outer panel pb-6 lg:pb-8 xl:pb-10">
        <div class="container max-w-2xl">
            <div class="section-inner panel">
                <div class="panel mb-3 sm:mb-8 xl:mb-9">
                    <div class="row child-cols-12 g-4 sm:g-6 xl:g-9">
                        <div>
                            <div class="section-header panel hstack justify-between mt-5 mb-0 ">
                                <div class="vstack items-start text-start"
                                    data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                                    <h3 style="font-size: 50px; " class="display-4 lg:display-2 ">Our Ecosystems</h3>
                                </div>
                                <div class="panel hstack items-end gap-1 xl:gap-2 sm:d-flex"
                                    data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 800;">
                                    <a href="#"
                                        class="swiper-nav swiper-nav-prev projects-nav-prev btn bg-primary text-white dark:bg-white dark:text-primary w-48px h-48px xl:w-56px xl:h-56px rounded">
                                        <span class="icon-2 unicon-arrow-left"></span>
                                    </a>
                                    <a href="#"
                                        class="swiper-nav swiper-nav-next projects-nav-next btn bg-primary text-white dark:bg-white dark:text-primary w-48px h-48px xl:w-56px xl:h-56px rounded">
                                        <span class="icon-2 unicon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row child-cols-12 g-4 sm:g-6 xl:g-9">
                    <div>
                        <div class="section-content panel expand-container ms-0">
                            <div class="swiper"
                                data-uc-swiper="items: 1.05; gap: 16; loop: true; next: .projects-nav-next; prev: .projects-nav-prev;"
                                data-uc-swiper-s="items: 1.6; gap: 24;" data-uc-swiper-m="items: 2.4; gap: 24;"
                                data-uc-swiper-l="items: 3; gap: 32;">
                                <div class="swiper-wrapper"
                                    data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 600});">
                                    <!-- Slide 1 -->
                                    <div class="swiper-slide">
                                        <div class="project-item panel vstack gap-3 bg-gray-25 dark:bg-gray-800 p-3 lg:p-4 rounded-2">
                                            <header class="panel hstack justify-between items-start gap-2">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 lg:h4 m-0 text-dark dark:text-white">
                                                        <a href="{{ url('/projects') }}" class="text-none text-inherit">Landcerta | Restoring Trust in Real Estate.</a>
                                                    </h3>
                                                    <p class="desc fs-6 opacity-80"><b>The Problem:</b> Fragmented records and "double-selling" scams have made land ownership a high-risk venture.</p>
                                                </div>
                                                <a href="{{ url('/projects') }}" class="link btn bg-primary text-white dark:bg-white dark:text-primary w-40px h-40px p-0 rounded-circle flex-shrink-0 mt-1">
                                                    <i class="icon unicon-arrow-up-right"></i>
                                                </a>
                                            </header>
                                            <figure class="featured-image m-0 rounded ratio ratio-4x3 uc-transition-toggle overflow-hidden mt-1">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('assets/images/solutions/cortia-ecosystem-vector.png') }}" alt="School infrastructure platform">
                                                <a class='position-cover z-999' href='{{ url('/projects') }}'></a>
                                            </figure>
                                            <p class="desc fs-6 opacity-80"><b>The Solution:</b> A transparent verification platform that allows buyers to access verified data and true property history before a single Naira is spent. <br> <br>
                                                <b>Key Feature:</b> Parcel-based tracking and end-to-end documentation transparency.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Slide 2 -->
                                    <div class="swiper-slide">
                                        <div class="project-item panel vstack gap-3 bg-gray-25 dark:bg-gray-800 p-3 lg:p-4 rounded-2">
                                            <header class="panel hstack justify-between items-start gap-2">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 lg:h4 m-0 text-dark dark:text-white">
                                                        <a href="{{ url('/projects') }}" class="text-none text-inherit">Coresure | Insurance for Everyone, Everywhere.</a>
                                                    </h3>
                                                    <p class="desc fs-6 opacity-80"><b>The Problem:</b> High premiums and opaque payout processes have traditionally locked the "less privileged" out of the safety net of insurance.</p>
                                                </div>
                                                <a href="{{ url('/projects') }}" class="link btn bg-primary text-white dark:bg-white dark:text-primary w-40px h-40px p-0 rounded-circle flex-shrink-0 mt-1">
                                                    <i class="icon unicon-arrow-up-right"></i>
                                                </a>
                                            </header>
                                            <figure class="featured-image m-0 rounded ratio ratio-4x3 uc-transition-toggle overflow-hidden mt-1">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('assets/images/solutions/cortia-ecosystem-vector22.png') }}" alt="Land infrastructure and verification">
                                                <a class='position-cover z-999' href='{{ url('/projects') }}'></a>
                                            </figure>
                                            <p class="desc fs-6 opacity-80"><b>The Solution:</b> A micro-insurance platform that breaks down payments into insignificant, manageable amounts, ensuring that even the smallest assets are protected. <br> <br>
                                                <b>Key Feature:</b> Pays-as-you-go and instant policy activation.</p>
                                        </div>
                                    </div>
                                    <!-- Slide 3 -->
                                    <div class="swiper-slide">
                                        <div class="project-item panel vstack gap-3 bg-gray-25 dark:bg-gray-800 p-3 lg:p-4 rounded-2">
                                            <header class="panel hstack justify-between items-start gap-2">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 lg:h4 m-0 text-dark dark:text-white">
                                                        <a href="{{ url('/projects') }}" class="text-none text-inherit">University Infrastructure | The All-in-One Campus Gateway.</a>
                                                    </h3>
                                                    <p class="desc fs-6 opacity-80"><b>The Problem:</b> Educational institutions struggle with fragmented, outdated portals that hinder administrative efficiency and student success.</p>
                                                </div>
                                                <a href="{{ url('/projects') }}" class="link btn bg-primary text-white dark:bg-white dark:text-primary w-40px h-40px p-0 rounded-circle flex-shrink-0 mt-1">
                                                    <i class="icon unicon-arrow-up-right"></i>
                                                </a>
                                            </header>
                                            <figure class="featured-image m-0 rounded ratio ratio-4x3 uc-transition-toggle overflow-hidden mt-1">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('assets/images/solutions/cortia-ecosystem-vector33.png') }}" alt="Real estate infrastructure and property verification">
                                                <a class='position-cover z-999' href='{{ url('/projects') }}'></a>
                                            </figure>
                                            <p class="desc fs-6 opacity-80"><b>The Solution:</b> A unified technical ecosystem merging Bursary, Registry, Student Records, and Staff Portals into one seamless experience.<br><br>
                                                <b>Key Feature:</b> Custom-integrated CBT (Computer Based Testing) systems and real-time result processing.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Slide 4 (Loop Duplicate of Slide 1) -->
                                    <div class="swiper-slide">
                                        <div class="project-item panel vstack gap-3 bg-gray-25 dark:bg-gray-800 p-3 lg:p-4 rounded-2">
                                            <header class="panel hstack justify-between items-start gap-2">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 lg:h4 m-0 text-dark dark:text-white">
                                                        <a href="{{ url('/projects') }}" class="text-none text-inherit">Landcerta | Restoring Trust in Real Estate.</a>
                                                    </h3>
                                                    <p class="desc fs-6 opacity-80"><b>The Problem:</b> Fragmented records and "double-selling" scams have made land ownership a high-risk venture.</p>
                                                </div>
                                                <a href="{{ url('/projects') }}" class="link btn bg-primary text-white dark:bg-white dark:text-primary w-40px h-40px p-0 rounded-circle flex-shrink-0 mt-1">
                                                    <i class="icon unicon-arrow-up-right"></i>
                                                </a>
                                            </header>
                                            <figure class="featured-image m-0 rounded ratio ratio-4x3 uc-transition-toggle overflow-hidden mt-1">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('assets/images/solutions/cortia-ecosystem-vector.png') }}" alt="School infrastructure platform">
                                                <a class='position-cover z-999' href='{{ url('/projects') }}'></a>
                                            </figure>
                                            <p class="desc fs-6 opacity-80"><b>The Solution:</b> A transparent verification platform that allows buyers to access verified data and true property history before a single Naira is spent. <br> <br>
                                                <b>Key Feature:</b> Parcel-based tracking and end-to-end documentation transparency.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Slide 5 (Loop Duplicate of Slide 2) -->
                                    <div class="swiper-slide">
                                        <div class="project-item panel vstack gap-3 bg-gray-25 dark:bg-gray-800 p-3 lg:p-4 rounded-2">
                                            <header class="panel hstack justify-between items-start gap-2">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 lg:h4 m-0 text-dark dark:text-white">
                                                        <a href="{{ url('/projects') }}" class="text-none text-inherit">Coresure | Insurance for Everyone, Everywhere.</a>
                                                    </h3>
                                                    <p class="desc fs-6 opacity-80"><b>The Problem:</b> High premiums and opaque payout processes have traditionally locked the "less privileged" out of the safety net of insurance.</p>
                                                </div>
                                                <a href="{{ url('/projects') }}" class="link btn bg-primary text-white dark:bg-white dark:text-primary w-40px h-40px p-0 rounded-circle flex-shrink-0 mt-1">
                                                    <i class="icon unicon-arrow-up-right"></i>
                                                </a>
                                            </header>
                                            <figure class="featured-image m-0 rounded ratio ratio-4x3 uc-transition-toggle overflow-hidden mt-1">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('assets/images/solutions/cortia-ecosystem-vector22.png') }}" alt="Land infrastructure and verification">
                                                <a class='position-cover z-999' href='{{ url('/projects') }}'></a>
                                            </figure>
                                            <p class="desc fs-6 opacity-80"><b>The Solution:</b> A micro-insurance platform that breaks down payments into insignificant, manageable amounts, ensuring that even the smallest assets are protected. <br> <br>
                                                <b>Key Feature:</b> Pays-as-you-go and instant policy activation.</p>
                                        </div>
                                    </div>
                                    <!-- Slide 6 (Loop Duplicate of Slide 3) -->
                                    <div class="swiper-slide">
                                        <div class="project-item panel vstack gap-3 bg-gray-25 dark:bg-gray-800 p-3 lg:p-4 rounded-2">
                                            <header class="panel hstack justify-between items-start gap-2">
                                                <div class="vstack gap-1">
                                                    <h3 class="title h5 lg:h4 m-0 text-dark dark:text-white">
                                                        <a href="{{ url('/projects') }}" class="text-none text-inherit">University Infrastructure | The All-in-One Campus Gateway.</a>
                                                    </h3>
                                                    <p class="desc fs-6 opacity-80"><b>The Problem:</b> Educational institutions struggle with fragmented, outdated portals that hinder administrative efficiency and student success.</p>
                                                </div>
                                                <a href="{{ url('/projects') }}" class="link btn bg-primary text-white dark:bg-white dark:text-primary w-40px h-40px p-0 rounded-circle flex-shrink-0 mt-1">
                                                    <i class="icon unicon-arrow-up-right"></i>
                                                </a>
                                            </header>
                                            <figure class="featured-image m-0 rounded ratio ratio-4x3 uc-transition-toggle overflow-hidden mt-1">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('assets/images/solutions/cortia-ecosystem-vector.png') }}" alt="Real estate infrastructure and property verification">
                                                <a class='position-cover z-999' href='{{ url('/projects') }}'></a>
                                            </figure>
                                            <p class="desc fs-6 opacity-80"><b>The Solution:</b> A unified technical ecosystem merging Bursary, Registry, Student Records, and Staff Portals into one seamless experience.<br><br>
                                                <b>Key Feature:</b> Custom-integrated CBT (Computer Based Testing) systems and real-time result processing.
                                            </p>
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
<div id="section_mission_vision" class="section-pricing section panel overflow-hidden">
    <div class="section-outer panel pt-2 lg:pt-3 xl:pt-4 pb-6 lg:pb-8 xl:pb-10">
        <div class="container max-w-2xl">
            <div class="section-inner panel"
                data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                <div class="panel">
                    <div class="row g-6 xl:g-8 items-center"
                        data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 500});">
                        <div class="xl:col-4">
                            <div class="panel vstack gap-4 xl:gap-5">
                                <div class="panel vstack gap-2 xl:gap-3">
                                    <h3 class="display-4 sm:display-3 md:display-4 lg:display-3 xl:display-2 m-0">Our Purpose & Trajectory</h3>
                                    <p class="fs-4 sm:fs-3 xl:fs-4">We are dedicated to engineering the digital backbone that powers Africa’s essential industries and institutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col">
                            <div class="panel">
                                <div class="row g-2 xl:g-3 col-match">
                                    <div>
                                        <div class="pricing-item panel rounded border p-4 ">
                                            <div class="row gy-2 sm:gx-6 sep-y items-center" data-uc-grid>
                                                <div class="sm:col-4">
                                                    <div class="panel vstack gap-2 sm:text-center">
                                                        <h4 class="display-4 sm:display-5 m-0 text-primary dark:text-secondary">Mission</h4>
                                                        <p class="fs-6 m-0 opacity-70">What drives us today</p>
                                                    </div>
                                                </div>
                                                <div class="sm:col">
                                                    <div class="panel mt-2 sm:mt-0">
                                                        <p class="fs-5 lg:fs-6 xl:fs-5 m-0 lh-base fw-light">
                                                            To engineer high-integrity digital infrastructure that bridges administrative gaps in Africa's critical sectors. We build resilient, transparent, and radically affordable frameworks that replace systemic trust deficits with absolute operational certainty.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="pricing-item panel rounded border p-4 bg-primary text-white border-primary">
                                            <div class="row gy-2 sm:gx-6 sep-y items-center" data-uc-grid>
                                                <div class="sm:col-4">
                                                    <div class="panel vstack gap-2 sm:text-center">
                                                        <h4 class="display-4 sm:display-5 m-0 text-inherit">Vision</h4>
                                                        <p class="fs-6 m-0 opacity-70">Where we are going</p>
                                                    </div>
                                                </div>
                                                <div class="sm:col">
                                                    <div class="panel mt-2 sm:mt-0">
                                                        <p class="fs-5 lg:fs-6 xl:fs-5 m-0 lh-base fw-light text-white opacity-90">
                                                            To become the definitive technological operating system powering Africa's property, insurance, and educational landscapes fostering a frictionless economy where every asset is verified and every transaction is secure.
                                                        </p>
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
    <div id="section_key_features" class="section-key-features section panel overflow-hidden bg-primary dark:bg-gray-900">
        <div class="section-outer panel py-6 lg:py-8 xl:py-10">
            <div class="container sm:max-w-xl xl:max-w-2xl">
                <div class="section-inner panel"
                    data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                    <div
                        class="panel vstack items-center gap-2 xl:gap-3 mb-4 sm:mb-8 xl:mb-9 sm:max-w-600px xl:max-w-800px mx-auto text-center">
                        <h2 class="display-4 sm:display-3 xl:display-2 m-0 text-white">The Operating System for <span
                                class="text-secondary">African Industry</span></h2>
                        <p class="fs-5 m-0 text-white opacity-80">We provide the end-to-end technology and digital backbone
                            that powers fully automated industrial infrastructure across the continent.</p>
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
                                            src="{{ asset('assets/images/icons/machine-learning.svg ') }}"
                                            alt="Icon">
                                    </div>
                                    <h3 class="title h5 xl:h4 m-0 text-inherit">Property Verification</h3>
                                </div>
                                <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                <a class='position-cover' href='{{ url('/services') }}'></a>
                            </div>
                        </div>

                        <div>
                            <div
                                class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                <div class="hstack justify-start gap-2">
                                    <div class="panel w-48px h-48px cstack bg-primary rounded">
                                        <img class="icon w-32px h-32px text-secondary"
                                            src="{{ asset('assets/images/icons/chart-notification.svg ') }}"
                                            alt="Icon">
                                    </div>
                                    <h3 class="title h5 xl:h4 m-0 text-inherit">Insurance Infrastructure</h3>
                                </div>
                                <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                <a class='position-cover' href='{{ url('/services') }}'></a>
                            </div>
                        </div>
                        <div>
                            <div
                                class="feature-item panel px-4 py-3 hstack justify-between gap-3 xl:gap-4 rounded bg-white text-dark">
                                <div class="hstack justify-start gap-2">
                                    <div class="panel w-48px h-48px cstack bg-primary rounded">
                                        <img class="icon w-32px h-32px text-secondary"
                                            src="{{ asset('assets/images/icons/bank.svg ') }}" alt="Icon">
                                    </div>
                                    <h3 class="title h5 xl:h4 m-0 text-inherit">School Infrastructure</h3>
                                </div>
                                <i class="link-btn icon-1 xl:icon-2 unicon-arrow-up-right"></i>
                                <a class='position-cover' href='{{ url('/services') }}'></a>
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
<!-- <div id="section_clients" class="section-clients section panel overflow-hidden swiper-parent">
    <div class="section-outer panel py-0 lg:py-0 xl:py-0">
        <div class="container max-w-2xl">
            <div class="section-inner panel"
                data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                <div class="panel vstack sm:hstack justify-between sm:items-end gap-4">
                    <div class="panel sm:w-500px md:w-400px lg:w-700px">
                        <h1 class="display-4 sm:display-3 md:display-4 lg:display-3 xl:display-2 m-0">Trusted by
                            institutions that demand reliable systems</h1>
                    </div>
                    <div class="panel hstack items-end gap-1 xl:gap-2 sm:d-flex"
                        data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 800;">
                        <a href="#"
                            class="swiper-nav swiper-nav-prev clients-nav-prev btn bg-primary text-white dark:bg-secondary dark:text-primary w-48px h-48px xl:w-56px xl:h-56px rounded">
                            <span class="icon-2 unicon-arrow-left"></span>
                        </a>
                        <a href="#"
                            class="swiper-nav swiper-nav-next clients-nav-next btn bg-primary text-white dark:bg-secondary dark:text-primary w-48px h-48px xl:w-56px xl:h-56px rounded">
                            <span class="icon-2 unicon-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-content panel expand-container mt-6 lg:mt-7 xl:mt-9 ms-0"
                data-anime="onview: -100; targets: >*; translateX: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 800;">
                <div class="swiper"
                    data-uc-swiper="items: 1.7; gap: 16; loop: true; next: .clients-nav-next; prev: .clients-nav-prev;"
                    data-uc-swiper-s="items: 2.2; gap: 24;" data-uc-swiper-m="items: 2.22; gap: 24;"
                    data-uc-swiper-l="items: 3.20; gap: 32;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="panel bg-primary-25 dark:bg-gray-900 p-2 sm:p-5 rounded items-center">
                                <div class="row g-5 col-match">
                                    <div class="sm:col-7 order-2 sm:order-1">
                                        <div class="panel vstack gap-3 sm:gap-4">
                                            <img class="text-yellow-400 w-150px"
                                                src="{{ asset('assets/images/common/stars-rating.svg ') }}"
                                                alt="Rating Cortia Technology" data-uc-svg>
                                            <p class="fs-5">Cortia Technology delivered a robust university
                                                infrastructure platform that improved visibility across operations
                                                and made key processes significantly faster.</p>
                                            <div class="panel vstack gap-1">
                                                <h6 class="display-6 m-0">Prof. Aisha Bello</h6>
                                                <span class="fs-6">Vice-Chancellor, University of Offa
                                                    (Offa)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col order-1 sm:order-2">
                                        <div class="panel">
                                            <figure
                                                class="featured-image m-0 rounded ratio ratio-3x2 sm:ratio-16x9 rounded overflow-hidden h-100 ">
                                                <img class="media-cover image "
                                                    src="{{ asset('assets/images/avatars/01.jpg ') }}"
                                                    alt="Testimonial portrait">
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
                                                src="{{ asset('assets/images/common/stars-rating.svg ') }}"
                                                alt="Rating Cortia Technology" data-uc-svg>
                                            <p class="fs-5">From discovery to delivery, Cortia’s team stayed
                                                technical and accountable. The platform was delivered with strong
                                                access controls and reporting we can trust.</p>
                                            <div class="panel vstack gap-1">
                                                <h6 class="display-6 m-0">Prof. Samuel Adeyemi</h6>
                                                <span class="fs-6">Vice-Chancellor, Mercy Medical University
                                                    (Iwo)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col order-1 sm:order-2">
                                        <div class="panel">
                                            <figure
                                                class="featured-image m-0 rounded ratio ratio-3x2 sm:ratio-16x9 rounded overflow-hidden h-100 ">
                                                <img class="media-cover image "
                                                    src="{{ asset('assets/images/avatars/02.jpg ') }}"
                                                    alt="Testimonial portrait">
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
                                                src="{{ asset('assets/images/common/stars-rating.svg ') }}"
                                                alt="Rating Cortia Technology" data-uc-svg>
                                            <p class="fs-5">Cortia built an infrastructure solution tailored to
                                                our
                                                campus workflows. The implementation was clean, and the post-launch
                                                support has been consistent.</p>
                                            <div class="panel vstack gap-1">
                                                <h6 class="display-6 m-0">Prof. Grace Oladipo</h6>
                                                <span class="fs-6">Vice-Chancellor, University of Ikirun
                                                    (Osun)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col order-1 sm:order-2">
                                        <div class="panel">
                                            <figure
                                                class="featured-image m-0 rounded ratio ratio-3x2 sm:ratio-16x9 rounded overflow-hidden h-100 ">
                                                <img class="media-cover image "
                                                    src="{{ asset('assets/images/avatars/03.jpg ') }}"
                                                    alt="Testimonial portrait">
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
                                                src="{{ asset('assets/images/common/stars-rating.svg ') }}"
                                                alt="Rating Cortia Technology" data-uc-svg>
                                            <p class="fs-5">Our land verification workflow is now traceable end
                                                to
                                                end. Cortia implemented clear approvals, audit logs, and a data
                                                model
                                                that supports future integrations.</p>
                                            <div class="panel vstack gap-1">
                                                <h6 class="display-6 m-0">Mrs. Kemi Adebayo</h6>
                                                <span class="fs-6">Director, Land Administration</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col order-1 sm:order-2">
                                        <div class="panel">
                                            <figure
                                                class="featured-image m-0 rounded ratio ratio-3x2 sm:ratio-16x9 rounded overflow-hidden h-100 ">
                                                <img class="media-cover image "
                                                    src="{{ asset('assets/images/avatars/08.jpg ') }}"
                                                    alt="Testimonial portrait">
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
                                                src="{{ asset('assets/images/common/stars-rating.svg ') }}"
                                                alt="Rating Cortia Technology" data-uc-svg>
                                            <p class="fs-5">Cortia’s property verification solution improved data
                                                integrity and reduced manual back-and-forth. The team delivered with
                                                strong engineering discipline.</p>
                                            <div class="panel vstack gap-1">
                                                <h6 class="display-6 m-0">Engr. Chinedu Nwankwo</h6>
                                                <span class="fs-6">Head of Operations, Property
                                                    Verification</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col order-1 sm:order-2">
                                        <div class="panel">
                                            <figure
                                                class="featured-image m-0 rounded ratio ratio-3x2 sm:ratio-16x9 rounded overflow-hidden h-100 ">
                                                <img class="media-cover image "
                                                    src="{{ asset('assets/images/avatars/06.jpg ') }}"
                                                    alt="Testimonial portrait">
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
</div> -->

<!-- Section End -->



<!-- Section start -->
<div id="section_faq" class="section-faq section panel overflow-hidden">
    <div class="section-outer panel py-6 lg:py-8 xl:py-10">
        <div class="container sm:max-w-xl xl:max-w-2xl">
            <div class="section-inner panel"
                data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                <div class="panel vstack gap-2 sm:w-500px lg:w-900px m-auto text-center">
                    <h1 class="display-3 lg:display-2 m-0">Frequently asked questions</h1>
                    <p class="fs-5 lg:fs-4">Everything you need to know about Africa’s premier Industrial
                        Infrastructure provider.
                    </p>
                </div>
            </div>
            <div class="section-content panel mt-6 lg:mt-7 xl:mt-9"
                data-anime="onview:-100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 400;">
                <div class="row child-cols-12 g-3 xl:g-4 col-match">
                    <div class="col sm:col-7 md:col-12 lg:col">
                        <ul class="gap-2 uc-accordion mb-0" data-uc-accordion="collapsible: false">
                            <li class="panel p-2 md:p-4 bg-primary-25 dark:bg-gray-900 rounded">
                                <a class="uc-accordion-title h6 md:h5 lg:display-6 fw-bold pe-4" href="#">1.
                                    What kind of infrastructure does Cortia develop?</a>
                                <div class="uc-accordion-content" hidden="">
                                    <p>We engineer mission-critical industrial infrastructure tailored for the African
                                        landscape. This includes <strong>School OS</strong> (comprehensive institutional
                                        management), <strong>Property Verification Infrastructure</strong> (title
                                        validation and asset security), and <strong>Insurance Frameworks</strong>
                                        designed to bridge the gap between physical assets and digital oversight.</p>
                                </div>
                            </li>
                            <li class="panel p-2 md:p-4 bg-primary-25 dark:bg-gray-900 rounded">
                                <a class="uc-accordion-title h6 md:h5 lg:display-6 fw-bold pe-4" href="#">2.
                                    How is your technology specifically tailored for Africa?</a>
                                <div class="uc-accordion-content" hidden="">
                                    <p>Our systems are built from the ground up to solve regional challenges. We focus
                                        on <strong>offline-first capabilities</strong>, low-bandwidth optimization, and
                                        high-integrity data structures that ensure digital records remain immutable and
                                        secure, even in environments with fragmented traditional oversight.</p>
                                </div>
                            </li>
                            <li class="panel p-2 md:p-4 bg-primary-25 dark:bg-gray-900 rounded">
                                <a class="uc-accordion-title h6 md:h5 lg:display-6 fw-bold pe-4" href="#">3.
                                    What makes Cortia infrastructure "Industrial Grade"?</a>
                                <div class="uc-accordion-content" hidden="">
                                    <p>Unlike traditional software, our infrastructure is engineered for
                                        <strong>mission-critical reliability</strong>. We implement role-based access
                                        control (RBAC), end-to-end encryption, and localized environment hardening to
                                        ensure that our systems can power the foundational needs of entire industries
                                        without interruption.
                                    </p>
                                </div>
                            </li>
                            <li class="panel p-2 md:p-4 bg-primary-25 dark:bg-gray-900 rounded">
                                <a class="uc-accordion-title h6 md:h5 lg:display-6 fw-bold pe-4" href="#">4.
                                    Can these infrastructures integrate with existing systems?</a>
                                <div class="uc-accordion-content" hidden="">
                                    <p>Yes. Our architecture is modular and designed for seamless integration with
                                        third-party services and internal tools. We provide structured handover,
                                        comprehensive documentation, and deployment guidance to ensure a stable
                                        transition to your internal teams.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 sm:col-5 md:col-12 lg:col-4">
                        <div class="panel p-4 xl:p-6 rounded text-center bg-primary-25 dark:bg-gray-900 h-100">
                            <div class="vstack items-center gap-3 xl:gap-5 h-100">
                                <div class="h-100 vstack items-center justify-center gap-2">
                                    <i class="icon-4 xl:icon-5 unicon-chat text-primary dark:text-secondary"></i>
                                    <h3 class="display-6 xl:display-5 my-2">Have an industrial-scale challenge?</h3>
                                    <p class="fs-6 xl:fs-5">Consult with our engineering team to see how our
                                        infrastructure can power your growth.</p>
                                    <div>
                                        <a href="{{ url('/contact') }}"
                                            class="btn btn-md bg-primary text-white dark:bg-secondary dark:text-primary">
                                            <span>Contact Our Engineers</span>
                                            <i class="icon-2 unicon-chat"></i>
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
                    class="panel vstack items-center gap-3 mb-4 sm:mb-8 xl:mb-9 sm:max-w-700px xl:max-w-900px mx-auto text-center">
                    <span class="px-3 py-1 fs-7 fw-bold border rounded-pill border-primary text-primary dark:text-secondary dark:border-secondary uppercase tracking-wider bg-primary-10 dark:bg-gray-800">
                        Our Blogs
                    </span>
                    <h2 class="display-3 sm:display-2 m-0">Architecting Africa's Digital Ecosystems</h2>
                    <div class="panel vstack gap-2 mt-2">
                        <p class="fs-5 sm:fs-4 text-dark dark:text-white opacity-80 m-0">
                            At <b>Cortia Technology</b>, we don't just build apps; we architect the digital operating systems for the continent's most essential sectors. Here is a look at the three infrastructures driving our mission today.
                        </p>
                    </div>
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
                                        src="{{ asset('assets/images/blog/img-01.png ') }}" alt="image">
                                </figure>
                                <a class='position-cover' href='#'></a>
                            </div>
                            <div class="panel vstack items-start gap-2">
                                <span
                                    class="py-narrow px-2 fw-semibold bg-primary rounded cstack text-white w-fit dark:bg-secondary dark:text-primary">Infrastructure</span>
                                <h3 class="title h3 m-0">
                                    <a class='text-none' href='#'>Educational Infrastructure (OII)</a>
                                </h3>
                                <p class="fs-7 sm:fs-6 xl:fs-5">Education is the engine of prosperity, yet many institutions are held back by fragmented data.
                                    Our OII provides a unified digital environment that manages the entire institutional lifecycle.</p>
                                <a class='btn btn-text fs-4 sm:fs-6 xl:fs-5 border-bottom dark:border-white gap-1 mt-1 text-primary dark:text-white'
                                    href='#'>
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
                                        src="{{ asset('assets/images/blog/img-02.png ') }}" alt="image">
                                </figure>
                                <a class='position-cover' href='#'></a>
                            </div>
                            <div class="panel vstack items-start gap-2">
                                <span
                                    class="py-narrow px-2 fw-semibold bg-primary rounded cstack text-white w-fit dark:bg-secondary dark:text-primary">Infrastructure</span>
                                <h3 class="title h3 m-0">
                                    <a class='text-none' href='#'>Property & Land Infrastructure</a>
                                </h3>
                                <p class="fs-7 sm:fs-6 xl:fs-5">Physical assets are only as valuable as the certainty of their ownership.
                                    Our Property Infrastructure is a high-integrity verification engine.</p>
                                <a class='btn btn-text fs-4 sm:fs-6 xl:fs-5 border-bottom dark:border-white gap-1 mt-1 text-primary dark:text-white'
                                    href='#'>
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
                                        src="{{ asset('assets/images/blog/img-03.png ') }}" alt="image">
                                </figure>
                                <a class='position-cover' href='#'></a>
                            </div>
                            <div class="panel vstack items-start gap-2">
                                <span
                                    class="py-narrow px-2 fw-semibold bg-primary rounded cstack text-white w-fit dark:bg-secondary dark:text-primary">Infrastructure</span>
                                <h3 class="title h3 m-0">
                                    <a class='text-none' href='#'>Insurance Infrastructure</a>
                                </h3>
                                <p class="fs-7 sm:fs-6 xl:fs-5">Risk management is the silent partner of industrial growth. Our Insurance Infrastructure provides the underlying framework for the next generation of underwriting.</p>
                                <a class='btn btn-text fs-4 sm:fs-6 xl:fs-5 border-bottom dark:border-white gap-1 mt-1 text-primary dark:text-white'
                                    href='#'>
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

<!-- section Start -->
<div id="section_about" class="section-about section panel overflow-hidden">
    <div class="section-outer panel py-6 lg:py-8 xl:py-10">
        <div class="container sm:max-w-xl xl:max-w-2xl">
            <div class="section-inner panel" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                <div class="section-content">
                    <div class="row g-4 lg:g-6 xl:g-10 items-center justify-between">
                        <div class="xl:col-7">
                            <div class="panel lg:w-650px">
                                <h2 class="display-4 sm:display-2 m-0">Why you should work with Cortia</h2>
                            </div>
                        </div>
                        <div class="xl:col-5">
                            <div class="panel">
                                <p class="fs-4 sm:fs-3 xl:fs-4">We bridge the gap between local challenges and digital excellence. By combining industrial-scale technology with deep African insights, we build the foundations for a more transparent and efficient future.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel mt-6 lg:mt-7 xl:mt-9">
                        <div class="row g-4 lg:g-6 xl:g-10 items-center">
                            <div class="lg:col-7">
                                <div class="row sm:child-cols-6 g-4">
                                    <!-- Scalability -->
                                    <div>
                                        <div class="panel vstack gap-2">
                                            <div class="panel">
                                                <img src="../assets/images/icons/computer.svg" alt="Scalability Icon">
                                            </div>
                                            <div class="panel vstack gap-1 mt-1">
                                                <h6 class="display-5 sm:display-6 m-0">Infinte Scalability</h6>
                                                <p class="fs-5">Our systems are engineered to grow seamlessly, supporting everything from local village cooperatives to nationwide institutional adoption.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Security-First -->
                                    <div>
                                        <div class="panel vstack gap-2">
                                            <div class="panel">
                                                <img src="../assets/images/icons/time-quarter.png" alt="Security Icon">
                                            </div>
                                            <div class="panel vstack gap-1 mt-1">
                                                <h6 class="display-5 sm:display-6 m-0">Security-First</h6>
                                                <p class="fs-5">Utilizing rigorous data protocols and immutable ledgers to ensure every land title and insurance claim is bulletproof and fraud-resistant.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- User-Centric Design -->
                                    <div>
                                        <div class="panel vstack gap-2">
                                            <div class="panel">
                                                <img src="../assets/images/icons/package.svg" alt="Design Icon">
                                            </div>
                                            <div class="panel vstack gap-1 mt-1">
                                                <h6 class="display-5 sm:display-6 m-0">User-Centric UX</h6>
                                                <p class="fs-5">Interfaces built specifically for the African user, ensuring high accessibility and ease of use regardless of technical literacy or device type.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Local Impact -->
                                    <div>
                                        <div class="panel vstack gap-2">
                                            <div class="panel">
                                                <img src="../assets/images/icons/remote.svg" alt="Impact Icon">
                                            </div>
                                            <div class="panel vstack gap-1 mt-1">
                                                <h6 class="display-5 sm:display-6 m-0">Local Impact</h6>
                                                <p class="fs-5">We don't just innovate; we solve. Our solutions are designed to dismantle systemic bottlenecks like land fraud and financial exclusion.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-5">
                                <div class="panel vstack items-center justify-center gap-2 bg-primary p-4 text-center h-450px text-white rounded overflow-hidden">
                                    <img src="../assets/images/common/bg-01.svg" alt="background" class="position-absolute top-0 start-0 background z-999">
                                    <img src="../assets/images/common/bg-02.svg" alt="background" class="position-absolute bottom-0 end-0 background z-999">
                                    <img src="../assets/images/common/background-05.png" alt="background" class="w-100 h-100 background position-absolute z-9 opacity-50 mask-x-3">
                                    <img src="../assets/images/common/ellipse-05.png" alt="ellipse" class="ellipse-05 position-absolute z-0 opacity-80">
                                    <img src="../assets/images/common/ellipse-06.png" alt="ellipse" class="ellipse-06 position-absolute z-0 opacity-80">
                                    <div class="panel vstack gap-2 justify-center items-center z-999">
                                        <h4 class="display-4 m-0 text-inherit">And much more!</h4>
                                        <p class="fs-4">Ready to secure your future with Cortia’s digital backbone?</p>
                                        <a class='btn btn-md bg-white text-primary border-0 text-primary text-none d-none lg:d-inline-flex w-fit' href='page-solutions.html'>View Our Projects
                                            <i class="icon lg:icon-1 unicon unicon-events"></i>
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
<!-- Section end -->

<!-- Cta End -->

</div>
<!-- Wrapper end -->
@endsection