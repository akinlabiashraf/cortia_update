@extends('layouts.app')

@section('content')
<style>
    /* Styling for horizontal pill filter menu */
    .filter-btn-container {
        border-radius: 50px;
        padding: 6px;
        background-color: rgba(var(--bs-primary-rgb), 0.05);
        display: inline-flex;
        gap: 6px;
        flex-wrap: wrap;
        justify-content: center;
        border: 1px solid rgba(var(--bs-primary-rgb), 0.1);
    }

    .dark .filter-btn-container {
        background-color: rgba(255, 255, 255, 0.05);
        border-color: rgba(255, 255, 255, 0.1);
    }

    .filter-btn {
        background: transparent;
        border: none;
        color: var(--bs-gray-600);
        cursor: pointer;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        outline: none;
    }

    .filter-btn:hover {
        color: var(--color-primary);
    }

    .dark .filter-btn:hover {
        color: var(--color-secondary-600);
    }

    .filter-btn.active-filter {
        background-color: var(--color-primary) !important;
        color: #ffffff !important;
        box-shadow: 0 4px 15px rgba(109, 35, 203, 0.3);
    }

    .dark .filter-btn.active-filter {
        background-color: var(--color-secondary-600) !important;
        color: var(--color-black) !important;
        box-shadow: 0 4px 15px rgba(168, 85, 247, 0.3);
    }

    /* Grid and Item Transitions */
    .gallery-item {
        transition: opacity 0.4s cubic-bezier(0.16, 1, 0.3, 1), transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        transform-origin: center center;
    }

    .gallery-item.filtered-out {
        opacity: 0;
        transform: scale(0.9) translateY(10px);
        pointer-events: none;
        position: absolute;
        width: 0;
        height: 0;
        padding: 0;
        margin: 0;
        border: none;
        overflow: hidden;
    }

    /* Lightbox trigger indicator styling */
    .lightbox-trigger {
        position: relative;
        cursor: pointer;
    }

    .lightbox-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(109, 35, 203, 0.4);
        opacity: 0;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
    }

    .lightbox-trigger:hover .lightbox-overlay {
        opacity: 1;
    }

    .lightbox-icon {
        width: 48px;
        height: 48px;
        background: #ffffff;
        color: var(--color-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        transform: scale(0.8);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .lightbox-trigger:hover .lightbox-icon {
        transform: scale(1);
    }
</style>

@php
$galleryItems = [
[
'image' => asset('assets/images/about/about-04.png'),
'title' => 'Cortia Strategy Briefing',
'description' => 'Cortia engineering team planning critical system alignments.',
'category' => 'conferences',
'category_name' => 'Conferences'
],
[
'image' => asset('assets/images/solutions/eduos_admin_dashboard.png'),
'title' => 'EduOS Admin Infrastructure',
'description' => 'A centralized dashboard for academic and bursary operations.',
'category' => 'education',
'category_name' => 'Education'
],
[
'image' => asset('assets/images/solutions/landcerta-app.png'),
'title' => 'LandCerta Coordinate Mapping',
'description' => 'Precise, parcel-based real estate verification interface.',
'category' => 'projects',
'category_name' => 'Projects'
],
[
'image' => asset('assets/images/about/about-02.png'),
'title' => 'Stakeholder Alignment Summit',
'description' => 'Engaging partners to foster trust across African land sectors.',
'category' => 'conferences',
'category_name' => 'Conferences'
],
[
'image' => asset('assets/images/solutions/eduos_cbt_exam.png'),
'title' => 'EduOS CBT System Platform',
'description' => 'Tamper-proof academic assessment testing portal.',
'category' => 'education',
'category_name' => 'Education'
],
[
'image' => asset('assets/images/solutions/coresure_shop_owner_1779919782657.png'),
'title' => 'CoreSure Merchant Ecosystem',
'description' => 'Deploying micro-insurance to protect local micro-businesses.',
'category' => 'projects',
'category_name' => 'Projects'
],
[
'image' => asset('assets/images/about/about-07.png'),
'title' => 'Engineering Roundtable',
'description' => 'Brainstorming session on offline-first database replication.',
'category' => 'conferences',
'category_name' => 'Conferences'
],
[
'image' => asset('assets/images/solutions/eduos_bursary_finance.png'),
'title' => 'EduOS Tuition Engine',
'description' => 'Unified academic record-keeping and billing infrastructure.',
'category' => 'education',
'category_name' => 'Education'
],
[
'image' => asset('assets/images/solutions/coresure-problem.png'),
'title' => 'CoreSure Claims Validation',
'description' => 'High-integrity policy and claims processing application.',
'category' => 'projects',
'category_name' => 'Projects'
]
];
@endphp

<!-- Wrapper start -->
<div id="wrapper" class="wrap">

    <!-- Header / Hero start -->
    <div id="hero_header" class="hero-header section panel overflow-hidden h-100 pb-4">
        <div class="section-outer panel pt-9 lg:pt-10">
            <div class="container sm:max-w-xl xl:max-w-2xl">
                <!-- <div class="panel section-inner d-flex flex-column items-center justify-center gap-4" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">

                    Decorative shapes matching consistent project design 

                    <img src="{{ asset('assets/images/common/common-01.svg') }}" alt="Icon" class="common-01 d-inline-block position-absolute w-64px xl:w-80px text-primary d-none xl:d-block z-999" data-uc-svg>
                    <img src="{{ asset('assets/images/common/shape-02.svg') }}" alt="Icon" class="shape-02 position-absolute w-80px xl:w-64px text-primary d-none xl:d-block z-999">
                    <img src="{{ asset('assets/images/common/shape-01.svg') }}" alt="Icon" class="shape-01 position-absolute w-64px xl:w-80px text-primary d-none xl:d-block z-999">

                    <div class="panel" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <div class="panel vstack justify-center gap-3 text-center max-w-950px mx-auto">
                            <div class="panel vstack items-center">
                                <h1 class="display-4 md:display-2 lg:display-1 m-0">Our <span class="text-secondary">Gallery</span></h1>
                                <p class="fs-4 lg:w-600px mt-2 text-secondary dark:text-gray-400">A visual look into Cortia's operations, regional conferences, educational portals, and infrastructure projects.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="panel section-inner d-flex flex-column items-center justify-center gap-4" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                    <img src="{{ asset('assets/images/common/common-01.svg') }}" alt="Icon" class="common-01 d-inline-block position-absolute w-64px xl:w-80px text-yellow-400  d-none xl:d-block z-999" data-uc-svg>
                    <img src="{{ asset('assets/images/common/shape-02.svg') }}" alt="Icon" class="shape-02 position-absolute w-80px xl:w-64px text-yellow-400 d-none xl:d-block z-999">
                    <img src="{{ asset('assets/images/common/shape-01.svg') }}" alt="Icon" class="shape-01 position-absolute w-64px xl:w-80px text-yellow-400  d-none xl:d-block z-999">
                    <div class="panel" data-anime="translateY: [80, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 650;">
                        <div class="panel vstack justify-center gap-3 text-center max-w-950px">
                            <div class="panel vstack items-center">
                                <h1 class="display-4 md:display-2 lg:display-1 text-inherit">Our Gallery: Documenting <span class="text-secondary">Cortia's Vision</span> in Action </h1>
                                <p class="fs-5 sm:fs-4 text-inherit lg:w-700px">From high impact regional conferences to innovative educational portals, our visual chronicle showcases the localized technology and infrastructure projects designed to solve critical African challenges and drive sustainable community growth.</p>
                            </div>
                            <div class="panel cstack gap-1 sm:gap-2 xl:mt-4">
                                <a class='btn btn-md bg-primary dark:bg-secondary border-0 text-white dark:text-primary text-none d-inline-flex' href='{{ url('contact') }}'>Get in Touch
                                    <i class="icon lg:icon-1 unicon unicon-arrow-right"></i>
                                </a>
                                <div class="panel cstack gap-1">
                                    <span><img class="w-24px text-secondary" src="{{ asset('assets/images/icons/star-rating.svg') }}" alt="star" data-uc-svg=""></span>
                                    <p class="fs-6 lg:fs-4">4.8/5 on TrustPilot</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header / Hero end -->



    <!-- Gallery Section start -->
    <div class="section-gallery section panel overflow-hidden pb-6 lg:pb-8 xl:pb-10">
        <div class="container sm:max-w-xl xl:max-w-2xl">

            <!-- Horizontal Pill Filter Menu -->
            <div class="panel mb-6 vstack items-center" data-anime="onview: -100; translateY: [24, 0]; opacity: [0, 1]; duration: 450; delay: 100;">
                <div class="filter-btn-container">
                    <button class="btn btn-md rounded-pill px-4 fw-bold filter-btn active-filter" data-filter="all">All</button>
                    <button class="btn btn-md rounded-pill px-4 fw-bold filter-btn" data-filter="conferences">Conferences</button>
                    <button class="btn btn-md rounded-pill px-4 fw-bold filter-btn" data-filter="education">Education</button>
                    <button class="btn btn-md rounded-pill px-4 fw-bold filter-btn" data-filter="projects">Projects</button>
                </div>
            </div>

            <!-- Filterable Image Grid with Lightbox support -->
            <div class="panel mt-4">
                <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 g-4" data-uc-lightbox="animation: slide" id="gallery-grid" data-anime="onview: -100; targets: > *; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(80, {start: 200});">
                    @foreach($galleryItems as $item)
                    <div class="gallery-item col" data-category="{{ $item['category'] }}">
                        <div class="panel h-100 bg-white dark:bg-gray-900 rounded-3 overflow-hidden border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                            <!-- Click opens image in high-quality lightbox -->
                            <a href="{{ $item['image'] }}" class="lightbox-trigger" data-caption="{{ $item['title'] }} - {{ $item['description'] }}">
                                <figure class="featured-image m-0 ratio ratio-4x3 overflow-hidden uc-transition-toggle">
                                    <img src="{{ $item['image'] }}" class="media-cover image uc-transition-scale-up uc-transition-opaque" alt="{{ $item['title'] }}">
                                    <!-- Hover zoom & overlay icon -->
                                    <div class="lightbox-overlay">
                                        <div class="lightbox-icon">
                                            <i class="unicon-search"></i>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                            <div class="p-4 vstack gap-2">
                                <div class="hstack justify-between">
                                    <span class="badge rounded bg-primary-100 text-primary dark:bg-gray-800 dark:text-secondary-600 fs-7 px-2 py-1 font-semibold uppercase">{{ $item['category_name'] }}</span>
                                </div>
                                <h3 class="h4 m-0 fw-bold text-dark dark:text-white">{{ $item['title'] }}</h3>
                                <p class="fs-6 text-secondary dark:text-gray-400 mt-1 mb-0 leading-relaxed">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- Gallery Section end -->

</div>

<!-- Custom Javascript for filtering -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active styling from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active-filter'));
                // Add active styling to current button
                this.classList.add('active-filter');

                const filterValue = this.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');

                    if (filterValue === 'all' || itemCategory === filterValue) {
                        item.classList.remove('filtered-out');
                        // Smoothly restore display and opacity
                        item.style.display = '';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1) translateY(0)';
                        }, 50);
                    } else {
                        // Fade out and scale down
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.9) translateY(10px)';
                        // Mark as filtered out (disables click/interaction)
                        item.classList.add('filtered-out');
                        setTimeout(() => {
                            if (item.classList.contains('filtered-out')) {
                                item.style.display = 'none';
                            }
                        }, 400); // matches the transition duration
                    }
                });
            });
        });
    });
</script>
@endsection