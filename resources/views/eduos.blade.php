@extends('layouts.app')

@section('body_class', 'uni-body panel home-three text-gray-900 dark:bg-black dark:text-white')

@section('content')
<!-- Wrapper start -->
<div id="wrapper" class="wrap">
    <!-- Header start -->
    <div class="section panel overflow-hidden current-path bg-white">
    
    <header class="section-header panel vstack items-center text-center gap-2 position-relative overflow-hidden rounded-3 text-white mx-auto my-4 max-w-2xl" 
            style="background: linear-gradient(rgba(12, 24, 36, 0.75), rgba(12, 24, 36, 0.75)), #0c1824 url('{{ asset('assets/images/solutions/eduos-hero-bg.png') }}') no-repeat center center / cover; padding: 100px 24px; min-height: 500px; justify-content: center;">
        
        <div class="position-relative z-99 max-w-700px mx-auto vstack gap-2">
            <span class="fs-6 text-uppercase tracking-wider text-secondary fw-bold">Cortia Ecosystem</span>
            <h1 class="display-4 sm:display-2 m-0 text-white fw-bold">Institutional OS: Digitizing Fragmented Infrastructure</h1>
            <p class="fs-5 text-white-50 mt-1">Dismantling manual administrative bottlenecks and revenue leaks across African universities and public institutions through a unified technical engine.</p>
            
            <div class="panel mt-3">
                <a href="#section_problem_eduos" class="btn btn-md btn-secondary text-none d-inline-flex items-center gap-1">
                    Explore Platform Architecture
                    <i class="icon unicon unicon-arrow-down"></i>
                </a>
            </div>
        </div>
        
        </header>

    <div class="container max-w-2xl py-4 lg:py-6">
        <div class="row g-4 lg:g-6 xl:g-10 justify-between">
            
            <div class="lg:col-8">
                <article class="panel vstack gap-4 font-sans text-neutral-800" id="section_problem_eduos">
                    
                    <div class="panel bg-light p-4 rounded border-start border-4 border-danger shadow-sm">
                        <h3 class="h4 text-danger-dark m-0 fw-bold">The Administrative Drag Shackling African Institutions</h3>
                        <p class="fs-5 m-0 mt-2 text-secondary">
                            Across many higher education environments and public institutions in Africa, everyday administration relies on fragmented, paper-heavy systems. Disconnected registries and manual payment reconciliations don't just slow operations down they cause catastrophic untraceable file loss, data vulnerabilities, and massive hidden revenue leakages.
                        </p>
                    </div>

                    <div class="panel overflow-hidden rounded shadow-sm border">
                        <img src="{{ asset('assets/images/solutions/eduos-problem.png') }}" alt="African administrator looking stressed handling physical files" class="w-100 object-cover h-400px">
                        <!-- <div class="p-3 bg-neutral-100 text-center fs-7 text-muted border-top">
                            💡 *Image Generation Prompt to use:* "A realistic cinematic medium shot of a stressed Black African administrative worker in an office looking at stacks of physical folders on his desk, morning light coming from a window, detailed office background, natural real-world textures, raw and authentic photography, non-AI look --ar 4:3"
                        </div> -->
                    </div>

                    <div class="panel">
                        <h2 class="h2 text-black fw-bold">The Solution: An Integrated Institutional Engine</h2>
                        <p class="fs-5">
                            Cortia Institutional OS completely transforms institutional management. Instead of running separate, uncooperative software packages for different departments, our application unifies accounting, student records, and operational workflows into one single, high-integrity technical core.
                        </p>
                        <p class="fs-5">
                            By moving from manual processes to secure digital databases, institutions achieve absolute operational clarity. From tracking a document's processing lineage to maintaining bulletproof data trails, the engine restores institutional accountability where it is needed most.
                        </p>
                    </div>

                    <div class="panel bg-light p-4 rounded border my-2">
                        <h4 class="h3 text-black fw-bold mb-3 text-center">Engineered for Local Infrastructure</h4>
                        <div class="row g-3 sm:child-cols-6">
                            <div class="panel vstack gap-1 p-3 bg-white rounded border shadow-xs">
                                <h5 class="h6 text-primary fw-bold m-0">Bandwidth-Optimized Data</h5>
                                <p class="fs-6 m-0 text-muted">Lightweight software structures designed to perform perfectly under intermittent local network conditions.</p>
                            </div>
                            <div class="panel vstack gap-1 p-3 bg-white rounded border shadow-xs">
                                <h5 class="h6 text-primary fw-bold m-0">Zero-Leak Bursary Trails</h5>
                                <p class="fs-6 m-0 text-muted">Every transaction is automatically tied to a single auditable ledger, immediately sealing revenue gaps.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel overflow-hidden rounded shadow-sm border">
                        <img src="{{ asset('assets/images/solutions/eduos-success.png') }}" alt="Smiling African students utilizing digital portal on campus" class="w-100 object-cover h-400px">
                        <!-- <div class="p-3 bg-neutral-100 text-center fs-7 text-muted border-top">
                            💡 *Image Generation Prompt to use:* "A genuine lifestyle candid medium shot of a young Black African male university student looking happily at a laptop screen on a campus courtyard, talking to his friend sitting next to him, clear bright daylight, crisp focus on human textures, premium tech platform photography --ar 4:3"
                        </div> -->
                    </div>

                    <p class="fs-5">
                        Whether streamlining student registry lookups or deploying localized Computer-Based Testing (CBT) setups that function reliably under local power realities, Cortia Institutional OS delivers the reliable administrative foundation necessary to power modern, transparent African growth.
                    </p>

                    <div class="panel border-start border-4 border-success p-4 bg-success-subtle rounded">
                        <p class="fs-5 fw-medium m-0 text-success-dark text-italic">
                            "Modernizing infrastructure isn't about deploying complex technology; it's about engineering simple, cohesive structures that work flawlessly in our local context."
                        </p>
                    </div>

                </article>
            </div>

            <div class="lg:col-4 xl:col-3 lg:sticky-top h-fit vstack gap-4" style="top: 100px;">
                
                <aside class="panel vstack gap-4 bg-light p-4 rounded shadow-sm border border-primary-subtle">
                    <div class="vstack gap-3">
                        <h4 class="h5 text-black fw-bold m-0 d-flex items-center gap-1">
                            <i class="unicon unicon-cube text-primary"></i>
                            Operational Stability
                        </h4>
                        <p class="fs-6 text-secondary m-0">Transition your operations from disjointed manual files into a unified digital ecosystem built to eliminate institutional leaks and admin friction.</p>
                        
                        <hr class="my-1 border-neutral-300">
                        
                        <div class="vstack gap-2">
                            <div class="hstack gap-2 items-start fs-6">
                                <i class="unicon unicon-checkmark text-success fs-5"></i>
                                <span class="text-neutral-800 fw-medium">Real-time fiscal tracking</span>
                            </div>
                            <div class="hstack gap-2 items-start fs-6">
                                <i class="unicon unicon-checkmark text-success fs-5"></i>
                                <span class="text-neutral-800 fw-medium">Unified identity index</span>
                            </div>
                            <div class="hstack gap-2 items-start fs-6">
                                <i class="unicon unicon-checkmark text-success fs-5"></i>
                                <span class="text-neutral-800 fw-medium">99.9% offline fallback capability</span>
                            </div>
                        </div>
                    </div>

                    <div class="panel pt-2">
                        <a href="{{ url('/contact') }}" class="btn btn-md btn-primary w-100 justify-center text-none fw-bold shadow-xs">
                            Request System Audit
                            <i class="icon unicon unicon-arrow-right ms-1"></i>
                        </a>
                    </div>
                </aside>

                <aside class="panel bg-light p-4 rounded shadow-sm border border-neutral-200">
                    <div class="vstack gap-3">
                        <h4 class="h6 text-uppercase tracking-wider text-muted fw-bold m-0">Integrated Modules</h4>
                        
                        <div class="vstack gap-3 mt-1">
                            <div class="vstack gap-0">
                                <span class="fs-6 fw-bold text-black mb-1">Bursary Management</span>
                                <span class="fs-7 text-muted leading-tight">Automated secure tuition fee tracking, payment links, and localized clear ledgers.</span>
                            </div>
                            <div class="vstack gap-0">
                                <span class="fs-6 fw-bold text-black mb-1">Secure Core Registry</span>
                                <span class="fs-7 text-muted leading-tight">Digital identification rosters and end-to-end trace logs for records management.</span>
                            </div>
                            <div class="vstack gap-0">
                                <span class="fs-6 fw-bold text-black mb-1">High-Capacity CBT Engine</span>
                                <span class="fs-7 text-muted leading-tight">Secure, local-server-driven exam systems built to withstand power or network drops.</span>
                            </div>
                        </div>
                    </div>
                </aside>
                
            </div>

        </div>
    </div>
</div>

</div>
<!-- Section end -->


<!-- Cta End -->

</div>
<!-- Wrapper end -->
@endsection