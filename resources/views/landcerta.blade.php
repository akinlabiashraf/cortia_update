@extends('layouts.app')
@section('body_class', 'uni-body panel home-three text-gray-900 dark:bg-black dark:text-white')

@section('content')
<style>
    .purple-icon {
        filter: brightness(0) saturate(100%) invert(67%) sepia(76%) saturate(2337%) hue-rotate(222deg) brightness(101%) contrast(99%) !important;
    }
</style>
<div id="wrapper" class="wrap">
    
    <!-- Header start -->
    <div id="hero_header" class="hero-header hero-seven-scene section panel overflow-hidden text-white xl:h-100">
        <div class="position-absolute top-0 start-0 end-0 w-100 h-100 bg-primary overflow-y-hidden">
            <div class="panel">
                <img src="{{ asset('assets/images/common/background-05.png') }}" alt="background" class="background position-absolute z-9 opacity-50 mask-x-3">
                <img src="{{ asset('assets/images/common/ellipse-03.png') }}" alt="ellipse" class="ellipse-03 position-absolute z-0 opacity-80">
                <img src="{{ asset('assets/images/common/ellipse-04.png') }}" alt="ellipse" class="ellipse-04 position-absolute z-0 opacity-80">
                <img src="{{ asset('assets/images/common/ellipse-05.png') }}" alt="ellipse" class="ellipse-05 position-absolute z-0 opacity-80">
                <img src="{{ asset('assets/images/common/ellipse-06.png') }}" alt="ellipse" class="ellipse-06 position-absolute z-0 opacity-80">
            </div>
        </div>
        <div class="section-outer panel pt-9 lg:pt-10">
            <div class="container sm:max-w-xl xl:max-w-2xl">
                <div class="panel section-inner d-flex flex-column items-center justify-center gap-4" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                    <!-- <img src="{{ asset('assets/images/common/shape-02.svg') }}" alt="Icon" class="common-02 position-absolute w-80px xl:w-64px text-yellow-400 d-none xl:d-block z-999">
                    <img src="{{ asset('assets/images/common/shape-01.svg') }}" alt="Icon" class="common-01 position-absolute w-64px xl:w-80px text-yellow-400 d-none xl:d-block z-999"> -->
                    <div class="panel" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <div class="panel vstack justify-center gap-3 text-center max-w-950px">
                            <div class="panel hstack justify-center">
                                <div class="panel bg-primary-400 hstack items-center gap-1 p-narrow rounded pe-2">
                                    <span class="badge rounded bg-secondary text-primary cstack p-1">Ecosystem</span>
                                    <span class="text-white">Cortia Ecosystem</span>
                                </div>
                            </div>
                            <div class="panel">
                                <h1 class="display-4 md:display-2 xl:display-1 text-inherit xl:w-800px">Landcerta: Restoring Trust in <span class="text-secondary">African Real Estate</span></h1>
                                <p class="fs-4 text-inherit">Dismantling property fraud, double-selling scams, and opaque documentation <br class="d-none sm:d-block"> through a transparent, parcel-based digital registry.</p>
                                <img class="position-absolute text-yellow-400 h-64px d-none xl:d-block" src="{{ asset('assets/images/common/arrow-01.svg') }}" alt="arrow" style="right: 12%; bottom: -26%; transform: rotate(330deg);">
                            </div>
                            <div class="panel vstack sm:hstack justify-center gap-2 xl:mt-2">
                                <a class="btn btn-md bg-white border-0 text-primary text-none d-inline-flex w-100 sm:w-fit justify-center" href="#section_problem">Explore the Platform
                                    <i class="icon lg:icon-1 unicon unicon-arrow-down"></i>
                                </a>
                                <a class="btn btn-md bg-secondary border-0 text-primary text-none hstack justify-center w-100 sm:w-fit" href="{{ url('/contact') }}">
                                    Request Product Demo
                                    <i class="icon lg:icon-1 unicon unicon-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="panel mt-4 vstack items-center" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 950;">
                            <img class="w-500px ms-5 rounded-3 shadow-lg" src="{{ asset('assets/images/solutions/landcerta-app.png') }}" alt="Landcerta App Preview">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header end -->

    <!-- Features start -->
    <div id="section_features" class="section-features section panel overflow-hidden bg-light py-6 lg:py-8 xl:py-10 border-bottom">
        <div class="section-outer panel">
            <div class="container sm:max-w-xl xl:max-w-2xl">
                <div class="section-inner panel" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                    <div class="panel vstack items-center gap-2 xl:gap-3 mb-4 sm:mb-8 xl:mb-9 sm:max-w-600px xl:max-w-950px mx-auto text-center">
                        <h2 class="display-4 xl:display-2 m-0 text-black fw-bold">Innovative Trust Infrastructure for <span class="text-secondary">Secure Land Registry</span></h2>
                        <p class="fs-4 xl:w-700px text-secondary">Protect your real estate investments, trace custody lineage, and verify legal coordinates using our digital security suite.</p>
                    </div>
                    <div class="panel">
                        <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-3 g-2" data-anime="targets: > *; onview: -150; translateY: [16, 0]; opacity: [0, 1]; easing: easeOutExpo; duration: 750; delay: anime.stagger(100, {start: 500});">
                            <div class="lg:pt-6 xl:pt-8">
                                <div class="feature-item panel p-3 xl:p-4 vstack gap-3 xl:gap-4 rounded bg-primary uc-dark">
                                    <img class="w-48px text-white filter-white" src="{{ asset('assets/images/icons/safe-box.svg') }}" alt="icon">
                                    <div class="vstack items-start gap-2 xl:gap-3">
                                        <h4 class="title h3 m-0 text-white fw-bold">Instant Parcel Verification</h4>
                                        <p class="desc fs-5 xl:fs-4 text-white opacity-85">Instantly verify coordinates, mapping layers, and government gazette records.</p>
                                        <a class="link-btn btn btn-text gap-1 fs-6 xl:fs-5 fw-light pb-0 mt-narrow xl:mt-1 text-white border-bottom border-white">
                                            <span>Learn More</span>
                                            <i class="icon xl:icon-1 unicon-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a class="position-cover" href="{{ url('/contact') }}"></a>
                                </div>
                            </div>
                            <div>
                                <div class="feature-item panel p-3 xl:p-4 vstack gap-3 xl:gap-4 rounded bg-primary-25 dark:bg-opacity-5 hover:bg-primary hover:text-white transition shadow-xs">
                                    <img class="w-48px text-primary purple-icon" src="{{ asset('assets/images/icons/chart-histogram.svg') }}" alt="icon">
                                    <div class="vstack items-start gap-2 xl:gap-3">
                                        <h4 class="title h3 m-0 fw-bold dark:text-white">Immutable Data Logs</h4>
                                        <p class="desc fs-5 xl:fs-4 text-secondary dark:text-white">Trace ownership history and chronological title transactions without tampering.</p>
                                        <a class="link-btn btn btn-text gap-1 fs-6 xl:fs-5 fw-light pb-0 mt-narrow xl:mt-1 dark:text-white text-primary">
                                            <span>Learn More</span>
                                            <i class="icon xl:icon-1 unicon-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a class="position-cover" href="{{ url('/contact') }}"></a>
                                </div>
                            </div>
                            <div class="lg:pt-6 xl:pt-8">
                                <div class="feature-item panel p-3 xl:p-4 vstack gap-3 xl:gap-4 rounded bg-primary-25 dark:bg-opacity-5 hover:bg-primary hover:text-white transition shadow-xs">
                                    <img class="w-48px text-primary purple-icon" src="{{ asset('assets/images/icons/transaction-operation.svg') }}" alt="icon">
                                    <div class="vstack items-start gap-2 xl:gap-3">
                                        <h4 class="title h3 m-0 fw-bold dark:text-white">Secure Escrow</h4>
                                        <p class="desc fs-5 xl:fs-4 text-secondary dark:text-white">Mitigate buyer risk by securing funds in licensed custody until title verification is complete.</p>
                                        <a class="link-btn btn btn-text gap-1 fs-6 xl:fs-5 fw-light pb-0 mt-narrow xl:mt-1 dark:text-white text-primary">
                                            <span>Learn More</span>
                                            <i class="icon xl:icon-1 unicon-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a class="position-cover" href="{{ url('/contact') }}"></a>
                                </div>
                            </div>
                            <div>
                                <div class="feature-item panel p-3 xl:p-4 vstack gap-3 xl:gap-4 rounded bg-primary-25 dark:bg-opacity-5 hover:bg-primary hover:text-white transition shadow-xs">
                                    <img class="w-48px text-primary purple-icon" src="{{ asset('assets/images/icons/deposit-alt.svg') }}" alt="icon">
                                    <div class="vstack items-start gap-2 xl:gap-3">
                                        <h4 class="title h3 m-0 fw-bold dark:text-white">Conflict Alert System</h4>
                                        <p class="desc fs-5 xl:fs-4 text-secondary dark:text-white">Receive automated notifications on double-sales, disputed parcels, or zoning violations.</p>
                                        <a class="link-btn btn btn-text gap-1 fs-6 xl:fs-5 fw-light pb-0 mt-narrow xl:mt-1 dark:text-white text-primary">
                                            <span>Learn More</span>
                                            <i class="icon xl:icon-1 unicon-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a class="position-cover" href="{{ url('/contact') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features end -->

    <!-- Wrapper start -->
    <div id="section_how_it_works" class="section-how-it-works section panel overflow-hidden bg-white py-6 lg:py-8 xl:py-10">
        <div class="section-outer panel">
            <div class="container sm:max-w-xl xl:max-w-2xl">
                <div class="panel" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                    <div class="row child-cols-12 g-6 lg:g-8 xl:g-10">

                        <!-- Row 1: The Problem -->
                        <div class="panel" id="section_problem">
                            <div class="row g-5 lg:g-6 xl:g-9 items-center col-match">
                                <div class="xl:col-6">
                                    <div class="panel vstack gap-4">
                                        <div class="panel vstack gap-3">
                                            <div class="px-2 py-1 bg-danger-subtle text-danger w-fit rounded hstack items-center">
                                                <span class="w-8px h-8px rounded-circle bg-danger me-1"></span>
                                                <p class="fs-6 fw-bold m-0 text-uppercase tracking-wider">The Real Estate Challenge</p>
                                            </div>
                                            <h1 class="display-4 sm:display-3 m-0 text-black fw-bold">Have you ever been scammed while buying property?</h1>
                                            <p class="fs-5 text-gray-600 dark:text-white">In markets across Africa, buying land is often a high-risk venture. Thousands of honest buyers lose their life savings to double-selling scams, falsified document forgeries, and ghost properties that exist only on paper.</p>
                                        </div>
                                        <div class="panel">
                                            <ul class="list nav-y gap-3 text-start">
                                                <li class="hstack items-center gap-1">
                                                    <i class="icon icon-2 unicon-close-circle text-danger"></i>
                                                    <span class="fs-5 sm:fs-4 fw-light text-secondary">Double-selling scams targeting honest investors.</span>
                                                </li>
                                                <li class="hstack items-center gap-1">
                                                    <i class="icon icon-2 unicon-close-circle text-danger"></i>
                                                    <span class="fs-5 sm:fs-4 fw-light text-secondary">Falsified and forged physical title deeds.</span>
                                                </li>
                                                <li class="hstack items-center gap-1">
                                                    <i class="icon icon-2 unicon-close-circle text-danger"></i>
                                                    <span class="fs-5 sm:fs-4 fw-light text-secondary">Ghost properties and overlapping boundary claims.</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel">
                                            <a class="btn btn-md bg-danger text-white border-0 text-none w-fit" href="{{ url('/contact') }}">Report a Fraud Case
                                                <i class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-6">
                                    <div class="panel overflow-hidden rounded-3 shadow-lg border">
                                        <img class="z-99 position-relative w-100 object-cover" src="{{ asset('assets/images/solutions/landcerta-problem.png') }}" alt="Worried buyer examining document">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row 2: The Solution -->
                        <div class="panel mt-6">
                            <div class="row g-5 lg:g-6 xl:g-9 items-center">
                                <div class="xl:col-6 order-2 xl:order-1">
                                    <div class="panel overflow-hidden rounded-3 shadow-lg border">
                                        <img class="z-99 position-relative w-100 object-cover" src="{{ asset('assets/images/solutions/landcerta-app.png') }}" alt="Landcerta Tablet App Verification">
                                    </div>
                                </div>
                                <div class="xl:col-6 order-1 xl:order-2">
                                    <div class="panel vstack gap-3">
                                        <div class="px-2 py-1 bg-secondary text-primary w-fit rounded hstack items-center">
                                            <span class="w-8px h-8px rounded-circle bg-primary me-1"></span>
                                            <p class="fs-6 fw-bold m-0 text-uppercase tracking-wider">Transparency by Design</p>
                                        </div>
                                        <h1 class="display-4 sm:display-3 m-0 text-black fw-bold">Radical transparency for property acquisition</h1>
                                        <p class="fs-5 text-gray-600 dark:text-white">Landcerta maps real estate assets out into precise, immutable digital parcels, empowering buyers with absolute clarity before a transaction is made.</p>
                                        <div class="panel vstack gap-2">
                                            <ul class="uc-accordion-divider uc-accordion-chevron gap-5" data-uc-accordion="collapsible: false" style="--divider-gap: 40px">
                                                <li>
                                                    <a class="uc-accordion-title h5 lg:h4 m-0 text-black fw-bold">
                                                        <div class="hstack gap-1 lg:gap-2">
                                                            <div class="cstack w-36px h-36px bg-primary dark:bg-secondary rounded-circle">
                                                                <span class="text-white dark:text-primary">1</span>
                                                            </div>
                                                            <span>Parcel-Based Indexing</span>
                                                        </div>
                                                    </a>
                                                    <div class="uc-accordion-content mt-1 lg:mt-2">
                                                        <p class="fs-5 text-secondary">Every major layout is cataloged by precise individual lots, eliminating overlapping boundaries and double-selling claims.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="uc-accordion-title h5 lg:h4 m-0 text-black fw-bold">
                                                        <div class="hstack gap-1 lg:gap-2">
                                                            <div class="cstack w-36px h-36px bg-primary dark:bg-secondary rounded-circle">
                                                                <span class="text-white dark:text-primary">2</span>
                                                            </div>
                                                            <span>End-to-End Ownership History</span>
                                                        </div>
                                                    </a>
                                                    <div class="uc-accordion-content mt-1 lg:mt-2">
                                                        <p class="fs-5 text-secondary">Instantly trace the lineage of title deeds from past custodians to the present owner securely.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="uc-accordion-title h5 lg:h4 m-0 text-black fw-bold">
                                                        <div class="hstack gap-1 lg:gap-2">
                                                            <div class="cstack w-36px h-36px bg-primary dark:bg-secondary rounded-circle">
                                                                <span class="text-white dark:text-primary">3</span>
                                                            </div>
                                                            <span>Real-Time Data Handover</span>
                                                        </div>
                                                    </a>
                                                    <div class="uc-accordion-content mt-1 lg:mt-2">
                                                        <p class="fs-5 text-secondary">Hand over accurate property sheets, zoning laws, and verification status straight into the buyer's hands.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="btn btn-md bg-primary text-white dark:bg-white dark:text-primary border-0 text-none w-fit mt-2" href="{{ url('/contact') }}">Request Product Demo
                                            <i class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quote & Platform Overview -->
                        <div class="panel mt-6 pt-6 border-top">
                            <div class="row g-4 lg:g-6 justify-between items-center col-match">
                                <div class="lg:col-7">
                                    <div class="panel border-start border-4 border-primary p-4 bg-primary-subtle rounded shadow-xs h-100 d-flex items-center">
                                        <p class="fs-4 fw-medium m-0 text-primary-dark text-italic leading-relaxed">
                                            "By establishing an open, immutable record system, we are shifting the balance of power back to honest investors and protecting local families from predatory fraudulent schemes."
                                        </p>
                                    </div>
                                </div>
                                <div class="lg:col-5">
                                    <aside class="panel vstack gap-4 bg-light p-4 rounded shadow-sm border h-100">
                                        <div class="vstack gap-2">
                                            <h4 class="h5 text-black fw-bold m-0 d-flex items-center gap-1">
                                                <i class="unicon unicon-info-circle text-primary"></i>
                                                Platform Overview
                                            </h4>
                                            <hr class="my-1">
                                            <div class="hstack justify-between fs-6 my-1">
                                                <span class="text-muted">Product Name:</span>
                                                <span class="fw-medium text-black">Landcerta</span>
                                            </div>
                                            <div class="hstack justify-between fs-6 my-1">
                                                <span class="text-muted">Sector Focus:</span>
                                                <span class="fw-medium text-black">PropTech / Real Estate</span>
                                            </div>
                                            <div class="hstack justify-between fs-6 my-1">
                                                <span class="text-muted">Core Function:</span>
                                                <span class="fw-medium text-black">Title Verification</span>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Use Cases start -->
    <div id="section_use_cases" class="section-use-cases section panel overflow-hidden bg-primary dark:bg-gray-900 text-white py-6 lg:py-8 xl:py-10">
        <img src="{{ asset('assets/images/common/ellipse-03.png') }}" alt="ellipse" class="ellipse-03 position-absolute z-0 opacity-80 dark:d-none">
        <img src="{{ asset('assets/images/common/ellipse-05.png') }}" alt="ellipse" class="ellipse-05 position-absolute z-0 opacity-80 dark:d-none">
        <div class="section-outer panel">
            <div class="container sm:max-w-xl xl:max-w-2xl">
                <div class="section-inner panel" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                    <div class="panel vstack sm:hstack justify-between items-center gap-4">
                        <div class="panel sm:w-550px lg:w-700px">
                            <h2 class="display-4 lg:display-2 m-0 text-white fw-bold">Solving Real Estate Trust for Every Stakeholder</h2>
                        </div>
                    </div>
                </div>

                <div class="section-content panel mt-4 sm:mt-8 xl:mt-9" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                    <div class="panel main-use-cases-switcher uc-switcher overflow-hidden">

                        <!-- Tab 1: Diaspora Buyers -->
                        <div class="panel">
                            <div class="row g-4 xl:g-8 col-match">
                                <div class="sm:col-7 lg:col-7 order-2 lg:order-1">
                                    <div class="panel vstack justify-center gap-3 xl:gap-4 p-4 sm:p-5 xl:p-6 text-white bg-primary-600 dark:bg-gray-800 rounded h-100">
                                        <div class="px-2 py-1 bg-secondary text-primary w-fit rounded hstack items-center">
                                            <p class="fs-6 fw-bold m-0 text-uppercase tracking-wider">Diaspora Buyers</p>
                                        </div>
                                        <h3 class="display-5 m-0 text-white fw-bold">Eliminate Property Fraud in Africa</h3>
                                        <p class="fs-4 text-white-50">Buying land remotely carries huge risks of double-selling and forged documents. Landcerta empowers international investors to remotely verify physical coordinates and historical titles before committing funds.</p>
                                        <div class="panel border-top border-white-10 pt-3 mt-2">
                                            <h6 class="display-6 m-0 text-secondary fw-bold">Remote Verification Suite</h6>
                                            <span class="fs-6 opacity-75">Ensuring peace of mind for African property buyers globally.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-5 lg:col-5 order-1 lg:order-2">
                                    <div class="panel h-100">
                                        <div class="position-cover bg-black opacity-20 overflow-hidden top-0 start-0 end-0 rounded z-1"></div>
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden h-100 min-h-300px">
                                            <img class="media-cover image" src="{{ asset('assets/images/solutions/landcerta_diaspora_1779916864534.png') }}" alt="Diaspora land verification">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2: Developers & Agents -->
                        <div class="panel">
                            <div class="row g-4 xl:g-8 col-match">
                                <div class="sm:col-7 lg:col-7 order-2 lg:order-1">
                                    <div class="panel vstack justify-center gap-3 xl:gap-4 p-4 sm:p-5 xl:p-6 text-white bg-primary-600 dark:bg-gray-800 rounded h-100">
                                        <div class="px-2 py-1 bg-secondary text-primary w-fit rounded hstack items-center">
                                            <p class="fs-6 fw-bold m-0 text-uppercase tracking-wider">Real Estate Developers</p>
                                        </div>
                                        <h3 class="display-5 m-0 text-white fw-bold">Accelerate Sales with Audited Transparency</h3>
                                        <p class="fs-4 text-white-50">Showcase certified, dispute-free layouts. By presenting an immutable digital pedigree, verified developers stand out in crowded markets, secure instant buyer trust, and accelerate closure rates.</p>
                                        <div class="panel border-top border-white-10 pt-3 mt-2">
                                            <h6 class="display-6 m-0 text-secondary fw-bold">Certified Developer Badge</h6>
                                            <span class="fs-6 opacity-75">Close property deals 3x faster with open proof of ownership.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-5 lg:col-5 order-1 lg:order-2">
                                    <div class="panel h-100">
                                        <div class="position-cover bg-black opacity-20 overflow-hidden top-0 start-0 end-0 rounded z-1"></div>
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden h-100 min-h-300px">
                                            <img class="media-cover image" src="{{ asset('assets/images/solutions/landcerta-developers.png') }}" alt="Developers showing verified plots">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3: Financial Institutions -->
                        <div class="panel">
                            <div class="row g-4 xl:g-8 col-match">
                                <div class="sm:col-7 lg:col-7 order-2 lg:order-1">
                                    <div class="panel vstack justify-center gap-3 xl:gap-4 p-4 sm:p-5 xl:p-6 text-white bg-primary-600 dark:bg-gray-800 rounded h-100">
                                        <div class="px-2 py-1 bg-secondary text-primary w-fit rounded hstack items-center">
                                            <p class="fs-6 fw-bold m-0 text-uppercase tracking-wider">Banks & Lenders</p>
                                        </div>
                                        <h3 class="display-5 m-0 text-white fw-bold">Risk-Free Mortgage and Collateral Auditing</h3>
                                        <p class="fs-4 text-white-50">Mitigate default risks due to disputed real estate. Banks and mortgage institutions use Landcerta to instantly trace historical land titles, ensuring security for loans and acquisitions.</p>
                                        <div class="panel border-top border-white-10 pt-3 mt-2">
                                            <h6 class="display-6 m-0 text-secondary fw-bold">Institutional Title Escrow</h6>
                                            <span class="fs-6 opacity-75">Automated compliance, zoning audits, and boundary settlement alerts.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-5 lg:col-5 order-1 lg:order-2">
                                    <div class="panel h-100">
                                        <div class="position-cover bg-black opacity-20 overflow-hidden top-0 start-0 end-0 rounded z-1"></div>
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden h-100 min-h-300px">
                                            <img class="media-cover image" src="{{ asset('assets/images/solutions/landcerta-lenders.png') }}" alt="Bank mortgage assessment">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Tabs -->
                    <div class="panel mt-4 sm:mt-6">
                        <ul class="main-use-cases-nav hstack gap-2 justify-center text-center overflow-auto lg:overflow-hidden bg-white bg-opacity-10 rounded p-1" data-uc-switcher="connect: .main-use-cases-switcher; animation: uc-animation-fade;">
                            <li class="flex-grow-1"><a class="btn btn-sm text-none text-white py-1 px-3" href="#">Diaspora Investors</a></li>
                            <li class="flex-grow-1"><a class="btn btn-sm text-none text-white py-1 px-3" href="#">Real Estate Developers</a></li>
                            <li class="flex-grow-1"><a class="btn btn-sm text-none text-white py-1 px-3" href="#">Mortgage Institutions</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Use Cases end -->
</div>
@endsection