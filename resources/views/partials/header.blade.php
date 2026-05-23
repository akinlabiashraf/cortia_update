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
                            <a href="{{ url('/services') }}">Infrastructure Stack <span data-uc-navbar-parent-icon></span></a>
                            <div class="uc-navbar-dropdown"
                                data-uc-drop="mode: click; offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                <div class="uc-drop-grid row child-cols g-4" data-uc-grid>
                                    <div>
                                        <div class="uc-drop-grid row child-cols g-4" data-uc-grid>
                                            <div>
                                                <ul class="uc-nav uc-navbar-dropdown-nav">
                                                    <li class="uc-nav-header">Our Ventures</li>
                                                    <li>
                                                        <a href="{{ url('/projects') }}#landcerta">
                                                            <div class="hstack gap-2">
                                                                <div class="w-32px h-32px cstack bg-primary text-white rounded-1 shadow-xs">
                                                                    <i class="unicon-building icon-1"></i>
                                                                </div>
                                                                <div class="vstack gap-0">
                                                                    <span class="fw-bold">LandCerta</span>
                                                                    <span class="fs-7 opacity-70">Property Verification</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/projects') }}#coresure">
                                                            <div class="hstack gap-2">
                                                                <div class="w-32px h-32px cstack bg-secondary text-primary rounded-1 shadow-xs">
                                                                    <i class="unicon-shield icon-1"></i>
                                                                </div>
                                                                <div class="vstack gap-0">
                                                                    <span class="fw-bold">CoreSure</span>
                                                                    <span class="fs-7 opacity-70">Insurance Infrastructure</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/projects') }}#oii">
                                                            <div class="hstack gap-2">
                                                                <div class="w-32px h-32px cstack bg-gray-100 text-dark rounded-1 shadow-xs">
                                                                    <i class="unicon-education icon-1"></i>
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
                                            <div class="col-6">
                                                <div class="panel p-3 bg-gray-25 dark:bg-gray-800 rounded-1">
                                                    <h5 class="h6 fw-bold mb-1">Infrastructure-as-a-Service</h5>
                                                    <p class="fs-7 opacity-70 mb-2">Cortia serves as the foundational engine powering specialized industries through robust technological stacks.</p>
                                                    <a href="{{ url('/services') }}" class="uc-link fw-bold fs-7">Learn about our Ecosystem <i class="unicon-arrow-right ms-narrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('/services') }}">Solutions <span data-uc-navbar-parent-icon></span></a>
                            <div class="uc-navbar-dropdown"
                                data-uc-drop="mode: click; offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                <div class="uc-drop-grid row child-cols g-4" data-uc-grid>
                                    <div>
                                        <div class="uc-drop-grid row child-cols g-4" data-uc-grid>
                                            <div>
                                                <ul class="uc-nav uc-navbar-dropdown-nav">
                                                    <li class="uc-nav-header">Our Ventures</li>
                                                    <li>
                                                        <a href="{{ url('/projects') }}#landcerta">
                                                            <div class="hstack gap-2">
                                                                <div class="w-32px h-32px cstack bg-primary text-white rounded-1 shadow-xs">
                                                                    <i class="unicon-building icon-1"></i>
                                                                </div>
                                                                <div class="vstack gap-0">
                                                                    <span class="fw-bold">Real Estate</span>
                                                                    <span class="fs-7 opacity-70">Property Verification</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/projects') }}#coresure">
                                                            <div class="hstack gap-2">
                                                                <div class="w-32px h-32px cstack bg-secondary text-primary rounded-1 shadow-xs">
                                                                    <i class="unicon-shield icon-1"></i>
                                                                </div>
                                                                <div class="vstack gap-0">
                                                                    <span class="fw-bold">CoreSure</span>
                                                                    <span class="fs-7 opacity-70">Insurance Infrastructure</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/projects') }}#oii">
                                                            <div class="hstack gap-2">
                                                                <div class="w-32px h-32px cstack bg-gray-100 text-dark rounded-1 shadow-xs">
                                                                    <i class="unicon-education icon-1"></i>
                                                                </div>
                                                                <div class="vstack gap-0">
                                                                    <span class="fw-bold">Institutional OS</span>
                                                                    <span class="fs-7 opacity-70">University Infrastructure</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-7">
                                                <div class="panel overflow-hidden rounded-1 border d-flex items-center justify-center bg-gray-25 dark:bg-gray-900"
                                                    style="max-height: 160px; width: 100%; margin: auto;">
                                                    <img src="{{ asset('assets/images/solutions/cortia-ecosystem-vector.png') }}"
                                                        alt="Cortia Solutions Ecosystem Diagram"
                                                        class="w-100 h-100 object-contain p-2">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li>
                            <a href="{{ url('/services') }}">Solutions <span data-uc-navbar-parent-icon></span></a>
                            <div class="uc-navbar-dropdown w-200px" data-uc-drop="mode: click; offset: 0; animation: uc-animation-slide-top-small; duration: 150;">
                                <ul class="uc-nav uc-navbar-dropdown-nav">
                                <li><a href="{{ url('/projects') }}#oii">Education</a></li>
                                    <li><a href="{{ url('/projects') }}#landcerta">Real Estate</a></li>
                                    <li><a href="{{ url('/projects') }}#coresure">Insurance</a></li>
                                </ul>
                            </div>
                        </li> -->
                        <li>
                            <a href="#">Capabilities <span data-uc-navbar-parent-icon></span></a>
                            <div class="uc-navbar-dropdown w-250px" data-uc-drop="mode: click; offset: 0; animation: uc-animation-slide-top-small; duration: 150;">
                                <ul class="uc-nav uc-navbar-dropdown-nav">
                                    <li><a href="#">AI Solutions</a></li>
                                    <li><a href="#">Mobile/Web Development</a></li>
                                    <li><a href="#">IT Consulting</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{ url('/services') }}">Ecosystem</a></li>
                        <li>
                            <a href="{{ url('/about') }}">About Us <span data-uc-navbar-parent-icon></span></a>
                            <div class="uc-navbar-dropdown w-200px" data-uc-drop="mode: click; offset: 0; animation: uc-animation-slide-top-small; duration: 150;">
                                <ul class="uc-nav uc-navbar-dropdown-nav">
                                    <li><a href="{{ url('/about') }}#mission-vision">Mission & Vision</a></li>
                                    <li><a href="{{ url('/about') }}#core-values">Core Values</a></li>
                                    <li><a href="{{ url('/about') }}#team">Our Team</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Insights</a></li>
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