<!-- Footer start -->
<footer id="uc-footer" class="uc-footer panel overflow-hidden " data-anime="onview: -100; translateY: [24, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 450; delay: 200;">
    <div class="footer-outer">
        <div class="container max-w-2xl">
            <div class="footer-inner vstack gap-4 lg:gap-6 xl:gap-8">
                <div class="uc-footer-widgets panel">
                    <div class="row child-cols-6 lg:child-cols g-4">
                        <div class="col-12 xl:col-4">
                            <div class="panel vstack items-start gap-3 xl:gap-4">
                                <div>
                                    <a href='{{ url('/') }}' style='width: 140px'>
                                        <img class="w-200px d-block dark:d-none" src="{{ asset('assets/images/main-logo/logo-light.svg') }}" alt="Logo light">
                                        <img class="w-200px d-none dark:d-block" src="{{ asset('assets/images/main-logo/logo-dark.svg') }}" alt="Logo dark">
                                    </a>
                                    <p class="fs-6 mt-2">Developing robust, industrial-grade software infrastructure for African education, insurance, and land sectors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 sm:col">
                            <div class="panel">
                                <div class="row child-cols-6 sm:child-cols-4 g-2 justify-end">
                                    <div>
                                        <div class="panel w-fit">
                                            <h5 class="uc-nav-header h5 m-0 mb-1 xl:mb-2">Main pages</h5>
                                            <ul class="nav-y gap-1 fw-medium">
                                                <li><a href='{{ url('/about') }}'>About Us</a></li>
                                                <li><a href='{{ url('/services') }}'>Services</a></li>
                                                <li><a href='{{ url('/projects') }}'>Projects</a></li>
                                                <li><a href='{{ url('/contact') }}'>Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel w-fit">
                                            <h5 class="uc-nav-header h5 m-0 mb-1 xl:mb-2">Infrastructure</h5>
                                            <ul class="nav-y gap-1 fw-medium">
                                                <li><a href='{{ url('/landcerta') }}'>LandCerta</a></li>
                                                <li><a href='{{ url('/coresure') }}'>CoreSure</a></li>
                                                <li><a href='{{ url('/eduos') }}'>OII (EduOS)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel w-fit">
                                            <h5 class="uc-nav-header h5 m-0 mb-1 xl:mb-2">Capabilities</h5>
                                            <ul class="nav-y gap-1 fw-medium">
                                                <li><a href='{{ url('/aisolution') }}'>AI Solutions</a></li>
                                                <li><a href='{{ url('/development') }}'>Development</a></li>
                                                <li><a href='{{ url('/contact') }}'>IT Consulting</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel w-fit">
                                            <h5 class="uc-nav-header h5 m-0 mb-1 xl:mb-2">Insights</h5>
                                            <ul class="nav-y gap-1 fw-medium">
                                                <li><a href='{{ url('/events') }}'>Events</a></li>
                                                <li><a href='{{ url('/gallery') }}'>Gallery</a></li>
                                                <li><a href='{{ url('/media') }}'>Media</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uc-footer-bottom panel vstack lg:hstack gap-3 justify-center lg:justify-between mt-8">
            <div class="container max-w-2xl">
                <div class="panel py-2 sm:py-4 border-top">
                    <div class="vstack items-center gap-2 sm:gap-0 sm:hstack justify-between">
                        <div class="panel text-dark dark:text-white">
                            <p>© {{ date('Y') }} <a href="{{ url('/') }}" class="text-secondary text-none">Cortia</a> All Rights Reserved.</p>
                        </div>
                        <ul class="nav-x justify-center gap-2">
                            <li><a class="w-32px h-32px cstack bg-primary text-white dark:bg-white dark:text-primary rounded" href="#"><i class="icon icon-1 unicon-logo-linkedin"></i></a></li>
                            <li><a class="w-32px h-32px cstack bg-primary text-white dark:bg-white dark:text-primary rounded" href="#"><i class="icon icon-1 unicon-logo-dribbble"></i></a></li>
                            <li><a class="w-32px h-32px cstack bg-primary text-white dark:bg-white dark:text-primary rounded" href="#"><i class="icon icon-1 unicon-logo-x-filled"></i></a></li>
                            <li><a class="w-32px h-32px cstack bg-primary text-white dark:bg-white dark:text-primary rounded" href="#"><i class="icon icon-1 unicon-logo-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
