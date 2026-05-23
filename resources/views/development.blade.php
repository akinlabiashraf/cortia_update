@extends('layouts.app')

@section('content')

<div class="section panel overflow-hidden current-path bg-white">
    <div class="container max-w-2xl">
        <div class="panel vstack gap-4 lg:gap-6 xl:gap-8 py-6 lg:py-8 xl:py-10">

            <header class="section-header panel vstack items-center text-center gap-2 position-relative overflow-hidden rounded-3 text-white"
                style="background: linear-gradient(rgba(12, 20, 28, 0.75), rgba(12, 20, 28, 0.75)), #0c141c url({{ asset('assets/images/solutions/dev-hero-bg.png') }}) no-repeat center center / cover; padding: 100px 24px; min-height: 500px; justify-content: center;">

                <div class="position-relative z-99 max-w-700px mx-auto vstack gap-2">
                    <span class="fs-6 text-uppercase tracking-wider text-secondary fw-bold">Cortia Capabilities</span>
                    <h1 class="display-4 sm:display-2 m-0 text-white fw-bold">High-Performance Web & Mobile Engineering</h1>
                    <p class="fs-5 text-white-50 mt-1">Building lightweight, offline-resilient digital architectures optimized to perform flawlessly across varying local hardware and network constraints.</p>

                    <div class="panel mt-3">
                        <a href="#section_problem_dev" class="btn btn-md btn-secondary text-none d-inline-flex items-center gap-1">
                            Explore Engineering Approach
                            <i class="icon unicon unicon-arrow-down"></i>
                        </a>
                    </div>
                </div>

                </header>

            <div class="row g-4 lg:g-6 xl:g-10 justify-between">

                <div class="lg:col-8">
                    <article class="panel vstack gap-3 xl:gap-4 font-sans text-neutral-800" id="section_problem_dev">

                        <div class="panel bg-light p-4 rounded border-start border-4 border-danger mb-3 shadow-sm">
                            <h3 class="h4 text-danger-dark m-0 fw-bold">The Fragility of Standard Applications in Local Markets</h3>
                            <p class="fs-5 m-0 mt-2 text-secondary">
                                Most modern digital platforms are over-engineered for Western infrastructure. When deployed locally, heavy script bundles, massive data overheads, and absolute dependence on continuous fast internet connections lead to high user churn, slow loading speeds, and frequent application failures on everyday smartphones.
                            </p>
                        </div>

                        <div class="panel overflow-hidden rounded my-3 shadow-sm border">
                            <img src="{{ asset('assets/images/solutions/dev-problem.png') }}" alt="Frustrated phone user experiencing app lag due to data exhaustion" class="w-100 object-cover h-400px">
                            </div>

                        <h2 class="h2 text-black fw-bold mt-4">The Solution: Network-Aware Infrastructure Development</h2>
                        <p class="fs-5">
                            Cortia engineers digital products with constraints in mind. We build applications that are light on background data consumption, load efficiently on mid-tier mobile specifications, and store core functionalities locally on the device to keep running smoothly even during sudden network timeouts.
                        </p>

                        <p class="fs-5">
                            From cross-platform mobile frameworks to optimized progressive web applications (PWAs), our engineering pipeline strips away bloated packages. We deliver fast, high-integrity tools that lower transaction friction and maximize retention for your enterprise.
                        </p>

                        <div class="panel overflow-hidden rounded my-4 shadow-sm border">
                            <img src="{{ asset('assets/images/solutions/dev-success.png') }}" alt="Software engineering team evaluating code architecture in collaborative office" class="w-100 object-cover h-400px">
                            </div>

                        <h3 class="h3 text-black fw-bold mt-4">Our Technical Production Commitments</h3>
                        <ul class="vstack gap-2 fs-5 list-unstyled ps-0">
                            <li class="d-flex items-start gap-2">
                                <i class="unicon unicon-checkmark text-success fs-4 mt-1"></i>
                                <span><strong>Optimized Performance Profiles:</strong> Advanced application bundle-splitting that trims load times down drastically, even on slower 3G and 4G configurations.</span>
                            </li>
                            <li class="d-flex items-start gap-2">
                                <i class="unicon unicon-checkmark text-success fs-4 mt-1"></i>
                                <span><strong>Offline-First State Management:</strong> Local data sync patterns that capture and validate user entries offline, merging them securely into cloud servers once connections restore.</span>
                            </li>
                            <li class="d-flex items-start gap-2">
                                <i class="unicon unicon-checkmark text-success fs-4 mt-1"></i>
                                <span><strong>High-Integrity API Interfaces:</strong> Lightweight server payloads tailored to consume significantly less mobile data, dropping operational entry barriers for mass-market users.</span>
                            </li>
                        </ul>

                        <div class="panel my-4 border-start border-4 border-primary p-4 bg-primary-subtle rounded">
                            <p class="fs-5 fw-medium m-0 text-primary-dark text-italic">
                                "Great software isn't measured by how many features it stacks up, but by how reliably it executes inside the hands of the end-user under real-world conditions."
                            </p>
                        </div>
                    </article>
                </div>

                <div class="lg:col-4 xl:col-3 lg:sticky-top h-fit vstack gap-4" style="top: 100px;">
                    
                    <aside class="panel vstack gap-4 bg-light p-4 rounded shadow-sm border border-primary-subtle">
                        <div class="vstack gap-3">
                            <h4 class="h5 text-black fw-bold m-0 d-flex items-center gap-1">
                                <i class="unicon unicon-layers text-primary"></i>
                                Engineering Standards
                            </h4>
                            <p class="fs-6 text-secondary m-0">Deploy fast, custom applications written to scale seamlessly to millions of users without escalating cloud management expenses.</p>
                            
                            <hr class="my-1 border-neutral-300">
                            
                            <div class="vstack gap-2">
                                <div class="hstack gap-2 items-start fs-6">
                                    <i class="unicon unicon-checkmark text-success fs-5"></i>
                                    <span class="text-neutral-800 fw-medium">Micro-bundle delivery (under 5MB)</span>
                                </div>
                                <div class="hstack gap-2 items-start fs-6">
                                    <i class="unicon unicon-checkmark text-success fs-5"></i>
                                    <span class="text-neutral-800 fw-medium">End-to-end security audits</span>
                                </div>
                                <div class="hstack gap-2 items-start fs-6">
                                    <i class="unicon unicon-checkmark text-success fs-5"></i>
                                    <span class="text-neutral-800 fw-medium">Cross-platform synchronization</span>
                                </div>
                            </div>
                        </div>

                        <div class="panel pt-2">
                            <a href="{{ url('/contact') }}" class="btn btn-md btn-primary w-100 justify-center text-none fw-bold shadow-xs">
                                Launch Project Scope
                                <i class="icon unicon unicon-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </aside>

                    <aside class="panel bg-light p-4 rounded shadow-sm border border-neutral-200">
                        <div class="vstack gap-3">
                            <h4 class="h6 text-uppercase tracking-wider text-muted fw-bold m-0">Development Frameworks</h4>
                            
                            <div class="vstack gap-3 mt-1">
                                <div class="vstack gap-0">
                                    <span class="fs-6 fw-bold text-black mb-1">Robust Mobile Core</span>
                                    <span class="fs-7 text-muted leading-tight">High-performance cross-platform engines offering native execution speeds on both iOS and Android platforms.</span>
                                </div>
                                <div class="vstack gap-0">
                                    <span class="fs-6 fw-bold text-black mb-1">Progressive Web Architecture</span>
                                    <span class="fs-7 text-muted leading-tight">Fast, link-accessible web properties optimized to install smoothly onto homescreens without app store dependency.</span>
                                </div>
                                <div class="vstack gap-0">
                                    <span class="fs-6 fw-bold text-black mb-1">Distributed Backend Scalability</span>
                                    <span class="fs-7 text-muted leading-tight">Highly auditable, secure cloud server endpoints constructed with automated database balancing built-in.</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection