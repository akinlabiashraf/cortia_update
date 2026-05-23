@extends('layouts.app')

@section('content')

    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">

        <!-- Header start -->
        <div id="hero_header" class="hero-header section panel overflow-hidden h-100">
            <div class="section-outer panel pt-9 lg:pt-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="panel section-inner d-flex flex-column items-center justify-center gap-4" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <img src="{{ asset('assets/images/common/common-01.svg') }}" alt="Icon" class="common-01 d-inline-block position-absolute w-64px xl:w-80px text-primary d-none xl:d-block z-999" data-uc-svg>
                        <img src="{{ asset('assets/images/common/shape-02.svg') }}" alt="Icon" class="shape-02 position-absolute w-80px xl:w-64px text-primary d-none xl:d-block z-999">
                        <img src="{{ asset('assets/images/common/shape-01.svg') }}" alt="Icon" class="shape-01 position-absolute w-64px xl:w-80px text-primary d-none xl:d-block z-999">
                        <div class="panel" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                            <div class="panel vstack justify-center gap-3 text-center max-w-950px mx-auto">
                                <div class="panel vstack items-center">
                                    <h1 class="display-4 md:display-2 lg:display-1 m-0">Our <span class="text-secondary">Ventures</span></h1>
                                    <p class="fs-4 lg:w-600px mt-2">Discover how Cortia Technology powers Africa’s most critical sectors—Education, Insurance, and Real Estate—with high-integrity software infrastructure.</p>
                                </div>
                                <div class="panel cstack gap-1 sm:gap-2 mt-2 xl:mt-4">
                                    <a class='btn btn-md bg-primary dark:bg-secondary border-0 text-white dark:text-primary text-none d-inline-flex' href='#landcerta' data-uc-scroll>Explore Projects
                                        <i class="icon lg:icon-1 unicon unicon-arrow-down"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header end -->

        <!-- Project 1: LandCerta start -->
        <div id="landcerta" class="section-feature section panel overflow-hidden pt-6 lg:pt-8 xl:pt-10">
            <div class="section-outer panel">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="section-content">
                            <div class="row xl:child-cols-6 g-4 lg:g-6 xl:g-10 items-center col-match">
                                <div>
                                    <div class="panel">
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden">
                                            <img class="media-cover image" src="{{ asset('assets/images/template/feature-01.png') }}" alt="LandCerta Platform">
                                        </figure>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-4">
                                        <div class="panel vstack gap-2">
                                            <div class="w-64px h-64px cstack bg-primary-25 rounded-circle mb-2">
                                                <i class="unicon-building icon-3 text-primary"></i>
                                            </div>
                                            <h2 class="display-4 m-0 text-primary dark:text-white">LandCerta</h2>
                                            <p class="fs-4 fw-bold">Property Verification Infrastructure</p>
                                            <p class="fs-5">An immutable infrastructure designed to prevent scams and ensure transparent property transactions before purchase. LandCerta provides definitive proof of ownership and land history.</p>
                                        </div>
                                        <div class="panel">
                                            <ul class="list nav-y gap-3 text-start">
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-5">Immutable Digital Titles & Ownership Records</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-5">Real-time Encumbrance & Dispute Checking</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-5">Integration with Government Land Registries</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project 1: LandCerta end -->

        <!-- Project 2: CoreSure start -->
        <div id="coresure" class="section-feature section panel overflow-hidden bg-gray-25 dark:bg-gray-900 py-6 lg:py-8 xl:py-10 mt-6 lg:mt-8 xl:mt-10">
            <div class="section-outer panel">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="section-content">
                            <div class="row xl:child-cols-6 g-4 lg:g-6 xl:g-10 items-center col-match">
                                <div class="xl:order-2">
                                    <div class="panel">
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden">
                                            <img class="media-cover image" src="{{ asset('assets/images/template/feature-02.png') }}" alt="CoreSure Platform">
                                        </figure>
                                    </div>
                                </div>
                                <div class="xl:order-1">
                                    <div class="panel vstack gap-4">
                                        <div class="panel vstack gap-2">
                                            <div class="w-64px h-64px cstack bg-secondary rounded-circle mb-2 text-primary">
                                                <i class="unicon-shield icon-3"></i>
                                            </div>
                                            <h2 class="display-4 m-0 text-primary dark:text-white">CoreSure</h2>
                                            <p class="fs-4 fw-bold">Insurance Operations Infrastructure</p>
                                            <p class="fs-5">High-integrity systems for policy management, seamless claims processing, and automated fraud detection. CoreSure enables insurers to scale operations securely across the continent.</p>
                                        </div>
                                        <div class="panel">
                                            <ul class="list nav-y gap-3 text-start">
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-5">Automated Claims Validation & Routing</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-5">Centralized Policyholder Management</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-5">AI-driven Risk Assessment Tooling</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project 2: CoreSure end -->

        <!-- Project 3: OII start -->
        <div id="oii" class="section-feature section panel overflow-hidden py-6 lg:py-8 xl:py-10">
            <div class="section-outer panel">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="section-content">
                            <div class="row xl:child-cols-6 g-4 lg:g-6 xl:g-10 items-center col-match">
                                <div>
                                    <div class="panel">
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden">
                                            <img class="media-cover image" src="{{ asset('assets/images/template/feature-03.png') }}" alt="OII Platform">
                                        </figure>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-4">
                                        <div class="panel vstack gap-2">
                                            <div class="w-64px h-64px cstack bg-gray-100 rounded-circle mb-2 text-dark">
                                                <i class="unicon-education icon-3"></i>
                                            </div>
                                            <h2 class="display-4 m-0 text-primary dark:text-white">OII</h2>
                                            <p class="fs-4 fw-bold">University Infrastructure Engine</p>
                                            <p class="fs-5">Modernizing administrative, academic, and financial operations for higher education institutions. OII bridges the gap between disparate campus systems into a unified digital ecosystem.</p>
                                        </div>
                                        <div class="panel">
                                            <ul class="list nav-y gap-3 text-start">
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-5">Integrated Student Information Systems (SIS)</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-5">Automated Tuition & Fee Collection Engines</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-5">Academic Record Tamper-proofing</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project 3: OII end -->
        
        <!-- CTA Section -->
        <div id="section_cta" class="section-cta section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="panel rounded-3 bg-primary text-white overflow-hidden p-4 sm:p-6 lg:p-8">
                            <div class="row items-center g-4 lg:g-8">
                                <div class="lg:col-6">
                                    <div class="panel vstack gap-3 text-center lg:text-start">
                                        <h2 class="display-4 m-0 text-white">Let's build your enterprise infrastructure.</h2>
                                        <p class="fs-4 opacity-80">Discover how Cortia can custom-deploy these systems for your organization.</p>
                                    </div>
                                </div>
                                <div class="lg:col-6">
                                    <div class="panel vstack items-center gap-2">
                                        <a href="{{ url('/contact') }}" class="btn btn-lg bg-white text-primary fw-bold w-100 sm:w-auto">Contact Our Engineers</a>
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
