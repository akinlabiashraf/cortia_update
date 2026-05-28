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
                                <div class="panel bg-white hstack items-center gap-1 p-narrow rounded pe-2">
                                    <span class="badge rounded bg-primary text-white cstack p-1">Ecosystem</span>
                                    <span class="text-primary">Cortia Ecosystem</span>
                                </div>
                            </div>
                            <div class="panel">
                                <h1 class="display-4 md:display-2 xl:display-1 text-inherit xl:w-800px">Institutional OS: Digitizing Fragmented Infrastructure</h1>
                                <p class="fs-4 text-inherit">Dismantling manual administrative bottlenecks and revenue leaks across African universities <br class="d-none sm:d-block"> and public institutions through a unified technical engine.</p>
                                <img class="position-absolute text-yellow-400 h-64px d-none xl:d-block" src="{{ asset('assets/images/common/arrow-01.svg') }}" alt="arrow" style="right: 12%; bottom: -26%; transform: rotate(330deg);">
                            </div>
                            <div class="panel vstack sm:hstack justify-center gap-2 xl:mt-2">
                                <a class="btn btn-md bg-white border-0 text-primary text-none d-inline-flex w-100 sm:w-fit justify-center" href="#section_problem_eduos">Explore the Platform
                                    <i class="icon lg:icon-1 unicon unicon-arrow-down"></i>
                                </a>
                                <a class="btn btn-md bg-white border-2 text-primary text-none hstack justify-center w-100 sm:w-fit" href="{{ url('/contact') }}">
                                    Request Product Demo
                                    <i class="icon lg:icon-1 unicon unicon-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="panel mt-4 vstack items-center" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 950;">
                            <img class="w-700px ms-5 rounded-3 shadow-lg" src="{{ asset('assets/images/solutions/eduos-success.png') }}" alt="EduOS Solution Preview">
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
                        <h2 class="display-4 xl:display-2 m-0 text-black fw-bold">Engineered for <span class="text-secondary">Local Infrastructure</span></h2>
                        <p class="fs-4 xl:w-700px text-secondary">A highly resilient operational engine built for performance under African bandwidth and power constraints.</p>
                    </div>
                    <div class="panel">
                        <div class="row child-cols-12 sm:child-cols-6 g-3 lg:g-4" data-anime="targets: > *; onview: -150; translateY: [16, 0]; opacity: [0, 1]; easing: easeOutExpo; duration: 750; delay: anime.stagger(100, {start: 500});">
                            
                            <!-- Hero Feature Card -->
                            <div>
                                <div class="feature-item panel h-100 p-4 lg:p-5 vstack gap-4 rounded-3 bg-primary text-white shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden relative group">
                                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 w-150px h-150px bg-white opacity-10 rounded-circle blur-2"></div>
                                    
                                    <div class="w-64px h-64px cstack bg-white rounded-circle shadow-sm text-primary mb-2 z-1">
                                        <img class="w-32px filter-primary" style="filter: brightness(0) saturate(100%) invert(20%) sepia(85%) saturate(3015%) hue-rotate(258deg) brightness(84%) contrast(98%);" src="{{ asset('assets/images/icons/database-setting.svg') }}" alt="icon">
                                    </div>
                                    <div class="vstack items-start gap-2 z-1">
                                        <h4 class="title h3 m-0 text-white fw-bold">Bandwidth-Optimized Data</h4>
                                        <p class="desc fs-5 text-white opacity-85">Lightweight software structures designed to perform perfectly under intermittent local network conditions.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Standard Feature Card 1 -->
                            <div>
                                <div class="feature-item panel h-100 p-4 lg:p-5 vstack gap-4 rounded-3 bg-white text-dark shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
                                    <div class="w-64px h-64px cstack bg-primary-100 rounded-circle text-primary mb-2">
                                        <img class="w-32px purple-icon" src="{{ asset('assets/images/icons/receipt.svg') }}" alt="icon">
                                    </div>
                                    <div class="vstack items-start gap-2">
                                        <h4 class="title h3 m-0 fw-bold">Zero-Leak Bursary Trails</h4>
                                        <p class="desc fs-5 text-secondary">Every transaction is automatically tied to a single auditable ledger, sealing revenue gaps.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Standard Feature Card 2 -->
                            <div>
                                <div class="feature-item panel h-100 p-4 lg:p-5 vstack gap-4 rounded-3 bg-white text-dark shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
                                    <div class="w-64px h-64px cstack bg-primary-100 rounded-circle text-primary mb-2">
                                        <img class="w-32px purple-icon" src="{{ asset('assets/images/icons/shield-check.svg') }}" alt="icon">
                                    </div>
                                    <div class="vstack items-start gap-2">
                                        <h4 class="title h3 m-0 fw-bold">Secure Core Registry</h4>
                                        <p class="desc fs-5 text-secondary">Digital identification rosters and end-to-end trace logs for bulletproof records management.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Standard Feature Card 3 -->
                            <div>
                                <div class="feature-item panel h-100 p-4 lg:p-5 vstack gap-4 rounded-3 bg-white text-dark shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-gray-100">
                                    <div class="w-64px h-64px cstack bg-primary-100 rounded-circle text-primary mb-2">
                                        <img class="w-32px purple-icon" src="{{ asset('assets/images/icons/server-network.svg') }}" alt="icon">
                                    </div>
                                    <div class="vstack items-start gap-2">
                                        <h4 class="title h3 m-0 fw-bold">High-Capacity CBT Engine</h4>
                                        <p class="desc fs-5 text-secondary">Secure, local-server-driven exam systems built to withstand power or network drops.</p>
                                    </div>
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
                        <div class="panel" id="section_problem_eduos">
                            <div class="row g-5 lg:g-6 xl:g-9 items-center col-match">
                                <div class="xl:col-6">
                                    <div class="panel vstack gap-4">
                                        <div class="panel vstack gap-3">
                                            <div class="px-3 py-1 bg-danger text-white w-fit rounded-pill hstack items-center shadow-xs">
                                                <i class="icon unicon-warning me-1"></i>
                                                <p class="fs-7 fw-bold m-0 text-uppercase tracking-wider">The Administrative Drag</p>
                                            </div>
                                            <h1 class="display-4 sm:display-3 m-0 text-black fw-bold">What is shackling African institutions?</h1>
                                            <p class="fs-5 text-gray-600 dark:text-white leading-relaxed">Across many higher education environments and public institutions in Africa, everyday administration relies on fragmented, paper-heavy systems. Disconnected registries and manual payment reconciliations cause operational bottlenecks and massive revenue leakages.</p>
                                        </div>
                                        <div class="panel">
                                            <ul class="list nav-y gap-3 text-start">
                                                <li class="hstack items-start gap-3 p-3 bg-light rounded-3 border border-gray-100 transition-all hover:-translate-y-1 hover:shadow-sm">
                                                    <div class="w-32px h-32px cstack bg-white rounded-circle shadow-xs text-danger flex-none">
                                                        <i class="icon icon-1 unicon-close"></i>
                                                    </div>
                                                    <span class="fs-5 sm:fs-5 fw-medium text-dark mt-1">Catastrophic, untraceable file loss and vulnerabilities.</span>
                                                </li>
                                                <li class="hstack items-start gap-3 p-3 bg-light rounded-3 border border-gray-100 transition-all hover:-translate-y-1 hover:shadow-sm">
                                                    <div class="w-32px h-32px cstack bg-white rounded-circle shadow-xs text-danger flex-none">
                                                        <i class="icon icon-1 unicon-close"></i>
                                                    </div>
                                                    <span class="fs-5 sm:fs-5 fw-medium text-dark mt-1">Massive hidden revenue leakages in the bursary.</span>
                                                </li>
                                                <li class="hstack items-start gap-3 p-3 bg-light rounded-3 border border-gray-100 transition-all hover:-translate-y-1 hover:shadow-sm">
                                                    <div class="w-32px h-32px cstack bg-white rounded-circle shadow-xs text-danger flex-none">
                                                        <i class="icon icon-1 unicon-close"></i>
                                                    </div>
                                                    <span class="fs-5 sm:fs-5 fw-medium text-dark mt-1">Disconnected platforms causing extreme student friction.</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel mt-2">
                                            <a class="btn btn-md bg-danger text-white border-0 text-none w-fit shadow-md hover:-translate-y-1 transition-all" href="{{ url('/contact') }}">Request System Audit
                                                <i class="icon lg:icon-1 unicon unicon-chevron-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-6">
                                    <div class="panel overflow-hidden rounded-4 shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                                        <img class="z-99 position-relative w-100 object-cover" src="{{ asset('assets/images/solutions/eduos-problem.png') }}" alt="African administrator looking stressed handling physical files">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row 2: The Solution -->
                        <div class="panel mt-8 xl:mt-10">
                            <div class="row g-5 lg:g-6 xl:g-9 items-center">
                                <div class="xl:col-6 order-2 xl:order-1">
                                    <div class="panel overflow-hidden rounded-4 shadow-xl border border-gray-100 hover:-translate-y-2 transition-all duration-500">
                                        <img class="z-99 position-relative w-100 object-cover" src="{{ asset('assets/images/solutions/eduos-success.png') }}" alt="EduOS Success Story">
                                    </div>
                                </div>
                                <div class="xl:col-6 order-1 xl:order-2">
                                    <div class="panel vstack gap-4">
                                        <div class="panel vstack gap-3">
                                            <div class="px-3 py-1 bg-primary text-white w-fit rounded-pill hstack items-center shadow-xs">
                                                <i class="icon unicon-checkmark-outline me-1"></i>
                                                <p class="fs-7 fw-bold m-0 text-uppercase tracking-wider">The Institutional Engine</p>
                                            </div>
                                            <h1 class="display-4 sm:display-3 m-0 text-black fw-bold">An Integrated Digital Foundation for the Future</h1>
                                            <p class="fs-5 text-gray-600 dark:text-white leading-relaxed">Cortia Institutional OS transforms management. Instead of running separate software for different departments, our application unifies accounting, records, and workflows into one single technical core.</p>
                                        </div>
                                        <div class="panel vstack gap-3">
                                            <ul class="uc-accordion-divider uc-accordion-chevron gap-3" data-uc-accordion="collapsible: false" style="--divider-gap: 0px">
                                                <li class="bg-light p-3 xl:p-4 rounded-3 border border-gray-100 mb-2">
                                                    <a class="uc-accordion-title h5 lg:h4 m-0 text-black fw-bold text-none">
                                                        <div class="hstack gap-3">
                                                            <div class="cstack w-40px h-40px bg-primary text-white rounded-circle shadow-xs flex-none">
                                                                <span class="fw-bold">1</span>
                                                            </div>
                                                            <span>Absolute Operational Clarity</span>
                                                        </div>
                                                    </a>
                                                    <div class="uc-accordion-content mt-3 ms-5 ps-2">
                                                        <p class="fs-5 text-secondary m-0">By moving from manual processes to secure digital databases, institutions achieve perfect oversight and trace processing lineages instantly.</p>
                                                    </div>
                                                </li>
                                                <li class="bg-light p-3 xl:p-4 rounded-3 border border-gray-100 mb-2">
                                                    <a class="uc-accordion-title h5 lg:h4 m-0 text-black fw-bold text-none">
                                                        <div class="hstack gap-3">
                                                            <div class="cstack w-40px h-40px bg-primary text-white rounded-circle shadow-xs flex-none">
                                                                <span class="fw-bold">2</span>
                                                            </div>
                                                            <span>Bulletproof Data Trails</span>
                                                        </div>
                                                    </a>
                                                    <div class="uc-accordion-content mt-3 ms-5 ps-2">
                                                        <p class="fs-5 text-secondary m-0">Restores institutional accountability exactly where it is needed most, with immutable logs for every administrative action.</p>
                                                    </div>
                                                </li>
                                                <li class="bg-light p-3 xl:p-4 rounded-3 border border-gray-100 mb-2">
                                                    <a class="uc-accordion-title h5 lg:h4 m-0 text-black fw-bold text-none">
                                                        <div class="hstack gap-3">
                                                            <div class="cstack w-40px h-40px bg-primary text-white rounded-circle shadow-xs flex-none">
                                                                <span class="fw-bold">3</span>
                                                            </div>
                                                            <span>Offline Fallback Capability</span>
                                                        </div>
                                                    </a>
                                                    <div class="uc-accordion-content mt-3 ms-5 ps-2">
                                                        <p class="fs-5 text-secondary m-0">Deploy reliable local networks that ensure uptime even when major external power or internet drops occur across campus.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="btn btn-md bg-primary text-white border-0 text-none w-fit mt-2 shadow-md hover:-translate-y-1 transition-all" href="{{ url('/contact') }}">Request System Audit
                                            <i class="icon lg:icon-1 unicon unicon-chevron-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quote & Platform Overview -->
                        <div class="panel mt-8 xl:mt-10">
                            <div class="row g-4 lg:g-6 justify-between items-stretch col-match">
                                <div class="lg:col-7">
                                    <div class="panel p-5 bg-primary-100 rounded-4 shadow-sm h-100 d-flex flex-column justify-center relative overflow-hidden border border-primary-25">
                                        <i class="icon unicon-quotes text-primary opacity-10 position-absolute top-0 start-0 ms-3 mt-3 display-1"></i>
                                        <p class="fs-3 fw-medium m-0 text-primary-dark text-italic leading-relaxed position-relative z-1">
                                            "Modernizing infrastructure isn't about deploying complex technology; it's about engineering simple, cohesive structures that work flawlessly in our local context."
                                        </p>
                                    </div>
                                </div>
                                <div class="lg:col-5">
                                    <aside class="panel vstack gap-4 bg-white p-5 rounded-4 shadow-md border border-gray-100 h-100">
                                        <div class="vstack gap-3">
                                            <h4 class="h4 text-black fw-bold m-0 hstack gap-2">
                                                <div class="w-32px h-32px cstack bg-primary-100 text-primary rounded-circle">
                                                    <i class="unicon unicon-info-circle"></i>
                                                </div>
                                                Platform Overview
                                            </h4>
                                            <hr class="my-2 border-gray-200">
                                            <div class="hstack justify-between fs-5 my-2">
                                                <span class="text-secondary">Product Name:</span>
                                                <span class="fw-bold text-dark">Cortia EduOS</span>
                                            </div>
                                            <div class="hstack justify-between fs-5 my-2">
                                                <span class="text-secondary">Sector Focus:</span>
                                                <span class="fw-bold text-dark">EdTech / Public Sector</span>
                                            </div>
                                            <div class="hstack justify-between fs-5 my-2">
                                                <span class="text-secondary">Core Function:</span>
                                                <span class="fw-bold text-dark">Administrative Digitalization</span>
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
    <div id="section_use_cases" class="section-use-cases section panel overflow-hidden bg-primary dark:bg-gray-900 text-white py-8 lg:py-10">
        <img src="{{ asset('assets/images/common/ellipse-03.png') }}" alt="ellipse" class="ellipse-03 position-absolute z-0 opacity-80 dark:d-none">
        <img src="{{ asset('assets/images/common/ellipse-05.png') }}" alt="ellipse" class="ellipse-05 position-absolute z-0 opacity-80 dark:d-none">
        
        <div class="section-outer panel z-1 position-relative">
            <div class="container sm:max-w-xl xl:max-w-2xl">
                <div class="section-inner panel" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                    <div class="panel vstack items-center text-center gap-4">
                        <div class="panel max-w-700px mx-auto">
                            <h2 class="display-4 lg:display-2 m-0 text-white fw-bold">Digitizing Every Institutional Touchpoint</h2>
                        </div>
                    </div>
                </div>

                <div class="section-content panel mt-6 sm:mt-8 xl:mt-9" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                    
                    <!-- Navigation Tabs -->
                    <div class="panel mb-6 d-flex justify-center">
                        <ul class="main-use-cases-nav hstack gap-2 justify-center text-center p-2 rounded-pill shadow-xs backdrop-filter-blur" style="background-color: rgba(255,255,255,0.1);" data-uc-switcher="connect: .main-use-cases-switcher; animation: uc-animation-fade;">
                            <li><a class="btn btn-md text-none text-white rounded-pill px-4 fw-medium" href="#">University Admins</a></li>
                            <li><a class="btn btn-md text-none text-white rounded-pill px-4 fw-medium" href="#">Finance & Bursary</a></li>
                            <li><a class="btn btn-md text-none text-white rounded-pill px-4 fw-medium" href="#">Academic Departments</a></li>
                        </ul>
                    </div>

                    <div class="panel main-use-cases-switcher uc-switcher overflow-hidden">
                        <!-- Tab 1: University Admins -->
                        <div class="panel">
                            <div class="row g-4 xl:g-8 col-match items-center rounded-4 border border-white-10 p-4 lg:p-6 shadow-xl backdrop-filter-blur" style="background-color: rgba(255,255,255,0.05);">
                                <div class="sm:col-7 lg:col-7 order-2 lg:order-1">
                                    <div class="panel vstack justify-center gap-4 text-white">
                                        <div class="px-3 py-1 bg-white text-primary w-fit rounded-pill hstack items-center shadow-xs">
                                            <p class="fs-7 fw-bold m-0 text-uppercase tracking-wider">University Admins</p>
                                        </div>
                                        <h3 class="display-5 m-0 text-white fw-bold">Unify Disjointed Paper Records</h3>
                                        <p class="fs-4 text-white-50 leading-relaxed">Say goodbye to lost files. Administrators can instantly securely lookup student registries, trace admission status, and manage identities through a centralized, high-speed portal.</p>
                                        <div class="panel border-top border-white-10 pt-4 mt-2">
                                            <h6 class="h4 m-0 text-white fw-bold">Secure Core Registry</h6>
                                            <span class="fs-5 opacity-75">Streamlining records and removing operational friction.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-5 lg:col-5 order-1 lg:order-2">
                                    <div class="panel h-100 overflow-hidden rounded-3 shadow-lg">
                                        <img class="w-100 h-100 object-cover hover:scale-105 transition-all duration-500" src="{{ asset('assets/images/solutions/eduos_admin_dashboard.png') }}" alt="Admin Dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2: Finance & Bursary -->
                        <div class="panel">
                            <div class="row g-4 xl:g-8 col-match items-center rounded-4 border border-white-10 p-4 lg:p-6 shadow-xl backdrop-filter-blur" style="background-color: rgba(255,255,255,0.05);">
                                <div class="sm:col-7 lg:col-7 order-2 lg:order-1">
                                    <div class="panel vstack justify-center gap-4 text-white">
                                        <div class="px-3 py-1 bg-white text-primary w-fit rounded-pill hstack items-center shadow-xs">
                                            <p class="fs-7 fw-bold m-0 text-uppercase tracking-wider">Finance & Bursary</p>
                                        </div>
                                        <h3 class="display-5 m-0 text-white fw-bold">Seal Revenue Gaps Effectively</h3>
                                        <p class="fs-4 text-white-50 leading-relaxed">Every transaction is automatically tied to a single auditable ledger. Stop leakages instantly with secure tuition fee tracking, digital payment links, and localized clear reconciliation flows.</p>
                                        <div class="panel border-top border-white-10 pt-4 mt-2">
                                            <h6 class="h4 m-0 text-white fw-bold">Zero-Leak Bursary Trails</h6>
                                            <span class="fs-5 opacity-75">Guaranteed real-time fiscal tracking for maximum accountability.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-5 lg:col-5 order-1 lg:order-2">
                                    <div class="panel h-100 overflow-hidden rounded-3 shadow-lg">
                                        <img class="w-100 h-100 object-cover hover:scale-105 transition-all duration-500" src="{{ asset('assets/images/solutions/eduos_bursary_finance.png') }}" alt="Finance Ledger View">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3: Academic Departments -->
                        <div class="panel">
                            <div class="row g-4 xl:g-8 col-match items-center rounded-4 border border-white-10 p-4 lg:p-6 shadow-xl backdrop-filter-blur" style="background-color: rgba(255,255,255,0.05);">
                                <div class="sm:col-7 lg:col-7 order-2 lg:order-1">
                                    <div class="panel vstack justify-center gap-4 text-white">
                                        <div class="px-3 py-1 bg-white text-primary w-fit rounded-pill hstack items-center shadow-xs">
                                            <p class="fs-7 fw-bold m-0 text-uppercase tracking-wider">Academic Departments</p>
                                        </div>
                                        <h3 class="display-5 m-0 text-white fw-bold">Uninterrupted Examinations</h3>
                                        <p class="fs-4 text-white-50 leading-relaxed">Deliver secure, local-server-driven exams that withstand sudden power or network drops. Automatically process large volumes of student results without the typical manual grading delays.</p>
                                        <div class="panel border-top border-white-10 pt-4 mt-2">
                                            <h6 class="h4 m-0 text-white fw-bold">High-Capacity CBT Engine</h6>
                                            <span class="fs-5 opacity-75">Scalable digital examination built for local infrastructure.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-5 lg:col-5 order-1 lg:order-2">
                                    <div class="panel h-100 overflow-hidden rounded-3 shadow-lg">
                                        <img class="w-100 h-100 object-cover hover:scale-105 transition-all duration-500" src="{{ asset('assets/images/solutions/eduos_cbt_exam.png') }}" alt="Students in CBT Lab">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Use Cases end -->
</div>
@endsection