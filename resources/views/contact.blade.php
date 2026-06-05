                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            @extends('layouts.app')

@section('content')

    <!-- Wrapper start -->
    <div id="wrapper" class="wrap">

        <!-- Section start -->
        <div id="hero_header" class="hero-header section panel overflow-hidden">
            <div class="position-absolute top-0 start-0 end-0 min-h-screen overflow-hidden d-none lg:d-block" data-anime="targets: >*; scale: [0, 1]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 750});">
                <div class="position-absolute top-0 start-0" style="top: 30% !important; left: 15% !important;">
                    <img class="w-32px text-secondary" src="{{ asset('assets/images/common/star.svg') }}" alt="star-1" data-uc-svg>
                </div>
                <div class="position-absolute top-0 end-0" style="top: 15% !important; right: 18% !important;">
                    <img class="w-24px text-secondary" src="{{ asset('assets/images/common/star.svg') }}" alt="star-2" data-uc-svg>
                </div>
            </div>
            <div class="section-outer panel pt-9 lg:pt-10 pb-6 sm:pb-8 lg:pb-9">
                <div class="container">
                    <div class="section-inner panel mt-2 sm:mt-4 lg:mt-0" data-anime="targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                        <div class="vstack items-center gap-2 lg:gap-4 mb-4 sm:mb-6 lg:mb-8 max-w-750px mx-auto text-center">
                            <h1 class="display-4 sm:display-3 lg:display-2 m-0">Schedule a Discovery Session</h1>
                            <p class="fs-6 sm:fs-5 text-dark dark:text-white text-opacity-70">Reach out to our engineering team to discuss how Cortia Technology can build or upgrade your organization's digital infrastructure.</p>
                        </div>
                        <div class="panel rounded-2 overflow-hidden bg-gray-25 dark:bg-gray-900 shadow-xs">
                            <div class="panel row child-cols-12 lg:child-cols-6 g-0">
                                <div class="order-1 lg:order-0">
                                    <div class="panel overflow-hidden h-100 min-h-350px">
                                        <figure class="panel h-100 m-0 rounded">
                                            <img class="media-cover image" src="{{ asset('assets/images/template/hero-contact.png') }}" alt="Hero image">
                                        </figure>
                                        <div class="position-cover text-white vstack justify-end p-4 lg:p-6 xl:p-9">
                                            <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-50"></div>
                                            <div class="panel z-1">
                                                <div class="vstack gap-3">
                                                    <p class="fs-5 xl:fs-4 fw-medium">“Cortia's infrastructure transformed our entire administrative process, delivering security and scale without the usual enterprise friction.”</p>
                                                    <div class="vstack gap-0">
                                                        <p class="fs-6 lg:fs-5 fw-medium">Partner Institution</p>
                                                        <span class="fs-7 opacity-80">Director of Operations</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-0 lg:order-1">
                                    <form class="vstack gap-2 p-3 sm:p-6 xl:p-8 bg-white dark:bg-gray-800 h-100 justify-center">
                                        <p class="fs-6 text-dark dark:text-white text-opacity-70 mb-2">Fill out the form below to request a tailored demo or engineering consultation.</p>
                                        <div class="row child-cols-12 sm:child-cols-6 g-2">
                                            <div>
                                                <input class="form-control h-48px w-full bg-gray-25 dark:border-gray-700 dark:bg-gray-900 dark:text-white" type="text" placeholder="Full name" required>
                                            </div>
                                            <div>
                                                <input class="form-control h-48px w-full bg-gray-25 dark:border-gray-700 dark:bg-gray-900 dark:text-white" type="email" placeholder="Your email" required>
                                            </div>
                                        </div>
                                        <input class="form-control h-48px w-full bg-gray-25 dark:border-gray-700 dark:bg-gray-900 dark:text-white" type="text" placeholder="Organization / Company Name">
                                        <select class="form-select h-48px w-full bg-gray-25 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                                            <option value="" disabled selected>Select Area of Interest</option>
                                            <option value="education">Education Infrastructure (OII)</option>
                                            <option value="real_estate">Real Estate Infrastructure (LandCerta)</option>
                                            <option value="insurance">Insurance Infrastructure (CoreSure)</option>
                                            <option value="other">Other Enterprise Solution</option>
                                        </select>
                                        <textarea class="form-control min-h-150px w-full bg-gray-25 dark:border-gray-700 dark:bg-gray-900 dark:text-white mt-1" placeholder="Tell us about your infrastructure needs.." required></textarea>
                                        <button class="btn btn-primary dark:bg-secondary dark:text-primary btn-md text-white mt-3 w-100" type="submit">Submit Request</button>
                                        <p class="text-center mt-2 fs-7">Or email us directly at <a class="uc-link dark:text-secondary fw-bold" href="mailto:hello@cortiatechnology.com">hello@cortiatechnology.com</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section end -->

        <!-- Section start -->
        <div id="helpful-links" class="section panel overflow-hidden">
            <div class="section-outer panel pb-6 sm:pb-8 lg:pb-9">
                <div class="container sm:max-w-xl xl:max-w-2xl">
                    <div class="section-inner panel">
                        <div class="panel vstack gap-4 sm:gap-6 xl:gap-8">
                            <h2 class="display-4 sm:display-3 lg:display-2 m-0 text-center" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 100;">Other ways to reach us</h2>
                            <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-3 g-2 xl:g-3 justify-between col-match" data-anime="onview: -100; targets: > *; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                                <div>
                                    <div class="panel vstack gap-2 items-center text-center px-3 py-4 lg:py-6 xl:py-8 rounded-2 bg-gray-25 dark:bg-gray-800 lg:hover:-translate-y-2 duration-150 transition-all border dark:border-gray-700 h-100">
                                        <div class="cstack mb-2">
                                            <span><i class="icon-4 unicon-map text-primary dark:text-white"></i></span>
                                        </div>
                                        <h5 class="h5 m-0">Headquarters</h5>
                                        <p class="fs-6 opacity-70 dark:opacity-80">Lagos, Nigeria</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-2 items-center text-center px-3 py-4 lg:py-6 xl:py-8 rounded-2 bg-gray-25 dark:bg-gray-800 lg:hover:-translate-y-2 duration-150 transition-all border dark:border-gray-700 h-100">
                                        <div class="cstack mb-2">
                                            <span><i class="icon-4 unicon-email text-primary dark:text-white"></i></span>
                                        </div>
                                        <h5 class="h5 m-0">Technical Support</h5>
                                        <p class="fs-6 opacity-70 dark:opacity-80">Existing clients can open a ticket.</p>
                                        <a href="#" class="uc-link text-primary dark:text-white fw-bold hstack gap-narrow justify-center">
                                            <span>Support Portal</span>
                                            <i class="position-relative icon icon-1 unicon-arrow-right rtl:rotate-180 translate-y-px"></i>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-2 items-center text-center px-3 py-4 lg:py-6 xl:py-8 rounded-2 bg-gray-25 dark:bg-gray-800 lg:hover:-translate-y-2 duration-150 transition-all border dark:border-gray-700 h-100">
                                        <div class="cstack mb-2">
                                            <span><i class="icon-4 unicon-phone text-primary dark:text-white"></i></span>
                                        </div>
                                        <h5 class="h5 m-0">Call Us</h5>
                                        <p class="fs-6 opacity-70 dark:opacity-80">Mon-Fri from 9am to 6pm.</p>
                                        <a href="tel:+234000000000" class="uc-link text-primary dark:text-white fw-bold hstack gap-narrow justify-center">
                                            <span>+234 000 000 000</span>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <div class="panel vstack gap-2 items-center text-center px-3 py-4 lg:py-6 xl:py-8 rounded-2 bg-gray-25 dark:bg-gray-800 lg:hover:-translate-y-2 duration-150 transition-all border dark:border-gray-700 h-100">
                                        <div class="cstack mb-2">
                                            <span><i class="icon-4 unicon-earth-filled text-primary dark:text-white"></i></span>
                                        </div>
                                        <h5 class="h5 m-0">Social Media</h5>
                                        <p class="fs-6 opacity-70 dark:opacity-80">Follow our developments.</p>
                                        <ul class="social-icons nav-x justify-center mt-1">
                                            <li><a href="#"><i class="unicon-logo-linkedin icon-2"></i></a></li>
                                            <li><a href="#"><i class="unicon-logo-x-filled icon-2"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section end -->

        </div>

@endsection
