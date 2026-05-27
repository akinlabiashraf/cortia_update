@extends('layouts.app')

@section('content')

<!-- Wrapper start -->
<div class="section panel overflow-hidden current-path">
    <div class="container max-w-2xl">
        <div class="panel vstack gap-4 lg:gap-6 xl:gap-8 py-6 lg:py-8 xl:py-10">

            <header class="section-header panel vstack items-center text-center gap-2 position-relative overflow-hidden rounded-3 text-white"
                style="background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url({{ asset('assets/images/solutions/landcerta-hero-bg.png') }}) no-repeat center center / cover; padding: 80px 24px; min-height: 450px; justify-content: center;">

                <div class="position-relative z-99 max-w-700px mx-auto vstack gap-2">
                    <span class="fs-6 text-uppercase tracking-wider text-secondary fw-bold">Cortia Ecosystem</span>
                    <h1 class="display-4 sm:display-2 m-0 text-white fw-bold">Landcerta: Restoring Trust in African Real Estate</h1>
                    <p class="fs-5 text-white-50 mt-1">Dismantling property fraud, double-selling scams, and opaque documentation through a transparent, parcel-based digital registry.</p>

                    <div class="panel mt-3">
                        <a href="#section_problem" class="btn btn-md btn-secondary text-none d-inline-flex items-center gap-1">
                            Explore the Platform
                            <i class="icon unicon unicon-arrow-down"></i>
                        </a>
                    </div>
                </div>

                <!-- <div class="position-absolute bottom-0 start-0 w-100 p-2 bg-dark bg-opacity-75 text-center fs-7 text-muted border-top d-none">
                    💡 *Image Generation Prompt to use for landcerta-hero-bg.jpg:* "A wide cinematic aerial drone photograph of a modern expanding African suburban layout with neat land parcels, some newly constructed buildings, grid roads, clean boundaries, glowing warm sunset light, photorealistic, high-end real estate masterplan photography, non-AI looking textures, 8k resolution."
                </div> -->
            </header>

            <div class="row g-4 lg:g-6 xl:g-10 justify-between">

                <div class="lg:col-8">
                    <article class="panel vstack gap-3 xl:gap-4 font-sans text-neutral-800">

                        <div class="panel bg-light p-4 rounded border-start border-4 border-danger mb-3">
                            <h3 class="h4 text-danger m-0 fw-bold">Have you ever been scammed while buying property?</h3>
                            <p class="fs-5 m-0 mt-2 text-secondary">
                                In markets across Africa, buying land is often a high-risk venture. Thousands of honest buyers lose their life savings to double-selling scams, falsified document forgeries, and ghost properties that exist only on paper.
                            </p>
                        </div>

                        <div class="panel overflow-hidden rounded my-3 shadow-sm">
                            <img src="{{ asset('assets/images/solutions/landcerta-problem.png') }}" alt="Worried land buyer examining documents" class="w-100 object-cover h-400px">
                            <!-- <div class="p-2 bg-neutral-100 text-center fs-7 text-muted border-top">
                                some content can go here okay
                            </div> -->
                        </div>

                        <h2 class="h2 text-black fw-bold mt-4">The Solution: Transparency by Design</h2>
                        <p class="fs-5">
                            Landcerta changes the rules of real estate acquisition. It is a centralized, digital verification application that empowers the buyer with absolute clarity before a single Naira, Cedi, or Shilling changes hands.
                        </p>

                        <p class="fs-5">
                            Instead of relying blindly on unverified paper titles, Landcerta maps real estate assets out into precise, immutable digital parcels. When you look up a property on our platform, you see the full historical data trail, authentic legal details, and true ownership parameters immediately.
                        </p>

                        <div class="panel overflow-hidden rounded my-4 shadow-sm">
                            <img src="{{ asset('assets/images/solutions/landcerta-app.png') }}" alt="Verifying real estate data via tablet" class="w-100 object-cover h-400px">
                            <!-- <div class="p-2 bg-neutral-100 text-center fs-7 text-muted border-top">
                                "A photorealistic over-the-shoulder shot of a black African couple looking happy, standing outdoors on a sunny day holding an iPad showing a sleek modern application interface featuring a clear green map outline of a land parcel layout. Sharp focus, professional branding imagery, raw photography look."
                            </div> -->
                        </div>

                        <h3 class="h3 text-black fw-bold mt-4">Key Features of the Landcerta Framework</h3>
                        <ul class="vstack gap-2 fs-5 list-unstyled ps-0">
                            <li class="d-flex items-start gap-2">
                                <i class="unicon unicon-checkmark text-success fs-4 mt-1"></i>
                                <span><strong>Parcel-Based Indexing:</strong> Every major layout is cataloged by precise individual lots, eliminating overlapping boundaries and double-selling claims.</span>
                            </li>
                            <li class="d-flex items-start gap-2">
                                <i class="unicon unicon-checkmark text-success fs-4 mt-1"></i>
                                <span><strong>End-to-End Ownership History:</strong> Instantly trace the lineage of title deeds from past custodians to the present owner securely.</span>
                            </li>
                            <li class="d-flex items-start gap-2">
                                <i class="unicon unicon-checkmark text-success fs-4 mt-1"></i>
                                <span><strong>Real-Time Data Handover:</strong> Hand over accurate property sheets, zoning laws, and verification status straight into the buyer's hands.</span>
                            </li>
                        </ul>

                        <div class="panel my-4 border-start border-4 border-primary p-4 bg-primary-subtle rounded">
                            <p class="fs-5 fw-medium m-0 text-primary-dark text-italic">
                                "By establishing an open, immutable record system, we are shifting the balance of power back to honest investors and protecting local families from predatory fraudulent schemes."
                            </p>
                        </div>
                    </article>
                </div>

                <div class="lg:col-4 xl:col-3 lg:sticky-top h-fit" style="top: 100px;">
                    <aside class="panel vstack gap-4 bg-light p-4 rounded shadow-sm border">

                        <div class="vstack gap-2">
                            <h4 class="h5 text-black fw-bold m-0">Platform Overview</h4>
                            <hr class="my-1">
                            <div class="hstack justify-between fs-6">
                                <span class="text-muted">Product Name:</span>
                                <span class="fw-medium text-black">Landcerta</span>
                            </div>
                            <div class="hstack justify-between fs-6">
                                <span class="text-muted">Sector Focus:</span>
                                <span class="fw-medium text-black">PropTech / Real Estate</span>
                            </div>
                            <div class="hstack justify-between fs-6">
                                <span class="text-muted">Core Function:</span>
                                <span class="fw-medium text-black">Title Verification</span>
                            </div>
                        </div>

                        <div class="panel pt-2">
                            <a href="{{ url('/contact') }}" class="btn btn-md btn-primary w-100 justify-center text-none">
                                Request Product Demo
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