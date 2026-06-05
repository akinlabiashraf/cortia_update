<!-- Header start -->
<header class="uc-header uc-navbar-sticky-wrap z-999 " style="--uc-nav-height: 80px"
    data-uc-sticky="start: 100vh; show-on-up: true; animation: uc-animation-slide-top; sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
    <nav class="uc-navbar-container uc-navbar-float ft-tertiary z-1"
        data-anime="translateY: [-40, 0]; opacity: [0, 1]; easing: easeOutExpo; duration: 750; delay: 0;">
        <div class="container sm:max-w-xl xl:max-w-2xl">
            <div class="uc-navbar min-h-64px lg:min-h-80px text-dark bg-white rounded px-3 mt-3"
                data-uc-navbar="mode: click; animation: uc-animation-slide-top-small; duration: 150;">
                <div class="uc-navbar-left">
                    <a class='text-none' href='{{ url('/') }}'>
                        <img class="logo-light w-150px" src="{{ asset('assets/images/main-logo/logo-light.svg') }}"
                            alt="Cortia">
                    </a>
                    <a class='text-none' href='{{ url('/') }}'>
                        <img class="logo-dark w-150px" src="{{ asset('assets/images/main-logo/logo-dark.svg') }}"
                            alt="Cortia">
                    </a>
                </div>
                <div class="uc-navbar-center">
                    <ul class="uc-navbar-nav gap-3 xl:gap-4 d-none lg:d-flex fw-semibold">
                        <li>
                            <a >Infrastructure Stack <span data-uc-navbar-parent-icon></span></a>
                            <div class="uc-navbar-dropdown w-600px"
                                data-uc-drop="mode: click; offset: 10; boundary: !.uc-navbar; animation: uc-animation-slide-top-small; duration: 250;">
                                <div class="uc-drop-grid row child-cols g-4" data-uc-grid>
                                    <div>
                                        <div class="uc-drop-grid row child-cols g-4" data-uc-grid>
                                            <div class="col-7">
                                                <ul class="uc-nav uc-navbar-dropdown-nav">
                                                    <li class="uc-nav-header">Our Ventures</li>
                                                    <li>
                                                        <a href="{{ url('/landcerta') }}">
                                                            <div class="hstack gap-2">
                                                                <div class="w-32px h-32px cstack bg-primary rounded-1 shadow-xs p-1">
                                                                    <img src="{{ asset('assets/images/icons/machine-learning.svg') }}" class="w-100 h-100 object-contain" alt="LandCerta Icon">
                                                                </div>
                                                                <div class="vstack gap-0">
                                                                    <span class="fw-bold">LandCerta</span>
                                                                    <span class="fs-7 opacity-70">Property Verification</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/coresure') }}">
                                                            <div class="hstack gap-2">
                                                                <div class="w-32px h-32px cstack bg-secondary rounded-1 shadow-xs p-1">
                                                                    <img src="{{ asset('assets/images/icons/chart-notification.svg') }}" class="w-100 h-100 object-contain" alt="CoreSure Icon">
                                                                </div>
                                                                <div class="vstack gap-0">
                                                                    <span class="fw-bold">CoreSure</span>
                                                                    <span class="fs-7 opacity-70">Insurance Infrastructure</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/eduos') }}">
                                                            <div class="hstack gap-2">
                                                                <div class="w-32px h-32px cstack bg-gray-200 rounded-1 shadow-xs p-1">
                                                                    <img src="{{ asset('assets/images/icons/bank.svg') }}" class="w-100 h-100 object-contain" alt="OIIS Icon">
                                                                </div>
                                                                <div class="vstack gap-0">
                                                                    <span class="fw-bold">OII</span>
                                                                    <span class="fs-7 opacity-70">University Infrastructure</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-5">
                                                <div class="panel w-200 h-200 overflow-hidden rounded bg-primary-10 dark:bg-gray-800 p-3 vstack justify-center items-center text-center">
                                                    <img src="{{ asset('assets/images/solutions/cortia_ecosystem_updated.png') }}" class="w-100 h-auto rounded" style="max-width: 200px;" alt="Cortia Ecosystem">
                                                    <h6 class="mt-3 mb-1 text-primary dark:text-white fw-bold">Cortia Ecosystem</h6>
                                                    <p class="fs-7 m-0 opacity-70">Powering African Industry</p>
                                                    <a class="position-cover" href="{{ url('/services') }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li>
                            <a href="{{ url('/about') }}">Company <span data-uc-navbar-parent-icon></span></a>
                            <div class="uc-navbar-dropdown w-400px" data-uc-drop="mode: click; offset: 10; boundary: !.uc-navbar; animation: uc-animation-slide-top-small; duration: 250;">
                                <div class="row child-cols g-4" data-uc-grid>
                                    <div class="col-6">
                                        <ul class="uc-nav uc-navbar-dropdown-nav">
                                            <li class="uc-nav-header">Who We Are</li>
                                            <li><a href="{{ url('/about') }}">About Cortia</a></li>
                                            <li><a href="{{ url('/about') }}#core-values">Our Team</a></li>
                                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <div class="panel w-100 h-100 overflow-hidden rounded bg-secondary-10 dark:bg-gray-800 p-3 vstack justify-center items-center text-center">
                                            <img src="{{ asset('assets/images/common/users.png') }}" class="w-100 h-auto" style="max-width: 80px;" alt="Cortia Team">
                                            <h6 class="mt-2 mb-0 text-secondary dark:text-white fw-bold">Our People</h6>
                                            <a class="position-cover" href="{{ url('/about') }}#core-values"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}">Insights <span data-uc-navbar-parent-icon></span></a>
                            <div class="uc-navbar-dropdown w-400px" data-uc-drop="mode: click; offset: 10; boundary: !.uc-navbar; animation: uc-animation-slide-top-small; duration: 250;">
                                <div class="row child-cols g-4" data-uc-grid>
                                    <div class="col-6">
                                        <ul class="uc-nav uc-navbar-dropdown-nav">
                                            <li class="uc-nav-header">Media</li>
                                            <li><a href="{{ url('/events') }}">Events</a></li>
                                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                            <li><a href="{{ url('/media') }}">Media</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <div class="panel w-100 h-100 overflow-hidden rounded bg-secondary-10 dark:bg-gray-800 p-3 vstack justify-center items-center text-center">
                                            <img src="{{ asset('assets/images/common/users.png') }}" class="w-100 h-auto" style="max-width: 80px;" alt="Cortia Team">
                                            <h6 class="mt-2 mb-0 text-secondary dark:text-white fw-bold">Our People</h6>
                                            <a class="position-cover" href="{{ url('/about') }}#core-values"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li><a href="#">Insights</a></li> -->
                    </ul>
                </div>
                <div class="uc-navbar-right">
                    <a class='btn btn-md btn-primary border-0 text-white text-none d-none lg:d-inline-flex' href='{{ url('/contact') }}'>Partner with Cortia
                        <i class="icon lg:icon-3 unicon-cube"></i>
                    </a>
                    <a class="d-block lg:d-none" href="#uc-menu-panel" data-uc-navbar-toggle-icon data-uc-toggle></a>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Header end -->