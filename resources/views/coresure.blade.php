@extends('layouts.app')
@section('body_class', 'uni-body panel home-three text-gray-900 dark:bg-black dark:text-white')

@section('content')
<div id="wrapper" class="wrap">
<div class="section panel overflow-hidden current-path bg-white">

    <header class="section-header panel vstack items-center text-center gap-2 position-relative overflow-hidden rounded-3 text-white"
        style="background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ asset('assets/images/solutions/coresure-hero-bg.png') }}) no-repeat center center / cover; padding: 80px 24px; min-height: 450px; justify-content: center;">
        <div class="position-relative z-99 max-w-700px mx-auto vstack gap-2">
            <span class="fs-6 text-uppercase tracking-wider text-secondary fw-bold">Cortia Ecosystem</span>
            <h1 class="display-4 sm:display-2 m-0 text-white fw-bold">CoreSure: Opaque Insurance Made Simple</h1>
            <p class="fs-5 text-white-50 mt-1">Dismantling the barriers of high premium costs and broken promises through reliable, micro-payment asset protection.</p>

            <div class="panel mt-3">
                <a href="#section_problem_coresure" class="btn btn-md btn-secondary text-none d-inline-flex items-center gap-1">
                    See How It Works
                    <i class="icon unicon unicon-arrow-down"></i>
                </a>
            </div>
        </div>

    </header>

    <div class="container max-w-2xl py-4 lg:py-6">
        <div class="row g-4 lg:g-6 xl:g-10 justify-between">

            <div class="lg:col-8">
                <article class="panel vstack gap-4 font-sans text-neutral-800" id="section_problem_coresure">

                    <div class="panel bg-light p-4 rounded border-start border-4 border-warning shadow-sm">
                        <h3 class="h4 text-warning-dark m-0 fw-bold">Why do traditional insurance models fail everyday people?</h3>
                        <p class="fs-5 m-0 mt-2 text-secondary">
                            For many across Africa, insurance feels like a premium luxury that gives back nothing in return. Opaque payout structures mean families pay high amounts of money consistently, only to face endless bottlenecks or denials when attempting to claim their safety net during emergencies.
                        </p>
                    </div>

                    <div class="panel overflow-hidden rounded shadow-sm border">
                        <img src="{{ asset('assets/images/solutions/coresure-problem.png') }}" alt="African small business owner looking concerned at her shop" class="w-100 object-cover h-400px">
                        <div class="p-3 bg-neutral-100 text-center fs-7 text-muted border-top">
                            Don't have contents here
                        </div>
                    </div>

                    <div class="panel">
                        <h2 class="h2 text-black fw-bold">The Solution: Radical, Consistent Affordability</h2>
                        <p class="fs-5">
                            CoreSure fundamentally re-engineers risk protection for the underserved. By stripping away large lump-sum demands, our platform introduces frictionless micro-payments that blend smoothly into anyone's daily cash flow without strain.
                        </p>
                        <p class="fs-5">
                            Whether protecting an individual life, family health, or a local commercial shop, payments are minimized down to insignificant amounts. This ensures that protection becomes accessible to everyone, especially less-privileged earners.
                        </p>
                    </div>

                    <div class="panel bg-light p-4 rounded border my-2">
                        <h4 class="h3 text-black fw-bold mb-3 text-center">Core Pillars of CoreSure</h4>
                        <div class="row g-3 sm:child-cols-6">
                            <div class="panel vstack gap-1 p-2 bg-white rounded border shadow-xs">
                                <h5 class="h6 text-primary fw-bold m-0">Frictionless Micro-Premiums</h5>
                                <p class="fs-6 m-0 text-muted">Pay tiny amounts weekly or monthly that match your real-world income patterns.</p>
                            </div>
                            <div class="panel vstack gap-1 p-2 bg-white rounded border shadow-xs">
                                <h5 class="h6 text-primary fw-bold m-0">Immutable Claims Engine</h5>
                                <p class="fs-6 m-0 text-muted">A clear digital paper trail guarantees that valid claims are processed directly without traditional delays.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel overflow-hidden rounded shadow-sm border">
                        <img src="{{ asset('assets/images/solutions/coresure-success.png') }}" alt="Smiling African family protected by micro-insurance" class="w-100 object-cover h-400px">
                    </div>

                    <p class="fs-5">
                        With CoreSure, we aren't just selling policies—we are establishing systemic trust. By giving everyday citizens an uncomplicated platform to safe-keep their assets, Cortia is layering economic resilience right down to the grassroots level.
                    </p>

                    <div class="panel border-start border-4 border-success p-4 bg-success-subtle rounded">
                        <p class="fs-5 fw-medium m-0 text-success-dark text-italic">
                            "True inclusion isn't just about reducing the price; it's about engineering security that adapts to local realities seamlessly."
                        </p>
                    </div>

                </article>
            </div>

            <div class="lg:col-4 xl:col-3 lg:sticky-top h-fit" style="top: 100px;">
                <aside class="panel vstack gap-4 bg-light p-4 rounded shadow-sm border border-primary-subtle">

                    <div class="vstack gap-3">
                        <h4 class="h5 text-black fw-bold m-0 d-flex items-center gap-1">
                            <i class="unicon unicon-wallet text-primary"></i>
                            Financial Resilience
                        </h4>
                        <p class="fs-6 text-secondary m-0">Secure what matters most to your family or business through stress-free micro-payments built around your life.</p>

                        <hr class="my-1 border-neutral-300">

                        <div class="vstack gap-2">
                            <div class="hstack gap-2 items-start fs-6">
                                <i class="unicon unicon-checkmark text-success fs-5"></i>
                                <span class="text-neutral-800 fw-medium">No hidden fees</span>
                            </div>
                            <div class="hstack gap-2 items-start fs-6">
                                <i class="unicon unicon-checkmark text-success fs-5"></i>
                                <span class="text-neutral-800 fw-medium">Transparent tracking</span>
                            </div>
                            <div class="hstack gap-2 items-start fs-6">
                                <i class="unicon unicon-checkmark text-success fs-5"></i>
                                <span class="text-neutral-800 fw-medium">Instant setup</span>
                            </div>
                        </div>
                    </div>

                    <div class="panel pt-2">
                        <a href="{{ url('/contact') }}" class="btn btn-md btn-primary w-100 justify-center text-none fw-bold shadow-xs">
                            Partner With Us
                            <i class="icon unicon unicon-arrow-right ms-1"></i>
                        </a>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
</div>
@endsection