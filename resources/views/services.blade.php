@extends('layouts.app')

@section('content')

    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">

        <!-- Hero start -->
        <div id="hero_header" class="hero-header hero-seven-scene section panel overflow-hidden text-dark dark:text-white h-100 xl:h-screen">
            <div class="section-outer panel pt-9 lg:pt-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="panel section-inner" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <div class="row g-6 items-center">
                            <div class="lg:col-7">
                                <div class="panel vstack gap-2 sm:gap-3">
                                    <h1 class="display-4 sm:display-2 m-0">Industrial-Grade <span class="text-secondary">Infrastructure</span> for Africa</h1>
                                    <p class="fs-4 sm:fs-3">Cortia Technology provides the foundational technological layers powering specialized industries through robust, scalable, and secure infrastructure stacks.</p>
                                </div>
                                <div class="panel hstack gap-2 mt-3 sm:mt-4">
                                    <a class='btn btn-md bg-primary text-white dark:bg-white dark:text-primary border-0 text-none d-inline-flex' href='{{ url('/contact') }}'>Schedule a Discovery Session
                                        <i class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="panel hstack gap-2 mt-3 sm:mt-4 lg:mt-3 items-center">
                                    <div class="panel vstack gap-1">
                                        <span class="fs-6 opacity-70">Trusted by organizations across Africa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-5">
                                <div class="panel">
                                    <figure class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden xl:h-600px ">
                                        <img class="media-cover image " src="{{ asset('assets/images/template/hero-02.png') }}" alt="Infrastructure Dashboard">
                                    </figure>
                                    <img class="rounded position-absolute top-4 start-4 w-150px d-none lg:d-block shadow-md" src="{{ asset('assets/images/template/revenue.png') }}" alt="Metrics">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero end -->

        <!-- Brands start -->
        <div id="section_brands" class="section-brands section panel overflow-hidden">
            <div class="section-outer panel">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="panel vstack items-center gap-4 lg:hstack lg:gap-8 p-4 bg-primary-25 dark:bg-gray-900 rounded mt-5 sm:mt-6 lg:mt-0">
                            <div class="panel">
                                <h5 class="h2 lg:h5 m-0 text-center lg:text-start">Institutions powered by Cortia</h5>
                            </div>
                            <div class="brands panel">
                                <div class="row child-cols-4 sm:child-cols items-center justify-center text-center g-2 sm:g-6 xl:g-9">
                                    <div><img class="dark:text-white" src="{{ asset('assets/images/brands/brand-01.svg') }}" data-uc-svg alt="Partner Institution"></div>
                                    <div><img class="dark:text-white" src="{{ asset('assets/images/brands/brand-02.svg') }}" data-uc-svg alt="Partner Institution"></div>
                                    <div><img class="dark:text-white" src="{{ asset('assets/images/brands/brand-03.svg') }}" data-uc-svg alt="Partner Institution"></div>
                                    <div><img class="dark:text-white" src="{{ asset('assets/images/brands/brand-04.svg') }}" data-uc-svg alt="Partner Institution"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brands end -->

        <!-- Features grid start -->
        <div id="section_features" class="section-features section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="panel vstack items-center gap-2 xl:gap-3 mb-4 sm:mb-8 xl:mb-9 sm:max-w-600px xl:max-w-700px mx-auto text-center">
                            <h2 class="display-4 sm:display-3 xl:display-2 m-0">Core Infrastructure Capabilities</h2>
                            <p class="fs-5 lg:fs-4">Built from the ground up for resilience and scale, our technology layers are designed to solve intrinsic operational challenges.</p>
                        </div>
                        <div class="panel">
                            <div class="row sm:child-cols-6 xl:child-cols-3 g-4 col-match">
                                <div>
                                    <div class="panel vstack gap-4 bg-primary-25 dark:bg-primary dark:text-white rounded p-4">
                                        <span><img class="text-secondary w-40px" src="{{ asset('assets/images/icons/home-02/diamond.svg') }}" alt="Icon" data-uc-svg></span>
                                        <div class="panel vstack gap-2 px-1">
                                            <h3 class="h2 lg:h3 m-0">Offline-First Resilience</h3>
                                            <p class="fs-3 lg:fs-5">Designed to function seamlessly even in areas with intermittent internet access.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-4 bg-primary-25 dark:bg-primary dark:text-white rounded p-4">
                                        <span><img class="text-secondary w-40px" src="{{ asset('assets/images/icons/home-02/lock.svg') }}" alt="Icon" data-uc-svg></span>
                                        <div class="panel vstack gap-2 px-1">
                                            <h3 class="h2 lg:h3 m-0">End-to-End Encryption</h3>
                                            <p class="fs-3 lg:fs-5">Military-grade security protocols ensuring all transit and at-rest data remains uncompromised.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-4 bg-primary-25 dark:bg-primary dark:text-white rounded p-4">
                                        <span><img class="text-secondary w-40px" src="{{ asset('assets/images/icons/home-02/machine-learning.svg') }}" alt="Icon" data-uc-svg></span>
                                        <div class="panel vstack gap-2 px-1">
                                            <h3 class="h2 lg:h3 m-0">Immutable Audit Trails</h3>
                                            <p class="fs-3 lg:fs-5">High-integrity logging for all system actions to guarantee accountability and transparency.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-4 bg-primary-25 dark:bg-primary dark:text-white rounded p-4">
                                        <span><img class="text-secondary w-40px" src="{{ asset('assets/images/icons/home-02/chart-notification.svg') }}" alt="Icon" data-uc-svg></span>
                                        <div class="panel vstack gap-2 px-1">
                                            <h3 class="h2 lg:h3 m-0">Scalable Architecture</h3>
                                            <p class="fs-3 lg:fs-5">Built on robust microservices allowing platforms to scale indefinitely as demands grow.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features grid end -->

        <!-- Deployment Methodology start -->
        <div id="section_about" class="section-about section panel overflow-hidden bg-gray-25 dark:bg-gray-900 py-6 lg:py-8 xl:py-10">
            <div class="section-outer panel">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="section-content">
                            <div class="row xl:child-cols-6 g-4 lg:g-6 xl:g-10 items-center col-match">
                                <div>
                                    <div class="panel">
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 rounded overflow-hidden ">
                                            <img class="media-cover image " src="{{ asset('assets/images/about/about-02.png') }}" alt="Methodology">
                                        </figure>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-4">
                                        <div class="panel vstack gap-3">
                                            <h2 class="display-3 m-0">Our Deployment Methodology</h2>
                                            <p class="fs-4">We do not believe in off-the-shelf software for critical sectors. Every implementation is a tailored process designed to align with existing operational realities.</p>
                                        </div>
                                        <div class="panel">
                                            <ul class="list nav-y gap-3 text-start">
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-4 fw-light"><b>1. Asset Audit:</b> Comprehensive evaluation of existing systems.</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-4 fw-light"><b>2. Architecture:</b> Designing the resilient technical blueprint.</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-4 fw-light"><b>3. Implementation:</b> Phased rollout minimizing disruption.</span>
                                                </li>
                                                <li class="hstack itmes-center gap-1">
                                                    <i class="icon icon-2 unicon-checkmark-outline text-secondary"></i>
                                                    <span class="fs-4 fw-light"><b>4. Governance:</b> Long-term maintenance and scaling.</span>
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
        <!-- Deployment Methodology end -->

        <!-- CTA Section -->
        <div id="section_cta" class="section-cta section panel overflow-hidden">
            <div class="section-outer panel py-6 lg:py-8 xl:py-10">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                        <div class="panel rounded-3 bg-primary text-white overflow-hidden p-4 sm:p-6 lg:p-8">
                            <div class="row items-center g-4 lg:g-8">
                                <div class="lg:col-6">
                                    <div class="panel vstack gap-3 text-center lg:text-start">
                                        <h2 class="display-4 m-0 text-white">Ready to upgrade your institutional infrastructure?</h2>
                                        <p class="fs-4 opacity-80">Partner with Cortia Technology to build the foundations your organization needs to thrive.</p>
                                    </div>
                                </div>
                                <div class="lg:col-6">
                                    <div class="panel vstack items-center gap-2">
                                        <a href="{{ url('/contact') }}" class="btn btn-lg bg-white text-primary fw-bold w-100 sm:w-auto">Schedule a Discovery Call</a>
                                        <p class="fs-7 opacity-70">No commitment required. Let's discuss your technical needs.</p>
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
