@extends('layouts.app')

@section('content')

<div class="section panel overflow-hidden current-path bg-white">
    <div class="container max-w-2xl">
        <div class="panel vstack gap-4 lg:gap-6 xl:gap-8 py-6 lg:py-8 xl:py-10">

            <header class="section-header panel vstack items-center text-center gap-2 position-relative overflow-hidden rounded-3 text-white"
                style="background: linear-gradient(rgba(10, 20, 36, 0.75), rgba(10, 20, 36, 0.75)), #0a1424 url({{ asset('assets/images/solutions/aicore-hero-bg.png') }}) no-repeat center center / cover; padding: 100px 24px; min-height: 500px; justify-content: center;">

                <div class="position-relative z-99 max-w-700px mx-auto vstack gap-2">
                    <span class="fs-6 text-uppercase tracking-wider text-secondary fw-bold">Cortia Capabilities</span>
                    <h1 class="display-4 sm:display-2 m-0 text-white fw-bold">Cortia AI Core: Localized Enterprise Intelligence</h1>
                    <p class="fs-5 text-white-50 mt-1">Dismantling data blindspots and manual operational scaling costs across African industries through custom context-aware AI models.</p>

                    <div class="panel mt-3">
                        <a href="#section_problem_ai" class="btn btn-md btn-secondary text-none d-inline-flex items-center gap-1">
                            Explore Neural Architecture
                            <i class="icon unicon unicon-arrow-down"></i>
                        </a>
                    </div>
                </div>

                </header>

            <div class="row g-4 lg:g-6 xl:g-10 justify-between">

                <div class="lg:col-8">
                    <article class="panel vstack gap-3 xl:gap-4 font-sans text-neutral-800" id="section_problem_ai">

                        <div class="panel bg-light p-4 rounded border-start border-4 border-danger mb-3 shadow-sm">
                            <h3 class="h4 text-danger-dark m-0 fw-bold">The Context Gap in Global Artificial Intelligence</h3>
                            <p class="fs-5 m-0 mt-2 text-secondary">
                                Generic global AI models consistently fail when deployed within foundational African industries. They are blind to local document configurations, variations in regional business accents, and the unstructured, fragmented real-world data patterns typical of public institutions, real estate registries, and regional logistics chains.
                            </p>
                        </div>

                        <div class="panel overflow-hidden rounded my-3 shadow-sm border">
                            <img src="{{ asset('assets/images/solutions/aicore-problem.png') }}" alt="African data scientist evaluating regional document formats" class="w-100 object-cover h-400px">
                            </div>

                        <h2 class="h2 text-black fw-bold mt-4">The Solution: Intentional, Domain-Specific Models</h2>
                        <p class="fs-5">
                            Cortia AI Core bridges this operational gap. Instead of relying purely on generalized web data, our foundational intelligence infrastructure is engineered to ingest, parse, and draw insights straight from complex local environments.
                        </p>

                        <p class="fs-5">
                            By deploying specialized natural language architectures and neural document-processing engines, Cortia AI Core accelerates workflows across our entire ecosystem. It securely automates high-volume paperwork processing, checks verification strings instantly, and flags structural data anomalies before they impact bottom lines.
                        </p>

                        <div class="panel overflow-hidden rounded my-4 shadow-sm border">
                            <img src="{{ asset('assets/images/solutions/aicore-success.png') }}" alt="African enterprise team collaborating on data intelligence platform" class="w-100 object-cover h-400px">
                            </div>

                        <h3 class="h3 text-black fw-bold mt-4">Core Framework Framework & Integration</h3>
                        <ul class="vstack gap-2 fs-5 list-unstyled ps-0">
                            <li class="d-flex items-start gap-2">
                                <i class="unicon unicon-checkmark text-success fs-4 mt-1"></i>
                                <span><strong>Intelligent Document Parsing:</strong> Instantly process unstructured local paper logs, receipts, and text sheets with high OCR text-extraction accuracy.</span>
                            </li>
                            <li class="d-flex items-start gap-2">
                                <i class="unicon unicon-checkmark text-success fs-4 mt-1"></i>
                                <span><strong>Predictive Risk Engines:</strong> Analyze underlying operational data trails to instantly point out transaction abnormalities or fraudulent activity.</span>
                            </li>
                            <li class="d-flex items-start gap-2">
                                <i class="unicon unicon-checkmark text-success fs-4 mt-1"></i>
                                <span><strong>Localized Voice & NLU Modules:</strong> Highly optimized context processors built to handle regional dialects, local industry terminology, and custom slang configurations seamlessly.</span>
                            </li>
                        </ul>

                        <div class="panel my-4 border-start border-4 border-primary p-4 bg-primary-subtle rounded">
                            <p class="fs-5 fw-medium m-0 text-primary-dark text-italic">
                                "AI only adds enterprise value when it accurately respects the unique parameters of the environment it serves. We are building the engine that translates raw regional data into structured execution."
                            </p>
                        </div>
                    </article>
                </div>

                <div class="lg:col-4 xl:col-3 lg:sticky-top h-fit vstack gap-4" style="top: 100px;">
                    
                    <aside class="panel vstack gap-4 bg-light p-4 rounded shadow-sm border border-primary-subtle">
                        <div class="vstack gap-3">
                            <h4 class="h5 text-black fw-bold m-0 d-flex items-center gap-1">
                                <i class="unicon unicon-processor text-primary"></i>
                                System Capability
                            </h4>
                            <p class="fs-6 text-secondary m-0">Scale up your automated institutional processing pipelines utilizing neural models optimized for your exact data inputs.</p>
                            
                            <hr class="my-1 border-neutral-300">
                            
                            <div class="vstack gap-2">
                                <div class="hstack gap-2 items-start fs-6">
                                    <i class="unicon unicon-checkmark text-success fs-5"></i>
                                    <span class="text-neutral-800 fw-medium">Unstructured data onboarding</span>
                                </div>
                                <div class="hstack gap-2 items-start fs-6">
                                    <i class="unicon unicon-checkmark text-success fs-5"></i>
                                    <span class="text-neutral-800 fw-medium">Private server data security</span>
                                </div>
                                <div class="hstack gap-2 items-start fs-6">
                                    <i class="unicon unicon-checkmark text-success fs-5"></i>
                                    <span class="text-neutral-800 fw-medium">API integration layer</span>
                                </div>
                            </div>
                        </div>

                        <div class="panel pt-2">
                            <a href="{{ url('/contact') }}" class="btn btn-md btn-primary w-100 justify-center text-none fw-bold shadow-xs">
                                Request Capabilities Audit
                                <i class="icon unicon unicon-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </aside>

                    <aside class="panel bg-light p-4 rounded shadow-sm border border-neutral-200">
                        <div class="vstack gap-3">
                            <h4 class="h6 text-uppercase tracking-wider text-muted fw-bold m-0">Ecosystem Frameworks</h4>
                            
                            <div class="vstack gap-3 mt-1">
                                <div class="vstack gap-0">
                                    <span class="fs-6 fw-bold text-black mb-1">OCR & Vision Layer</span>
                                    <span class="fs-7 text-muted leading-tight">Digesting irregular property maps, stamps, and land registration documents with high accuracy.</span>
                                </div>
                                <div class="vstack gap-0">
                                    <span class="fs-6 fw-bold text-black mb-1">Risk Assessment Logic</span>
                                    <span class="fs-7 text-muted leading-tight">Predictive engines built directly inside micro-insurance ledgers to calculate security indices instantly.</span>
                                </div>
                                <div class="vstack gap-0">
                                    <span class="fs-6 fw-bold text-black mb-1">NLU Query Pipeline</span>
                                    <span class="fs-7 text-muted leading-tight">Semantic document lookup infrastructure assisting local public administrators in searching millions of historical database entries.</span>
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