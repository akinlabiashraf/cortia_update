@extends('layouts.app')

@section('content')

    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">

        <!-- Header start -->
        <div id="hero_header" class="hero-header section panel overflow-hidden h-100">
            <div class="section-outer panel pt-9 lg:pt-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="panel section-inner d-flex flex-column items-center justify-center gap-4" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <img src="{{ asset('assets/images/common/common-01.svg') }}" alt="Icon" class="common-01 d-inline-block position-absolute w-64px xl:w-80px text-yellow-400  d-none xl:d-block z-999" data-uc-svg>
                        <img src="{{ asset('assets/images/common/shape-02.svg') }}" alt="Icon" class="shape-02 position-absolute w-80px xl:w-64px text-yellow-400 d-none xl:d-block z-999">
                        <img src="{{ asset('assets/images/common/shape-01.svg') }}" alt="Icon" class="shape-01 position-absolute w-64px xl:w-80px text-yellow-400  d-none xl:d-block z-999">
                        <div class="panel" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                            <div class="panel vstack justify-center gap-3 text-center max-w-950px">
                                <div class="panel vstack items-center">
                                    <h1 class="display-4 md:display-2 lg:display-1 text-inherit">Engineering Africa’s <span class="text-secondary">Digital Backbone</span></h1>
                                    <p class="fs-4 text-inherit lg:w-600px">We build high-integrity, resilient software infrastructure for Africa's most critical sectors Because off-the-shelf SaaS isn't enough.</p>
                                </div>
                                <div class="panel cstack gap-1 sm:gap-2 xl:mt-4">
                                    <a class='btn btn-md bg-primary dark:bg-secondary border-0 text-white dark:text-primary text-none d-inline-flex' href='{{ url('/contact') }}'>Partner With Us
                                        <i class="icon lg:icon-1 unicon unicon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-content panel mt-4 sm:mt-5 xl:mt-6" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <div class="row child-cols-12 lg:child-cols-3 g-3 items-center">
                            <div>
                                <div class="panel d-none lg:d-block">
                                    <figure class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden h-400px ">
                                        <img class="media-cover image " src="{{ asset('assets/images/about/about-04.png') }}" alt="Insignia">
                                    </figure>
                                </div>
                            </div>
                            <div>
                                <div class="panel">
                                    <figure class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden h-300px ">
                                        <img class="media-cover image " src="{{ asset('assets/images/about/about-07.png') }}" alt="Insignia">
                                    </figure>
                                </div>
                            </div>
                            <div>
                                <div class="panel d-none lg:d-block">
                                    <figure class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden h-400px ">
                                        <img class="media-cover image " src="{{ asset('assets/images/about/about-08.png') }}" alt="Insignia">
                                    </figure>
                                </div>
                            </div>
                            <div>
                                <div class="panel d-none lg:d-block">
                                    <figure class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden h-300px ">
                                        <img class="media-cover image " src="{{ asset('assets/images/about/about-09.png') }}" alt="Insignia">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header end -->

        <!-- Section start -->
        <div class="section-customers panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div class="panel vstack items-center gap-2 xl:gap-3 mb-3 sm:mb-8 xl:mb-9 sm:max-w-600px lg:max-w-950px mx-auto text-center">
                            <h2 class="display-4 sm:display-3 lg:display-2 m-0">Built for the realities of African operations.</h2>
                        </div>
                    </div>
                    <div class="panel section-item" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div class="row sm:child-cols-6 lg:child-cols-4 g-4 justify-center">
                            <div>
                                <div class="panel bg-01 vstack justify-center items-center gap-2 px-4 py-7 rounded dark:text-black">
                                    <div class="panel position-absolute top-0 start-0">
                                        <img src="{{ asset('assets/images/common/vector-01.svg') }}" alt="Bg Insignia">
                                    </div>
                                    <p class="fs-4">Reliability Focus</p>
                                    <h1 class="display-2 m-0 text-inherit">100%</h1>
                                    <p class="fs-4">Offline-First Capable</p>
                                    <div class="panel position-absolute bottom-0 end-0">
                                        <img class="rounded" src="{{ asset('assets/images/common/vector-02.svg') }}" alt="Bg Insignia">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel bg-02 vstack justify-center items-center gap-2 px-4 py-7 rounded dark:text-black">
                                    <div class="panel position-absolute top-0 start-0">
                                        <img src="{{ asset('assets/images/common/vector-01.svg') }}" alt="Bg Insignia">
                                    </div>
                                    <p class="fs-4">Industry Verticals</p>
                                    <h1 class="display-2 m-0 text-inherit">3+</h1>
                                    <p class="fs-4">Core Focus Areas</p>
                                    <div class="panel position-absolute bottom-0 end-0">
                                        <img class="rounded" src="{{ asset('assets/images/common/vector-02.svg') }}" alt="Bg Insignia">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel bg-03 vstack justify-center items-center gap-2 px-4 py-7 rounded dark:text-black">
                                    <div class="panel position-absolute top-0 start-0">
                                        <img src="{{ asset('assets/images/common/vector-01.svg') }}" alt="Bg Insignia">
                                    </div>
                                    <p class="fs-4">Security</p>
                                    <h1 class="display-2 m-0 text-inherit">Zero</h1>
                                    <p class="fs-4">Data Compromises</p>
                                    <div class="panel position-absolute bottom-0 end-0">
                                        <img class="rounded" src="{{ asset('assets/images/common/vector-02.svg') }}" alt="Bg Insignia">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section end -->

        <!-- Mission & Vision start -->
        <div id="mission-vision" class="section-about section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="section-content">
                            <div class="row xl:child-cols-6 g-4 lg:g-6 xl:g-10 items-center col-match">
                                <div>
                                    <div class="panel">
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden ">
                                            <img class="media-cover image " src="{{ asset('assets/images/about/about-02.png') }}" alt="Mission & Vision">
                                        </figure>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-4">
                                        <div class="panel vstack gap-3">
                                            <h2 class="display-3 m-0">Mission & Vision</h2>
                                            <p class="fs-4 fw-bold">Our Mission</p>
                                            <p class="fs-5">To develop and deploy high-integrity, industrial-grade software infrastructure that powers critical sectors across Africa, enabling secure, transparent, and efficient operations.</p>
                                            <p class="fs-4 fw-bold mt-2">Our Vision</p>
                                            <p class="fs-5">To be the foundational digital backbone of Africa, pioneering robust technological stacks that foster trust, innovation, and sustainable growth in education, insurance, and real estate.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mission & Vision end -->

        <!-- Core Values start -->
        <div id="core-values" class="section-features section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="panel vstack items-center gap-2 xl:gap-3 mb-4 sm:mb-8 xl:mb-9 sm:max-w-600px xl:max-w-700px mx-auto text-center">
                            <h2 class="display-4 sm:display-3 xl:display-2 m-0">Our Core Values</h2>
                            <p class="fs-5 lg:fs-4">The principles that guide our work and shape our culture.</p>
                        </div>
                        <div class="panel">
                            <div class="row sm:child-cols-6 xl:child-cols-3 g-4 col-match">
                                <div>
                                    <div class="panel vstack gap-4 bg-primary-25 dark:bg-primary dark:text-white rounded p-4">
                                        <span><i class="unicon-shield-check icon-3 text-secondary"></i></span>
                                        <div class="panel vstack gap-2 px-1">
                                            <h3 class="h2 lg:h3 m-0">Integrity</h3>
                                            <p class="fs-3 lg:fs-5">We build resilient, secure, and transparent infrastructure that our partners can trust without question.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-4 bg-primary-25 dark:bg-primary dark:text-white rounded p-4">
                                        <span><i class="unicon-diamond icon-3 text-secondary"></i></span>
                                        <div class="panel vstack gap-2 px-1">
                                            <h3 class="h2 lg:h3 m-0">Excellence</h3>
                                            <p class="fs-3 lg:fs-5">We strive for the highest quality in everything we create, from code to customer relationships.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-4 bg-primary-25 dark:bg-primary dark:text-white rounded p-4">
                                        <span><i class="unicon-flash icon-3 text-secondary"></i></span>
                                        <div class="panel vstack gap-2 px-1">
                                            <h3 class="h2 lg:h3 m-0">Innovation</h3>
                                            <p class="fs-3 lg:fs-5">We continuously pioneer modern solutions to solve complex, foundational challenges across Africa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-4 bg-primary-25 dark:bg-primary dark:text-white rounded p-4">
                                        <span><i class="unicon-earth icon-3 text-secondary"></i></span>
                                        <div class="panel vstack gap-2 px-1">
                                            <h3 class="h2 lg:h3 m-0">Impact</h3>
                                            <p class="fs-3 lg:fs-5">We are driven by the tangible, positive transformation our software brings to critical sectors.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Core Values end -->

        <!-- Section start -->
        <div id="section_company_overview" class="section-company-overview section panel bg-primary-25 dark:bg-gray-900 overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div class="panel vstack items-center gap-2 xl:gap-3 mb-3 sm:mb-8 xl:mb-9 sm:max-w-600px lg:max-w-950px mx-auto text-center">
                            <h2 class="display-4 sm:display-3 lg:display-2 m-0">Tackling foundational challenges across key sectors.</h2>
                        </div>
                        <div class="panel mb-4 sm:mb-8 xl:mb-9">
                            <div class="row sm:child-cols-6 lg:child-cols-4 g-4 justify-center col-match">
                                <div>
                                    <div class="panel bg-white dark:bg-primary p-4 xl:p-6 rounded vstack gap-4 items-center border">
                                        <div class="panel w-128px h-128px rounded-circle cstack bg-primary-25">
                                            <i class="unicon-education icon-4 text-primary"></i>
                                        </div>
                                        <div class="panel vstack gap-2 items-center text-center">
                                            <h3 class="h3 m-0">OII</h3>
                                            <p class="fs-4"><strong>University Infrastructure:</strong> Modernizing administrative, academic, and financial operations for higher education institutions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel bg-white dark:bg-primary p-4 xl:p-6 rounded vstack gap-4 items-center border">
                                        <div class="panel w-128px h-128px rounded-circle cstack bg-primary-25">
                                            <i class="unicon-shield icon-4 text-primary"></i>
                                        </div>
                                        <div class="panel vstack gap-2 items-center text-center">
                                            <h3 class="h3 m-0">CoreSure</h3>
                                            <p class="fs-4"><strong>Insurance Infrastructure:</strong> High-integrity systems for policy management, seamless claims processing, and fraud detection.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel bg-white dark:bg-primary p-4 xl:p-6 rounded vstack gap-4 items-center border">
                                        <div class="panel w-128px h-128px rounded-circle cstack bg-primary-25">
                                            <i class="unicon-building icon-4 text-primary"></i>
                                        </div>
                                        <div class="panel vstack gap-2 items-center text-center">
                                            <h3 class="h3 m-0">LandCerta</h3>
                                            <p class="fs-4"><strong>Land Verification System:</strong> An immutable infrastructure to prevent scams and ensure transparent property transactions before purchase.</p>
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
        <div id="team" class="section-team section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                        <div class="panel vstack items-center gap-2 xl:gap-3 mb-3 sm:mb-8 xl:mb-9 sm:max-w-600px lg:max-w-950px mx-auto text-center">
                            <h2 class="display-4 sm:display-3 lg:display-2 m-0">The architects building our digital future.</h2>
                        </div>
                    </div>
                    <div class="panel section-content">
                        <div class="row sm:child-cols-6 lg:child-cols-4 items-center justify-center g-4">
                            <!-- Team Member 1 -->
                            <div>
                                <div class="panel bg-primary-25 dark:bg-gray-800 rounded overflow-hidden">
                                    <figure class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden rounded-bottom-0 ">
                                        <img class="media-cover image " src="{{ asset('assets/images/avatars/01.jpg') }}" alt="Mutiullahi Tesleem">
                                    </figure>
                                    <div class="panel p-3 pb-0">
                                        <div class="panel vstack gap-1 text-center pb-3">
                                            <h4 class="h3 m-0">Mutiullahi Tesleem</h4>
                                            <p class="fs-5">Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Team Member 2 -->
                            <div>
                                <div class="panel bg-primary-25 dark:bg-gray-800 rounded overflow-hidden">
                                    <figure class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden rounded-bottom-0 ">
                                        <img class="media-cover image " src="{{ asset('assets/images/avatars/04.jpg') }}" alt="Afolabi Riskat">
                                    </figure>
                                    <div class="panel p-3 pb-0">
                                        <div class="panel vstack gap-1 text-center pb-3">
                                            <h4 class="h3 m-0">Afolabi Riskat</h4>
                                            <p class="fs-5">CEO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Team Member 3 -->
                            <div>
                                <div class="panel bg-primary-25 dark:bg-gray-800 rounded overflow-hidden">
                                    <figure class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden rounded-bottom-0 ">
                                        <img class="media-cover image " src="{{ asset('assets/images/avatars/05.jpg') }}" alt="Habeebullah Ashraf">
                                    </figure>
                                    <div class="panel p-3 pb-0">
                                        <div class="panel vstack gap-1 text-center pb-3">
                                            <h4 class="h3 m-0">Habeebullah Ashraf</h4>
                                            <p class="fs-5">Technical Team</p>
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
        
        <!-- CTA Section -->
        <div id="section_cta" class="section-cta section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="panel rounded-3 bg-primary text-white overflow-hidden p-4 sm:p-6 lg:p-8">
                            <div class="row items-center g-4 lg:g-8">
                                <div class="lg:col-6">
                                    <div class="panel vstack gap-3 text-center lg:text-start">
                                        <h2 class="display-4 m-0 text-white">Join us in building the infrastructure of tomorrow.</h2>
                                        <p class="fs-4 opacity-80">Whether you need to scale your operations or secure your assets, Cortia Technology is your partner in growth.</p>
                                    </div>
                                </div>
                                <div class="lg:col-6">
                                    <div class="panel vstack items-center gap-2">
                                        <a href="{{ url('/contact') }}" class="btn btn-lg bg-white text-primary fw-bold w-100 sm:w-auto">Contact Our Team</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Section end -->

    </div>

@endsection
