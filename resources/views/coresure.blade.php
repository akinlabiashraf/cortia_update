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
                    <div class="panel" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <div class="panel vstack justify-center gap-3 text-center max-w-950px">
                            <div class="panel hstack justify-center">
                                <div class="panel bg-primary-400 hstack items-center gap-1 p-narrow rounded pe-2">
                                    <span class="badge rounded bg-secondary text-primary cstack p-1">Ecosystem</span>
                                    <span class="text-white">Cortia Ecosystem</span>
                                </div>
                            </div>
                            <div class="panel">
                                <h1 class="display-4 md:display-2 xl:display-1 text-inherit xl:w-800px">CoreSure: Opaque Insurance <span class="text-secondary">Made Simple</span></h1>
                                <p class="fs-4 text-inherit">Dismantling the barriers of high premium costs and broken promises <br class="d-none sm:d-block"> through reliable, micro-payment asset protection.</p>
                                <img class="position-absolute text-yellow-400 h-64px d-none xl:d-block" src="{{ asset('assets/images/common/arrow-01.svg') }}" alt="arrow" style="right: 12%; bottom: -26%; transform: rotate(330deg);">
                            </div>
                            <div class="panel vstack sm:hstack justify-center gap-2 xl:mt-2">
                                <a class="btn btn-md bg-white border-0 text-primary text-none d-inline-flex w-100 sm:w-fit justify-center" href="#section_problem_coresure">Explore the Platform
                                    <i class="icon lg:icon-1 unicon unicon-arrow-down"></i>
                                </a>
                                <a class="btn btn-md bg-secondary border-0 text-primary text-none hstack justify-center w-100 sm:w-fit" href="{{ url('/contact') }}">
                                    Request Product Demo
                                    <i class="icon lg:icon-1 unicon unicon-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="panel mt-4 vstack items-center" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 950;">
                            <img class="w-500px ms-5 rounded-3 shadow-lg" src="{{ asset('assets/images/solutions/coresure-success.png') }}" alt="CoreSure Solution Preview">
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
                        <h2 class="display-4 xl:display-2 m-0 text-black fw-bold">Innovative Trust Infrastructure for <span class="text-secondary">Micro-Insurance Protection</span></h2>
                        <p class="fs-4 xl:w-700px text-secondary">Manage your risks effortlessly with bite-sized premium contributions, transparent tracking, and automated crisis payouts.</p>
                    </div>
                    <div class="panel">
                        <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-3 g-2" data-anime="targets: > *; onview: -150; translateY: [16, 0]; opacity: [0, 1]; easing: easeOutExpo; duration: 750; delay: anime.stagger(100, {start: 500});">
                            <div class="lg:pt-6 xl:pt-8">
                                <div class="feature-item panel p-3 xl:p-4 vstack gap-3 xl:gap-4 rounded bg-primary uc-dark">
                                    <img class="w-48px text-white filter-white" src="{{ asset('assets/images/icons/deposit-alt.svg') }}" alt="icon">
                                    <div class="vstack items-start gap-2 xl:gap-3">
                                        <h4 class="title h3 m-0 text-white fw-bold">Micro-Premiums</h4>
                                        <p class="desc fs-5 xl:fs-4 text-white opacity-85">Pay tiny amounts weekly or monthly that match your real-world income patterns.</p>
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
                                    <img class="w-48px text-primary purple-icon" src="{{ asset('assets/images/icons/safe-box.svg') }}" alt="icon">
                                    <div class="vstack items-start gap-2 xl:gap-3">
                                        <h4 class="title h3 m-0 fw-bold dark:text-white">Immutable claims Engine</h4>
                                        <p class="desc fs-5 xl:fs-4 text-secondary dark:text-white">A clear digital paper trail guarantees that valid claims are processed directly.</p>
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
                                        <h4 class="title h3 m-0 fw-bold dark:text-white">Grassroots Asset Shield</h4>
                                        <p class="desc fs-5 xl:fs-4 text-secondary dark:text-white">Secure health, local shops, and yields against sudden economic shocks.</p>
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
                                    <img class="w-48px text-primary purple-icon" src="{{ asset('assets/images/icons/chart-histogram.svg') }}" alt="icon">
                                    <div class="vstack items-start gap-2 xl:gap-3">
                                        <h4 class="title h3 m-0 fw-bold dark:text-white">Economic Resilience</h4>
                                        <p class="desc fs-5 xl:fs-4 text-secondary dark:text-white">Layering financial resilience right down to underserved grassroots earners.</p>
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
                        <div class="panel" id="section_problem_coresure">
                            <div class="row g-5 lg:g-6 xl:g-9 items-center col-match">
                                <div class="xl:col-6">
                                    <div class="panel vstack gap-4">
                                        <div class="panel vstack gap-3">
                                            <div class="px-2 py-1 bg-danger-subtle text-danger w-fit rounded hstack items-center">
                                                <span class="w-8px h-8px rounded-circle bg-danger me-1"></span>
                                                <p class="fs-6 fw-bold m-0 text-uppercase tracking-wider">The Insurance Dilemma</p>
                                            </div>
                                            <h1 class="display-4 sm:display-3 m-0 text-black fw-bold">Why do traditional insurance models fail everyday people?</h1>
                                            <p class="fs-5 text-gray-600 dark:text-white">For many across Africa, insurance feels like a premium luxury that gives back nothing in return. Opaque payout structures mean families pay high amounts of money consistently, only to face endless bottlenecks or denials when attempting to claim their safety net during emergencies.</p>
                                        </div>
                                        <div class="panel">
                                            <ul class="list nav-y gap-3 text-start">
                                                <li class="hstack items-center gap-1">
                                                    <i class="icon icon-2 unicon-close-circle text-danger"></i>
                                                    <span class="fs-5 sm:fs-4 fw-light text-secondary">Endless bureaucracy and complex manual claiming procedures.</span>
                                                </li>
                                                <li class="hstack items-center gap-1">
                                                    <i class="icon icon-2 unicon-close-circle text-danger"></i>
                                                    <span class="fs-5 sm:fs-4 fw-light text-secondary">Exorbitant upfront fees and rigid annual premium demands.</span>
                                                </li>
                                                <li class="hstack items-center gap-1">
                                                    <i class="icon icon-2 unicon-close-circle text-danger"></i>
                                                    <span class="fs-5 sm:fs-4 fw-light text-secondary">Opaque payout terms and frequent claims rejections.</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel">
                                            <a class="btn btn-md bg-danger text-white border-0 text-none w-fit" href="{{ url('/contact') }}">Report a Claim Issue
                                                <i class="icon lg:icon-1 unicon unicon-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-6">
                                    <div class="panel overflow-hidden rounded-3 shadow-lg border">
                                        <img class="z-99 position-relative w-100 object-cover" src="{{ asset('assets/images/solutions/coresure-problem.png') }}" alt="Worried business owner examining shop assets">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row 2: The Solution -->
                        <div class="panel mt-6">
                            <div class="row g-5 lg:g-6 xl:g-9 items-center">
                                <div class="xl:col-6 order-2 xl:order-1">
                                    <div class="panel overflow-hidden rounded-3 shadow-lg border">
                                        <img class="z-99 position-relative w-100 object-cover" src="{{ asset('assets/images/solutions/coresure-success.png') }}" alt="CoreSure Success Family">
                                    </div>
                                </div>
                                <div class="xl:col-6 order-1 xl:order-2">
                                    <div class="panel vstack gap-3">
                                        <div class="px-2 py-1 bg-secondary text-primary w-fit rounded hstack items-center">
                                            <span class="w-8px h-8px rounded-circle bg-primary me-1"></span>
                                            <p class="fs-6 fw-bold m-0 text-uppercase tracking-wider">Radical Consistent Affordability</p>
                                        </div>
                                        <h1 class="display-4 sm:display-3 m-0 text-black fw-bold">Radical economic protection built for grassroots realities</h1>
                                        <p class="fs-5 text-gray-600 dark:text-white">CoreSure fundamentally re-engineers risk protection for the underserved. By stripping away large lump-sum demands, our platform introduces frictionless micro-payments that blend smoothly into anyone's daily cash flow without strain.</p>
                                        <div class="panel vstack gap-2">
                                            <ul class="uc-accordion-divider uc-accordion-chevron gap-5" data-uc-accordion="collapsible: false" style="--divider-gap: 40px">
                                                <li>
                                                    <a class="uc-accordion-title h5 lg:h4 m-0 text-black fw-bold">
                                                        <div class="hstack gap-1 lg:gap-2">
                                                            <div class="cstack w-36px h-36px bg-primary dark:bg-secondary rounded-circle">
                                                                <span class="text-white dark:text-primary">1</span>
                                                            </div>
                                                            <span>Frictionless Micro-Premiums</span>
                                                        </div>
                                                    </a>
                                                    <div class="uc-accordion-content mt-1 lg:mt-2">
                                                        <p class="fs-5 text-secondary">Pay tiny amounts weekly or monthly that match your real-world income patterns.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="uc-accordion-title h5 lg:h4 m-0 text-black fw-bold">
                                                        <div class="hstack gap-1 lg:gap-2">
                                                            <div class="cstack w-36px h-36px bg-primary dark:bg-secondary rounded-circle">
                                                                <span class="text-white dark:text-primary">2</span>
                                                            </div>
                                                            <span>Immutable Claims Engine</span>
                                                        </div>
                                                    </a>
                                                    <div class="uc-accordion-content mt-1 lg:mt-2">
                                                        <p class="fs-5 text-secondary">A clear digital paper trail guarantees that valid claims are processed directly without traditional delays.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="uc-accordion-title h5 lg:h4 m-0 text-black fw-bold">
                                                        <div class="hstack gap-1 lg:gap-2">
                                                            <div class="cstack w-36px h-36px bg-primary dark:bg-secondary rounded-circle">
                                                                <span class="text-white dark:text-primary">3</span>
                                                            </div>
                                                            <span>Grassroots Economic Resilience</span>
                                                        </div>
                                                    </a>
                                                    <div class="uc-accordion-content mt-1 lg:mt-2">
                                                        <p class="fs-5 text-secondary">By giving everyday citizens an uncomplicated platform to safe-keep their assets, Cortia is layering economic resilience right down to the grassroots level.</p>
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
                                            "True inclusion isn't just about reducing the price; it's about engineering security that adapts to local realities seamlessly."
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
                                                <span class="fw-medium text-black">CoreSure</span>
                                            </div>
                                            <div class="hstack justify-between fs-6 my-1">
                                                <span class="text-muted">Sector Focus:</span>
                                                <span class="fw-medium text-black">InsurTech / Micro-insurance</span>
                                            </div>
                                            <div class="hstack justify-between fs-6 my-1">
                                                <span class="text-muted">Core Function:</span>
                                                <span class="fw-medium text-black">Risk Protection & Micro-Payments</span>
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
                            <h2 class="display-4 lg:display-2 m-0 text-white fw-bold">Solving Financial Security for Every Stakeholder</h2>
                        </div>
                    </div>
                </div>

                <div class="section-content panel mt-4 sm:mt-8 xl:mt-9" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                    <div class="panel main-use-cases-switcher uc-switcher overflow-hidden">

                        <!-- Tab 1: Micro-Entrepreneurs -->
                        <div class="panel">
                            <div class="row g-4 xl:g-8 col-match">
                                <div class="sm:col-7 lg:col-7 order-2 lg:order-1">
                                    <div class="panel vstack justify-center gap-3 xl:gap-4 p-4 sm:p-5 xl:p-6 text-white bg-primary-600 dark:bg-gray-800 rounded h-100">
                                        <div class="px-2 py-1 bg-secondary text-primary w-fit rounded hstack items-center">
                                            <p class="fs-6 fw-bold m-0 text-uppercase tracking-wider">Shop Owners</p>
                                        </div>
                                        <h3 class="display-5 m-0 text-white fw-bold">Insure Your Source of Livelihood Stress-Free</h3>
                                        <p class="fs-4 text-white-50">Bite-sized commercial protection shields kiosks and retail shops from unexpected losses due to fire, theft, or natural disasters, ensuring business continuity.</p>
                                        <div class="panel border-top border-white-10 pt-3 mt-2">
                                            <h6 class="display-6 m-0 text-secondary fw-bold">Grassroots Retail Shield</h6>
                                            <span class="fs-6 opacity-75">Mitigating risk factors to secure small businesses globally.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-5 lg:col-5 order-1 lg:order-2">
                                    <div class="panel h-100">
                                        <div class="position-cover bg-black opacity-20 overflow-hidden top-0 start-0 end-0 rounded z-1"></div>
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden h-100 min-h-300px">
                                            <img class="media-cover image" src="{{ asset('assets/images/solutions/coresure_shop_owner_1779919782657.png') }}" alt="Merchant kiosk insurance">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2: Low-Wage Households -->
                        <div class="panel">
                            <div class="row g-4 xl:g-8 col-match">
                                <div class="sm:col-7 lg:col-7 order-2 lg:order-1">
                                    <div class="panel vstack justify-center gap-3 xl:gap-4 p-4 sm:p-5 xl:p-6 text-white bg-primary-600 dark:bg-gray-800 rounded h-100">
                                        <div class="px-2 py-1 bg-secondary text-primary w-fit rounded hstack items-center">
                                            <p class="fs-6 fw-bold m-0 text-uppercase tracking-wider">Low-Wage Families</p>
                                        </div>
                                        <h3 class="display-5 m-0 text-white fw-bold">Protecting Family Health and Core Assets</h3>
                                        <p class="fs-4 text-white-50">Flexible family premiums guarantee that healthcare emergencies or life transitions don't result in immediate financial catastrophe for low-wage households.</p>
                                        <div class="panel border-top border-white-10 pt-3 mt-2">
                                            <h6 class="display-6 m-0 text-secondary fw-bold">Family Resilience Plan</h6>
                                            <span class="fs-6 opacity-75">Ensuring a digital financial shield that fits your daily living.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-5 lg:col-5 order-1 lg:order-2">
                                    <div class="panel h-100">
                                        <div class="position-cover bg-black opacity-20 overflow-hidden top-0 start-0 end-0 rounded z-1"></div>
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden h-100 min-h-300px">
                                            <img class="media-cover image" src="{{ asset('assets/images/solutions/coresure-success.png') }}" alt="Family financial protection plan">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3: Institutional Partners -->
                        <div class="panel">
                            <div class="row g-4 xl:g-8 col-match">
                                <div class="sm:col-7 lg:col-7 order-2 lg:order-1">
                                    <div class="panel vstack justify-center gap-3 xl:gap-4 p-4 sm:p-5 xl:p-6 text-white bg-primary-600 dark:bg-gray-800 rounded h-100">
                                        <div class="px-2 py-1 bg-secondary text-primary w-fit rounded hstack items-center">
                                            <p class="fs-6 fw-bold m-0 text-uppercase tracking-wider">Institutional Partners</p>
                                        </div>
                                        <h3 class="display-5 m-0 text-white fw-bold">Reach Underserved Markets Safely</h3>
                                        <p class="fs-4 text-white-50">Insurtech partnerships enable large underwriters to scale risk portfolios securely down to the grassroots, backed by transparent smart-ledger ledger.</p>
                                        <div class="panel border-top border-white-10 pt-3 mt-2">
                                            <h6 class="display-6 m-0 text-secondary fw-bold">Automated Risk Distribution</h6>
                                            <span class="fs-6 opacity-75">Integrate direct micro-settlement ledgers into your core workflows.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-5 lg:col-5 order-1 lg:order-2">
                                    <div class="panel h-100">
                                        <div class="position-cover bg-black opacity-20 overflow-hidden top-0 start-0 end-0 rounded z-1"></div>
                                        <figure class="featured-image m-0 rounded ratio ratio-1x1 overflow-hidden h-100 min-h-300px">
                                            <img class="media-cover image" src="{{ asset('assets/images/solutions/coresure-success.png') }}" alt="Institutional risk distribution system">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Navigation Tabs -->
                    <div class="panel mt-4 sm:mt-6">
                        <ul class="main-use-cases-nav hstack gap-2 justify-center text-center overflow-auto lg:overflow-hidden bg-white bg-opacity-10 rounded p-1" data-uc-switcher="connect: .main-use-cases-switcher; animation: uc-animation-fade;">
                            <li class="flex-grow-1"><a class="btn btn-sm text-none text-white py-1 px-3" href="#">Micro-Entrepreneurs</a></li>
                            <li class="flex-grow-1"><a class="btn btn-sm text-none text-white py-1 px-3" href="#">Low-Wage Households</a></li>
                            <li class="flex-grow-1"><a class="btn btn-sm text-none text-white py-1 px-3" href="#">Institutional Partners</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Use Cases end -->
</div>
@endsection