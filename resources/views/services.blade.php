@extends('layouts.app')

@section('content')
<style>
    /* Styling checkmarks and custom accents for services list */
    .services-icon-box {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background-color: rgba(var(--bs-primary-rgb), 0.08);
        color: var(--color-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    
    .dark .services-icon-box {
        background-color: rgba(255, 255, 255, 0.08);
        color: var(--color-secondary-600);
    }
    
    .feature-item-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }
</style>

<!-- Wrapper start -->
<div id="wrapper" class="wrap">

    <!-- Hero Header start -->
    <div id="hero_header" class="hero-header section panel overflow-hidden h-100 pb-4">
        <div class="section-outer panel pt-9 lg:pt-10">
            <div class="container sm:max-w-xl xl:max-w-2xl">
                <div class="panel section-inner d-flex flex-column items-center justify-center gap-4" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                    
                    <!-- Decorative shapes -->
                    <img src="{{ asset('assets/images/common/common-01.svg') }}" alt="Icon" class="common-01 d-inline-block position-absolute w-64px xl:w-80px text-yellow-400 d-none xl:d-block z-999" data-uc-svg>
                    <img src="{{ asset('assets/images/common/shape-02.svg') }}" alt="Icon" class="shape-02 position-absolute w-80px xl:w-64px text-yellow-400 d-none xl:d-block z-999">
                    <img src="{{ asset('assets/images/common/shape-01.svg') }}" alt="Icon" class="shape-01 position-absolute w-64px xl:w-80px text-yellow-400 d-none xl:d-block z-999">

                    <div class="panel" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <div class="panel vstack justify-center gap-3 text-center max-w-950px mx-auto">
                            <div class="panel vstack items-center">
                                <h1 class="display-4 md:display-2 lg:display-1 m-0">Our Infrastructure <span class="text-secondary">Services</span></h1>
                                <p class="fs-4 lg:w-700px mt-2 text-secondary dark:text-gray-400">Cortia Technology provides specialized industrial-grade software architectures designed to solve foundational trust, protection, and operational challenges in Africa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Header end -->

    <!-- Showcase Grid start -->
    <div class="section-showcase section panel overflow-hidden py-6 lg:py-8 xl:py-10">
        <div class="container sm:max-w-xl xl:max-w-2xl">
            <div class="section-inner panel vstack gap-8 lg:gap-10">
                
                <!-- Section 1: LandCerta (Content Left, Image Right) -->
                <div class="panel section-row" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 100;">
                    <div class="row g-4 lg:g-6 xl:g-8 items-center">
                        <div class="col-12 lg:col-6 order-2 lg:order-1">
                            <div class="panel vstack gap-3 lg:gap-4">
                                <div class="vstack gap-1">
                                    <span class="fs-7 fw-bold text-primary dark:text-secondary-600 uppercase tracking-widest">Real Estate Infrastructure</span>
                                    <h2 class="display-5 fw-bold text-dark dark:text-white mt-1">LandCerta: Immutable Land Registry & Verification</h2>
                                </div>
                                <p class="fs-5 text-secondary dark:text-gray-400 m-0 leading-relaxed">
                                    A decentralized, parcel-based land database platform designed to eliminate double-selling scams, boundary discrepancies, and document forgery. LandCerta cataloges real estate into tamper-proof records, protecting buyer assets remotely and locally.
                                </p>
                                <ul class="feature-item-list list nav-y gap-2 text-start my-1 fs-5">
                                    <li>
                                        <div class="services-icon-box"><i class="unicon-checkmark icon-1"></i></div>
                                        <span class="text-dark dark:text-white mt-1"><b>GPS Coordinate Mapping:</b> Eliminates overlapping boundary declarations.</span>
                                    </li>
                                    <li>
                                        <div class="services-icon-box"><i class="unicon-checkmark icon-1"></i></div>
                                        <span class="text-dark dark:text-white mt-1"><b>Lineage Audits:</b> Instant lookups for chronological title custody.</span>
                                    </li>
                                    <li>
                                        <div class="services-icon-box"><i class="unicon-checkmark icon-1"></i></div>
                                        <span class="text-dark dark:text-white mt-1"><b>Secure Escrow System:</b> Protects buyer funds until verification completes.</span>
                                    </li>
                                </ul>
                                <a href="{{ url('/landcerta') }}" class="btn btn-md bg-primary text-white dark:bg-secondary-600 dark:text-black border-0 w-fit hstack gap-2 hover:-translate-y-1 transition-all mt-2">
                                    Explore LandCerta Stack
                                    <i class="unicon-arrow-right icon-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 lg:col-6 order-1 lg:order-2">
                            <div class="panel overflow-hidden rounded-4 shadow-xl border border-gray-100 dark:border-gray-800 hover:-translate-y-2 transition-all duration-500">
                                <img class="z-99 position-relative w-100 object-cover" src="{{ asset('assets/images/solutions/landcerta-app.png') }}" alt="LandCerta App Screenshot">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: CoreSure (Image Left, Content Right) -->
                <div class="panel section-row" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 100;">
                    <div class="row g-4 lg:g-6 xl:g-8 items-center">
                        <div class="col-12 lg:col-6">
                            <div class="panel overflow-hidden rounded-4 shadow-xl border border-gray-100 dark:border-gray-800 hover:-translate-y-2 transition-all duration-500">
                                <img class="z-99 position-relative w-100 object-cover" src="{{ asset('assets/images/solutions/coresure_shop_owner_1779919782657.png') }}" alt="CoreSure Application Preview">
                            </div>
                        </div>
                        <div class="col-12 lg:col-6">
                            <div class="panel vstack gap-3 lg:gap-4">
                                <div class="vstack gap-1">
                                    <span class="fs-7 fw-bold text-primary dark:text-secondary-600 uppercase tracking-widest">Insurance & Financial Infrastructure</span>
                                    <h2 class="display-5 fw-bold text-dark dark:text-white mt-1">CoreSure: Retail Protection & Micro-Insurance</h2>
                                </div>
                                <p class="fs-5 text-secondary dark:text-gray-400 m-0 leading-relaxed">
                                    Empowering retail merchants and micro-enterprises with flexible risk mitigation. CoreSure processes premiums via micro-billing integrations and ensures prompt claims verification to keep local shop owners protected against unexpected inventory and capital risks.
                                </p>
                                <ul class="feature-item-list list nav-y gap-2 text-start my-1 fs-5">
                                    <li>
                                        <div class="services-icon-box"><i class="unicon-checkmark icon-1"></i></div>
                                        <span class="text-dark dark:text-white mt-1"><b>Daily Premium Billing:</b> Integrates with local wallets for micro-installments.</span>
                                    </li>
                                    <li>
                                        <div class="services-icon-box"><i class="unicon-checkmark icon-1"></i></div>
                                        <span class="text-dark dark:text-white mt-1"><b>Rapid Claim Verification:</b> Minimizes paperwork with mobile proofs of loss.</span>
                                    </li>
                                    <li>
                                        <div class="services-icon-box"><i class="unicon-checkmark icon-1"></i></div>
                                        <span class="text-dark dark:text-white mt-1"><b>Merchant Portal:</b> Simple dashboard for subscription management.</span>
                                    </li>
                                </ul>
                                <a href="{{ url('/coresure') }}" class="btn btn-md bg-primary text-white dark:bg-secondary-600 dark:text-black border-0 w-fit hstack gap-2 hover:-translate-y-1 transition-all mt-2">
                                    Explore CoreSure Stack
                                    <i class="unicon-arrow-right icon-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 3: OII / EduOS (Content Left, Image Right) -->
                <div class="panel section-row" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: 100;">
                    <div class="row g-4 lg:g-6 xl:g-8 items-center">
                        <div class="col-12 lg:col-6 order-2 lg:order-1">
                            <div class="panel vstack gap-3 lg:gap-4">
                                <div class="vstack gap-1">
                                    <span class="fs-7 fw-bold text-primary dark:text-secondary-600 uppercase tracking-widest">Education Infrastructure</span>
                                    <h2 class="display-5 fw-bold text-dark dark:text-white mt-1">OII (EduOS): Centralized Academic Administration</h2>
                                </div>
                                <p class="fs-5 text-secondary dark:text-gray-400 m-0 leading-relaxed">
                                    A robust educational platform built to consolidate university administration databases. EduOS unifies bursary collections, computer-based exam portals, and academic record sheets, eliminating manual filing delays and leakages.
                                </p>
                                <ul class="feature-item-list list nav-y gap-2 text-start my-1 fs-5">
                                    <li>
                                        <div class="services-icon-box"><i class="unicon-checkmark icon-1"></i></div>
                                        <span class="text-dark dark:text-white mt-1"><b>Integrated Tuition Gate:</b> Ensures direct, secure payments into school accounts.</span>
                                    </li>
                                    <li>
                                        <div class="services-icon-box"><i class="unicon-checkmark icon-1"></i></div>
                                        <span class="text-dark dark:text-white mt-1"><b>Grade Index Consolidation:</b> Simplifies results processing for registrars.</span>
                                    </li>
                                    <li>
                                        <div class="services-icon-box"><i class="unicon-checkmark icon-1"></i></div>
                                        <span class="text-dark dark:text-white mt-1"><b>Scale CBT Engine:</b> Handles concurrent assessments securely.</span>
                                    </li>
                                </ul>
                                <a href="{{ url('/eduos') }}" class="btn btn-md bg-primary text-white dark:bg-secondary-600 dark:text-black border-0 w-fit hstack gap-2 hover:-translate-y-1 transition-all mt-2">
                                    Explore EduOS Stack
                                    <i class="unicon-arrow-right icon-1"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 lg:col-6 order-1 lg:order-2">
                            <div class="panel overflow-hidden rounded-4 shadow-xl border border-gray-100 dark:border-gray-800 hover:-translate-y-2 transition-all duration-500">
                                <img class="z-99 position-relative w-100 object-cover" src="{{ asset('assets/images/solutions/eduos_admin_dashboard.png') }}" alt="EduOS Admin Panel">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Showcase Grid end -->

    <!-- Call to Action Section -->
    <div id="section_cta" class="section-cta section panel overflow-hidden">
        <div class="section-outer py-6 lg:py-8 xl:py-10 bg-primary-25 dark:bg-gray-900 border-top">
            <div class="container sm:max-w-xl xl:max-w-2xl">
                <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                    <div class="panel rounded-3 bg-primary text-white overflow-hidden p-4 sm:p-6 lg:p-8">
                        <div class="row items-center g-4 lg:g-8">
                            <div class="col-12 lg:col-7">
                                <div class="panel vstack gap-3 text-center lg:text-start">
                                    <h2 class="display-4 m-0 text-white fw-bold">Ready to modernize your infrastructure?</h2>
                                    <p class="fs-4 opacity-85">Partner with Cortia Technology to deploy custom, highly secure software foundations tailormade for African operational realities.</p>
                                </div>
                            </div>
                            <div class="col-12 lg:col-5">
                                <div class="panel vstack items-center gap-2">
                                    <a href="{{ url('/contact') }}" class="btn btn-lg bg-white text-primary fw-bold w-100 sm:w-auto hover:-translate-y-1 transition-all">Schedule a Discovery Call</a>
                                    <p class="fs-7 opacity-75">No commitment required. Let's discuss your requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
