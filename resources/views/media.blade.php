@extends('layouts.app')

@section('content')
<style>
    /* Styling for download buttons and media badges */
    .download-card {
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        border: 1px solid rgba(var(--bs-primary-rgb), 0.1);
    }
    
    .download-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(109, 35, 203, 0.08);
        border-color: var(--color-primary);
    }
    
    .dark .download-card:hover {
        border-color: var(--color-secondary-600);
        box-shadow: 0 10px 25px rgba(168, 85, 247, 0.12);
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
                                <h1 class="display-4 md:display-2 lg:display-1 m-0">Media & <span class="text-secondary">Press Room</span></h1>
                                <p class="fs-4 lg:w-700px mt-2 text-secondary dark:text-gray-400">Read our latest announcements, press releases, news features, and download official brand assets.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Header end -->

    <!-- Press and News Section start -->
    <div class="section-press section panel overflow-hidden pb-6 lg:pb-8 xl:pb-10">
        <div class="container sm:max-w-xl xl:max-w-2xl">
            <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                
                <div class="row g-4 lg:g-6 xl:g-8">
                    <!-- Left Column: Featured and Press Releases Grid -->
                    <div class="lg:col-8">
                        <div class="panel vstack gap-4 lg:gap-6">
                            
                            <!-- Featured Coverage -->
                            <div class="panel bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 rounded-3 overflow-hidden shadow-sm">
                                <div class="ratio ratio-16x9">
                                    <img src="{{ asset('assets/images/about/about_big.png') }}" class="media-cover image" alt="Featured News Image">
                                </div>
                                <div class="p-4 vstack gap-2">
                                    <div class="hstack justify-between">
                                        <span class="badge rounded bg-primary text-white dark:bg-secondary-600 dark:text-black fs-7 px-2 py-1 font-semibold uppercase">Featured Coverage</span>
                                        <span class="fs-7 text-secondary">March 18, 2026</span>
                                    </div>
                                    <h3 class="h3 fw-bold text-dark dark:text-white mt-1">TechCabal: How Cortia's LandCerta Protocol is Dismantling Property Fraud in West Africa</h3>
                                    <p class="fs-5 text-secondary dark:text-gray-400 leading-relaxed my-2">
                                        An in-depth look at how Cortia Technology uses digital coordinates, gazette matching, and cryptographic audits to secure land investments for international buyers, reducing real estate transaction risks by over 80%.
                                    </p>
                                    <a href="{{ url('/contact') }}" class="btn btn-text text-primary dark:text-secondary-600 fw-bold p-0 border-0 hstack gap-1 w-fit mt-1">
                                        Read Full Article <i class="unicon-chevron-right icon-1"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- News Grid -->
                            <div class="panel">
                                <h3 class="h3 fw-bold text-dark dark:text-white mb-3">Press Releases & Announcements</h3>
                                <div class="row child-cols-12 sm:child-cols-6 g-4 col-match">
                                    
                                    <!-- Release 1 -->
                                    <div>
                                        <div class="panel h-100 p-4 bg-white dark:bg-gray-900 rounded-3 border border-gray-100 dark:border-gray-800 shadow-sm vstack justify-between">
                                            <div class="panel">
                                                <div class="hstack justify-between mb-2">
                                                    <span class="fs-7 text-primary dark:text-secondary-600 fw-bold">DISRUPT AFRICA</span>
                                                    <span class="fs-7 text-secondary">Jan 28, 2026</span>
                                                </div>
                                                <h4 class="h4 fw-bold text-dark dark:text-white mb-2">CoreSure Launches Micro-Insurance System for Retail Merchants</h4>
                                                <p class="fs-6 text-secondary dark:text-gray-400 leading-relaxed mb-4">Unveiling daily billing premium integrations designed to protect local micro-businesses from inventory losses.</p>
                                            </div>
                                            <a href="{{ url('/contact') }}" class="btn btn-text text-primary dark:text-secondary-600 fw-bold p-0 border-0 hstack gap-1 mt-auto">Read Announcement <i class="unicon-chevron-right icon-1"></i></a>
                                        </div>
                                    </div>

                                    <!-- Release 2 -->
                                    <div>
                                        <div class="panel h-100 p-4 bg-white dark:bg-gray-900 rounded-3 border border-gray-100 dark:border-gray-800 shadow-sm vstack justify-between">
                                            <div class="panel">
                                                <div class="hstack justify-between mb-2">
                                                    <span class="fs-7 text-primary dark:text-secondary-600 fw-bold">TECHPOINT</span>
                                                    <span class="fs-7 text-secondary">Nov 14, 2025</span>
                                                </div>
                                                <h4 class="h4 fw-bold text-dark dark:text-white mb-2">EduOS Records 40% Administrative Efficiency Gains in University Pilot</h4>
                                                <p class="fs-6 text-secondary dark:text-gray-400 leading-relaxed mb-4">Highlighting the successful pilot runs of the consolidated registrar and bursary payment stack across state universities.</p>
                                            </div>
                                            <a href="{{ url('/contact') }}" class="btn btn-text text-primary dark:text-secondary-600 fw-bold p-0 border-0 hstack gap-1 mt-auto">Read Announcement <i class="unicon-chevron-right icon-1"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Right Column: Media Kit & Press Contacts -->
                    <div class="lg:col-4">
                        <div class="panel vstack gap-4 sticky-top" style="top: 100px;">
                            
                            <!-- Media Kit Downloads -->
                            <div class="panel p-4 bg-gray-25 dark:bg-gray-900 border border-gray-100 dark:border-gray-800 rounded-3">
                                <h4 class="h4 fw-bold text-dark dark:text-white mb-3">Official Media Kit</h4>
                                <p class="fs-6 text-secondary dark:text-gray-400 leading-relaxed mb-3">Download approved brand logos, color guidesheets, and executive leadership photography packs.</p>
                                <div class="vstack gap-2">
                                    
                                    <!-- Asset 1 -->
                                    <a href="#" class="download-card p-3 bg-white dark:bg-black rounded-2 hstack justify-between text-none">
                                        <div class="hstack gap-2">
                                            <i class="unicon-image icon-2 text-primary dark:text-secondary-600"></i>
                                            <div class="vstack gap-0">
                                                <span class="fs-6 fw-bold text-dark dark:text-white">Brand Logo Kit</span>
                                                <span class="fs-7 text-secondary">SVG & PNG • 2.4 MB</span>
                                            </div>
                                        </div>
                                        <i class="unicon-download icon-2 text-secondary"></i>
                                    </a>

                                    <!-- Asset 2 -->
                                    <a href="#" class="download-card p-3 bg-white dark:bg-black rounded-2 hstack justify-between text-none">
                                        <div class="hstack gap-2">
                                            <i class="unicon-document icon-2 text-primary dark:text-secondary-600"></i>
                                            <div class="vstack gap-0">
                                                <span class="fs-6 fw-bold text-dark dark:text-white">Brand Guidelines</span>
                                                <span class="fs-7 text-secondary">PDF • 5.1 MB</span>
                                            </div>
                                        </div>
                                        <i class="unicon-download icon-2 text-secondary"></i>
                                    </a>

                                    <!-- Asset 3 -->
                                    <a href="#" class="download-card p-3 bg-white dark:bg-black rounded-2 hstack justify-between text-none">
                                        <div class="hstack gap-2">
                                            <i class="unicon-users-alt icon-2 text-primary dark:text-secondary-600"></i>
                                            <div class="vstack gap-0">
                                                <span class="fs-6 fw-bold text-dark dark:text-white">Executive Headshots</span>
                                                <span class="fs-7 text-secondary">JPEG Pack • 18.0 MB</span>
                                            </div>
                                        </div>
                                        <i class="unicon-download icon-2 text-secondary"></i>
                                    </a>

                                </div>
                            </div>

                            <!-- PR Contact Panel -->
                            <div class="panel p-4 bg-primary text-white rounded-3 shadow-md">
                                <h4 class="h4 fw-bold text-white mb-2">PR & Media Contacts</h4>
                                <p class="fs-6 opacity-85 leading-relaxed mb-3">For all journalist requests, leadership interviews, or keynote speaking inquiries, please reach out directly.</p>
                                <div class="vstack gap-1 mt-2 border-top border-white-15 pt-3">
                                    <span class="fs-7 opacity-75">PR Outreach Email</span>
                                    <a href="mailto:media@cortia.tech" class="fs-5 fw-bold text-white text-none hover:underline">media@cortia.tech</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Press and News Section end -->

</div>
@endsection
