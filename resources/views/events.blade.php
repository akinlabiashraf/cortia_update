@extends('layouts.app')

@section('content')
<style>
    /* Styling for event date badges */
    .event-date-badge {
        width: 60px;
        height: 60px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: var(--color-primary);
        color: #ffffff;
        border-radius: 8px;
        font-weight: 800;
        line-height: 1.1;
        box-shadow: 0 4px 10px rgba(109, 35, 203, 0.2);
    }
    
    .dark .event-date-badge {
        background-color: var(--color-secondary-600);
        color: var(--color-black);
        box-shadow: 0 4px 10px rgba(168, 85, 247, 0.2);
    }

    /* Styling for vertical timeline of past events */
    .timeline-container {
        position: relative;
        padding-left: 32px;
    }

    .timeline-container::before {
        content: '';
        position: absolute;
        top: 8px;
        bottom: 8px;
        left: 11px;
        width: 2px;
        background-color: rgba(var(--bs-primary-rgb), 0.15);
    }
    
    .dark .timeline-container::before {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .timeline-marker {
        position: absolute;
        left: 0;
        top: 6px;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: #ffffff;
        border: 4px solid var(--color-primary);
        z-index: 1;
        box-shadow: 0 0 0 4px rgba(109, 35, 203, 0.1);
    }

    .dark .timeline-marker {
        background-color: var(--color-black);
        border-color: var(--color-secondary-600);
        box-shadow: 0 0 0 4px rgba(168, 85, 247, 0.15);
    }

    .timeline-item {
        position: relative;
        padding-bottom: 40px;
    }

    .timeline-item:last-child {
        padding-bottom: 0;
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
                    <img src="{{ asset('assets/images/common/common-01.svg') }}" alt="Icon" class="common-01 d-inline-block position-absolute w-64px xl:w-80px text-primary d-none xl:d-block z-999" data-uc-svg>
                    <img src="{{ asset('assets/images/common/shape-02.svg') }}" alt="Icon" class="shape-02 position-absolute w-80px xl:w-64px text-primary d-none xl:d-block z-999">
                    <img src="{{ asset('assets/images/common/shape-01.svg') }}" alt="Icon" class="shape-01 position-absolute w-64px xl:w-80px text-primary d-none xl:d-block z-999">

                    <div class="panel" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <div class="panel vstack justify-center gap-3 text-center max-w-950px mx-auto">
                            <div class="panel vstack items-center">
                                <h1 class="display-4 md:display-2 lg:display-1 m-0">Our <span class="text-secondary">Events</span></h1>
                                <p class="fs-4 lg:w-600px mt-2 text-secondary dark:text-gray-400">Join our upcoming conferences, tech roundtables, webinars, and hackathons focused on developing African digital infrastructure.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Header end -->

    <!-- Featured Event Section start -->
    <div class="section-featured-event section panel overflow-hidden pb-6 lg:pb-8 xl:pb-10">
        <div class="container sm:max-w-xl xl:max-w-2xl">
            <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                
                <div class="panel p-4 lg:p-6 rounded-4 bg-primary-100 dark:bg-gray-900 border border-primary-25 dark:border-gray-800">
                    <div class="row g-4 lg:g-6 items-center col-match">
                        <!-- Left: Event Cover -->
                        <div class="lg:col-6">
                            <div class="panel overflow-hidden rounded-3 ratio ratio-4x3 shadow-md">
                                <img src="{{ asset('assets/images/about/about-03.png') }}" class="media-cover image" alt="Cortia Tech Summit">
                            </div>
                        </div>
                        <!-- Right: Event Description -->
                        <div class="lg:col-6">
                            <div class="panel vstack justify-center gap-3 lg:gap-4 h-100">
                                <div class="vstack gap-2">
                                    <span class="badge rounded bg-primary text-white dark:bg-secondary-600 dark:text-black fs-7 px-3 py-1 font-semibold uppercase w-fit">Featured Event</span>
                                    <h2 class="display-6 sm:display-5 m-0 text-dark dark:text-white fw-bold mt-1">Cortia Tech Summit 2026: Architecting Africa's Digital Backbone</h2>
                                </div>
                                <div class="panel border-top border-bottom py-3 my-1 border-gray-200 dark:border-gray-800">
                                    <div class="row child-cols-6 g-3">
                                        <div class="hstack gap-2">
                                            <i class="unicon-calendar-alt icon-2 text-primary dark:text-secondary-600"></i>
                                            <div class="vstack gap-0">
                                                <span class="fs-7 text-secondary">Date & Time</span>
                                                <span class="fs-6 fw-bold text-dark dark:text-white">July 24, 2026 • 9:00 AM</span>
                                            </div>
                                        </div>
                                        <div class="hstack gap-2">
                                            <i class="unicon-map-marker icon-2 text-primary dark:text-secondary-600"></i>
                                            <div class="vstack gap-0">
                                                <span class="fs-7 text-secondary">Venue</span>
                                                <span class="fs-6 fw-bold text-dark dark:text-white">Victoria Island, Lagos</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="fs-5 text-secondary dark:text-gray-400 m-0 leading-relaxed">
                                    Join us for our flagship annual summit where our engineers and industry partners showcase the latest advancements in real estate trust indices, micro-insurance validation systems, and university administrative consolidation.
                                </p>
                                <a href="{{ url('/contact') }}" class="btn btn-md bg-primary text-white dark:bg-secondary-600 dark:text-black border-0 w-fit hstack gap-2 hover:-translate-y-1 transition-all">
                                    Register for Summit
                                    <i class="unicon-arrow-right icon-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Featured Event Section end -->

    <!-- Upcoming Events Grid start -->
    <div class="section-upcoming-events section panel overflow-hidden py-6 lg:py-8 xl:py-10 bg-gray-25 dark:bg-black border-top border-bottom border-gray-100 dark:border-gray-900">
        <div class="container sm:max-w-xl xl:max-w-2xl">
            <div class="section-inner panel" data-anime="onview: -100; targets: > *; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 100});">
                
                <!-- Section Header -->
                <div class="panel vstack items-center gap-2 xl:gap-3 mb-6 sm:mb-8 text-center">
                    <h2 class="display-4 sm:display-3 m-0 text-dark dark:text-white fw-bold">Upcoming Engagements</h2>
                    <p class="fs-5 text-secondary max-w-600px mx-auto mt-1">Reserve your spot in our webinars, interactive roundtables, and university workshops.</p>
                </div>

                <!-- Events Grid -->
                <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 g-4 col-match" data-anime="onview: -100; targets: > *; translateY: [30, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 350});">
                    
                    <!-- Card 1: Webinar -->
                    <div>
                        <div class="panel h-100 p-4 bg-white dark:bg-gray-900 rounded-3 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 vstack justify-between">
                            <div class="panel">
                                <div class="hstack justify-between items-start mb-3">
                                    <span class="badge rounded bg-primary-100 text-primary dark:bg-gray-800 dark:text-secondary-600 fs-7 px-2 py-1 font-semibold uppercase">Workshop</span>
                                    <div class="event-date-badge">
                                        <span class="fs-7">AUG</span>
                                        <span class="fs-5">12</span>
                                    </div>
                                </div>
                                <h3 class="h4 fw-bold text-dark dark:text-white mb-2">EduOS Integration Workshop: Digital Campus Best Practices</h3>
                                <p class="fs-6 text-secondary dark:text-gray-400 leading-relaxed mb-4">A technical walkthrough for university registrars and administrators on unifying result processing portals and payment gates.</p>
                            </div>
                            <div class="hstack justify-between border-top border-gray-100 dark:border-gray-800 pt-3 mt-auto">
                                <span class="fs-7 text-secondary hstack gap-1"><i class="unicon-laptop icon-1 text-primary dark:text-secondary-600"></i> Zoom Webinar</span>
                                <a href="{{ url('/contact') }}" class="btn btn-text text-primary dark:text-secondary-600 fw-bold p-0 border-0 hstack gap-1">Register <i class="unicon-chevron-right icon-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Roundtable -->
                    <div>
                        <div class="panel h-100 p-4 bg-white dark:bg-gray-900 rounded-3 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 vstack justify-between">
                            <div class="panel">
                                <div class="hstack justify-between items-start mb-3">
                                    <span class="badge rounded bg-primary-100 text-primary dark:bg-gray-800 dark:text-secondary-600 fs-7 px-2 py-1 font-semibold uppercase">Roundtable</span>
                                    <div class="event-date-badge">
                                        <span class="fs-7">SEP</span>
                                        <span class="fs-5">05</span>
                                    </div>
                                </div>
                                <h3 class="h4 fw-bold text-dark dark:text-white mb-2">CoreSure InsurTech Roundtable: Retail Micro-Insurance</h3>
                                <p class="fs-6 text-secondary dark:text-gray-400 leading-relaxed mb-4">A critical session discussing the structural deployment of micro-insurance models to protect low-income retail merchants.</p>
                            </div>
                            <div class="hstack justify-between border-top border-gray-100 dark:border-gray-800 pt-3 mt-auto">
                                <span class="fs-7 text-secondary hstack gap-1"><i class="unicon-map-marker icon-1 text-primary dark:text-secondary-600"></i> Cortia Hub & Virtual</span>
                                <a href="{{ url('/contact') }}" class="btn btn-text text-primary dark:text-secondary-600 fw-bold p-0 border-0 hstack gap-1">Register <i class="unicon-chevron-right icon-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Hackathon -->
                    <div>
                        <div class="panel h-100 p-4 bg-white dark:bg-gray-900 rounded-3 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 vstack justify-between">
                            <div class="panel">
                                <div class="hstack justify-between items-start mb-3">
                                    <span class="badge rounded bg-primary-100 text-primary dark:bg-gray-800 dark:text-secondary-600 fs-7 px-2 py-1 font-semibold uppercase">Hackathon</span>
                                    <div class="event-date-badge">
                                        <span class="fs-7">OCT</span>
                                        <span class="fs-5">18</span>
                                    </div>
                                </div>
                                <h3 class="h4 fw-bold text-dark dark:text-white mb-2">LandCerta Hackathon: Decentralized Auditing Tools</h3>
                                <p class="fs-6 text-secondary dark:text-gray-400 leading-relaxed mb-4">A 48-hour development marathon building open-source verification APIs and coordinate overlays on top of the LandCerta title index.</p>
                            </div>
                            <div class="hstack justify-between border-top border-gray-100 dark:border-gray-800 pt-3 mt-auto">
                                <span class="fs-7 text-secondary hstack gap-1"><i class="unicon-building icon-1 text-primary dark:text-secondary-600"></i> Ibadan Tech Zone</span>
                                <a href="{{ url('/contact') }}" class="btn btn-text text-primary dark:text-secondary-600 fw-bold p-0 border-0 hstack gap-1">Register <i class="unicon-chevron-right icon-1"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Upcoming Events Grid end -->

    <!-- Past Events Timeline start -->
    <div class="section-past-events section panel overflow-hidden py-6 lg:py-8 xl:py-10">
        <div class="container sm:max-w-xl xl:max-w-2xl">
            <div class="section-inner panel" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 100;">
                
                <!-- Section Header -->
                <div class="panel vstack items-center gap-2 xl:gap-3 mb-6 sm:mb-8 text-center">
                    <h2 class="display-4 sm:display-3 m-0 text-dark dark:text-white fw-bold">Past Milestones</h2>
                    <p class="fs-5 text-secondary max-w-600px mx-auto mt-1">A timeline of our regional launches, academic seminars, and system implementations.</p>
                </div>

                <!-- Timeline -->
                <div class="panel max-w-800px mx-auto mt-4">
                    <div class="timeline-container">
                        
                        <!-- Timeline Item 1 -->
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="panel bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 rounded-3 p-4 shadow-xs">
                                <div class="vstack sm:hstack justify-between items-start sm:items-center gap-2 mb-2">
                                    <div class="vstack gap-0">
                                        <span class="fs-7 text-primary dark:text-secondary-600 fw-bold uppercase">Product Launch</span>
                                        <h4 class="h3 m-0 fw-bold text-dark dark:text-white mt-1">Launch of LandCerta 2.0: Parcel-Based Real Estate Registry</h4>
                                    </div>
                                    <span class="badge rounded bg-gray-100 dark:bg-gray-800 text-secondary dark:text-gray-400 fs-7 px-3 py-1 font-semibold flex-none">March 15, 2026</span>
                                </div>
                                <p class="fs-6 text-secondary dark:text-gray-400 leading-relaxed mb-0">
                                    We unveiled our rewritten, parcel-indexed land registry validation platform in Lagos. Features include coordinate validations, dispute tracking alerts, and title escrow support, giving remote investors structural verification power before buying property.
                                </p>
                            </div>
                        </div>

                        <!-- Timeline Item 2 -->
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="panel bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 rounded-3 p-4 shadow-xs">
                                <div class="vstack sm:hstack justify-between items-start sm:items-center gap-2 mb-2">
                                    <div class="vstack gap-0">
                                        <span class="fs-7 text-primary dark:text-secondary-600 fw-bold uppercase">Seminar & Pilot Results</span>
                                        <h4 class="h3 m-0 fw-bold text-dark dark:text-white mt-1">Bursary and Academic Record Unification Seminar</h4>
                                    </div>
                                    <span class="badge rounded bg-gray-100 dark:bg-gray-800 text-secondary dark:text-gray-400 fs-7 px-3 py-1 font-semibold flex-none">January 22, 2026</span>
                                </div>
                                <p class="fs-6 text-secondary dark:text-gray-400 leading-relaxed mb-0">
                                    Presenting pilot results of EduOS deployments at three universities in Abuja. The seminar gathered vice-chancellors, registrars, and technical partners to discuss data interoperability, securing records, and bursary efficiency gains of over 40%.
                                </p>
                            </div>
                        </div>

                        <!-- Timeline Item 3 -->
                        <div class="timeline-item">
                            <div class="timeline-marker"></div>
                            <div class="panel bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 rounded-3 p-4 shadow-xs">
                                <div class="vstack sm:hstack justify-between items-start sm:items-center gap-2 mb-2">
                                    <div class="vstack gap-0">
                                        <span class="fs-7 text-primary dark:text-secondary-600 fw-bold uppercase">Hackathon</span>
                                        <h4 class="h3 m-0 fw-bold text-dark dark:text-white mt-1">Cortia InsurTech Hack: Policy Customization APIs</h4>
                                    </div>
                                    <span class="badge rounded bg-gray-100 dark:bg-gray-800 text-secondary dark:text-gray-400 fs-7 px-3 py-1 font-semibold flex-none">November 12, 2025</span>
                                </div>
                                <p class="fs-6 text-secondary dark:text-gray-400 leading-relaxed mb-0">
                                    Developers and engineering teams competed to build dynamic risk pricing widgets and notification frameworks on top of the CoreSure micro-insurance network, resulting in three integration prototypes ready for regional trials.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Past Events Timeline end -->

</div>
@endsection
