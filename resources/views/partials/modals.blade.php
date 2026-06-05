<!--  Search modal -->
<div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white" data-uc-height-viewport="">

        <div class="uc-modal-close-full m-1 p-0 vstack gap-narrow text-center">
            <button class="icon-3 btn btn-md btn-dark dark:bg-white dark:text-dark w-24px sm:w-32px h-24px sm:h-32px rounded-circle flex-1" type="button">
                <i class="unicon-close"></i>
            </button>
            <span class="ft-tertiary fs-7">ESC</span>
        </div>

        <div class="panel w-100 sm:w-500px px-2 py-10">
            <h3 class="h4 sm:h2 text-center">What are you looking for?</h3>
            <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700" action="#">
                <span class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i class="unicon-search icon-3"></i></span>
                <input type="search" name="q" class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white" placeholder="Type your keyword.." aria-label="Search" autofocus>
            </form>
        </div>
    </div>
</div>

<!--  Newsletter modal -->
<div id="uc-newsletter-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog w-800px bg-white text-dark dark:bg-gray-900 dark:text-white rounded-3 p-1 overflow-hidden">
        <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
            <i class="unicon-close"></i>
        </button>
        <div class="row md:child-cols-6 col-match g-0">
            <div class="d-none md:d-flex">
                <div class="position-relative w-100 ratio-1x1 rounded-2 overflow-hidden">
                    <img class="media-cover" src="{{ asset('assets/images/common/newsletter.jpg') }}" alt="Newsletter image">
                </div>
            </div>
            <div>
                <div class="panel vstack self-center p-4 md:py-8 text-center">
                    <h3 class="h3 md:h2">Subscribe to our Newsletter</h3>
                    <p class="ft-tertiary">Join 10k+ people to get notified about new posts, news and updates.</p>
                    <div class="panel mt-2 lg:mt-4">
                        <form class="vstack gap-1">
                            <input type="email" class="form-control form-control-sm w-full fs-6 bg-white dark:border-white dark:border-gray-700" placeholder="Your email address..">
                            <button type="submit" class="btn btn-sm btn-primary">Sign up</button>
                        </form>
                        <p class="fs-7 mt-2">Do not worry we don't spam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Acccount modal -->
<div id="uc-account-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog lg:max-w-500px bg-gray-25 text-dark dark:bg-gray-800 dark:text-white rounded">

        <button class="uc-modal-close-default top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90" type="button">
            <i class="unicon-close"></i>
        </button>


        <div class="panel vstack gap-2 md:gap-4 text-center">
            <ul class="account-tabs-nav nav-x justify-center h6 py-2 border-bottom d-none" data-uc-switcher="animation: uc-animation-slide-bottom-small, uc-animation-slide-top-small">
                <li><a href="#">Sign in</a></li>
                <li><a href="#">Sign up</a></li>
                <li><a href="#">Reset password</a></li>
                <li><a href="#">Terms of use</a></li>
            </ul>
            <div class="account-tabs-content uc-switcher px-3 lg:px-4 py-4 lg:py-8 m-0 lg:mx-auto vstack justify-center items-center">
                <div class="w-100">
                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                        <h4 class="h5 lg:h4 m-0">Log in</h4>
                        <div class="panel vstack gap-4 w-100 sm:w-350px mx-auto">
                            <form class="vstack gap-2">
                                <input class="form-control h-48px w-full bg-white dark:border-white dark:text-dark" type="email" placeholder="Your email" required>
                                <input class="form-control h-48px w-full bg-white dark:border-white dark:text-dark" type="password" placeholder="Password" required>
                                <div class="hstack justify-between items-start text-start">
                                    <div class="form-check text-start rtl:text-end">
                                        <input class="form-check-input rounded-0 dark:bg-gray-900 dark:text-white dark:border-gray-700" type="checkbox" id="inputCheckRemember">
                                        <label class="hstack justify-between form-check-label fs-7 sm:fs-6" for="inputCheckRemember">Remember me?</label>
                                    </div>
                                    <a href="#" class="uc-link" data-uc-switcher-item="2">Forgot password</a>
                                </div>
                                <button class="btn btn-primary btn-md text-white lg:mt-2" type="submit">Log in</button>
                            </form>
                            <div class="panel">
                                <hr class="m-0">
                                <span class="position-absolute top-50 start-50 translate-middle p-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                            </div>
                            <div class="hstack gap-2">
                                <a href="#google" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded border border-gray-900 dark:border-white border-opacity-10">
                                    <i class="icon icon-1 unicon-logo-google"></i>
                                </a>
                                <a href="#facebook" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded border border-gray-900 dark:border-white border-opacity-10">
                                    <i class="icon icon-1 unicon-logo-facebook"></i>
                                </a>
                                <a href="#x" class="hstack items-center justify-center flex-1 gap-1 h-48px text-none rounded border border-gray-900 dark:border-white border-opacity-10">
                                    <i class="icon icon-1 unicon-logo-x-filled"></i>
                                </a>
                            </div>
                        </div>
                        <p class="fs-7 sm:fs-6">Have no account yet? <a class="uc-link" href="#" data-uc-switcher-item="1">Sign up</a></p>
                    </div>
                </div>
                <!-- ... other account tabs (Sign up, Reset password, Terms of use) ... -->
            </div>
        </div>
    </div>
</div>

<!--  Menu panel -->
<div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
    <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">

        <header class="uc-offcanvas-header hstack justify-between items-center pb-2 bg-white dark:bg-gray-900">
            <div class="uc-logo">
                <a class='h5 text-none text-gray-900 dark:text-white' href='{{ url('/') }}'>
                    <img class="w-128px d-none dark:d-block" src="{{ asset('assets/images/main-logo/logo-dark.svg') }}" alt="Cortia">
                    <img class="w-128px d-block dark:d-none" src="{{ asset('assets/images/main-logo/logo-light.svg') }}" alt="Cortia">
                </a>
            </div>
            <button class="uc-offcanvas-close rtl:end-auto rtl:start-0 m-1 mt-2 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                <i class="unicon-close"></i>
            </button>
        </header>

        <div class="panel">
            <form id="search-panel" class="form-icon-group vstack gap-1 mb-2" data-uc-sticky="">
                <input type="email" class="form-control form-control-sm fs-7 rounded-default" placeholder="Search..">
                <span class="form-icon text-gray">
            <i class="unicon-search icon-1"></i>
        </span>
            </form>
            <ul class="nav-y gap-narrow fw-medium fs-6" data-uc-nav>
                <li class="uc-parent">
                    <a href='#'>Infrastructure Stack</a>
                    <ul class="uc-nav-sub">
                        <li><a href='{{ url('/landcerta') }}'>LandCerta</a></li>
                        <li><a href='{{ url('/coresure') }}'>CoreSure</a></li>
                        <li><a href='{{ url('/eduos') }}'>OII (University Infrastructure)</a></li>
                    </ul>
                </li>
                <li class="uc-parent">
                    <a href='#'>Solutions</a>
                    <ul class="uc-nav-sub">
                        <li><a href='{{ url('/solutions') }}#education'>Education</a></li>
                        <li><a href='{{ url('/solutions') }}#real-estate'>Real Estate</a></li>
                        <li><a href='{{ url('/solutions') }}#insurance'>Insurance</a></li>
                    </ul>
                </li>
                <li class="uc-parent">
                    <a href='#'>Capabilities</a>
                    <ul class="uc-nav-sub">
                        <li><a href='{{ url('/aisolution') }}'>AI Solutions</a></li>
                        <li><a href='{{ url('/development') }}'>Mobile/Web Development</a></li>
                        <li><a href='{{ url('/contact') }}'>IT Consulting</a></li>
                    </ul>
                </li>
                <li><a href='{{ url('/services') }}'>Services</a></li>
                <li class="uc-parent">
                    <a href='#'>About Us</a>
                    <ul class="uc-nav-sub">
                        <li><a href='{{ url('/about') }}'>Mission & Vision</a></li>
                        <li><a href='{{ url('/about') }}#core-values'>Core Values</a></li>
                        <li><a href='{{ url('/about') }}#core-values'>Our Team</a></li>
                    </ul>
                </li>
                <li class="uc-parent">
                    <a href='#'>Insights</a>
                    <ul class="uc-nav-sub">
                        <li><a href='{{ url('/events') }}'>Events</a></li>
                        <li><a href='{{ url('/gallery') }}'>Gallery</a></li>
                        <li><a href='{{ url('/media') }}'>Media</a></li>
                    </ul>
                </li>
                <li><a href='#'>Get Started</a></li>
                <li class="hr opacity-10 my-1"></li>
                <li><a href='#'>Partner with Cortia</a></li>
            </ul>
            <ul class="social-icons nav-x mt-4">
                <li>
                    <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
                    <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
                    <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
                    <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
                </li>
            </ul>
            <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                <div class="vstack gap-1">
                    <span class="fs-7 opacity-60">Select theme:</span>
                    <div class="darkmode-trigger" data-darkmode-switch="">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider fs-5"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--  Cart panel -->
<div id="uc-cart-panel" data-uc-offcanvas="overlay: true; flip: true;">
    <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">

        <button class="uc-offcanvas-close top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90" type="button">
            <i class="unicon-close"></i>
        </button>

        <div class="mini-cart-content vstack justify-between panel h-100">
            <div class="mini-cart-header">
                <h3 class="title h5 m-0 text-dark dark:text-white">Shopping cart</h3>
            </div>
            <div class="mini-cart-listing panel flex-1 my-4 overflow-scroll">
                <p class="alert alert-warning">Your cart is empty!</p>
            </div>
            <div class="mini-cart-footer panel pt-3 border-top">
                <div class="panel vstack gap-3 justify-between">
                    <div class="mini-cart-total hstack justify-between">
                        <h5 class="h5 m-0 text-dark dark:text-white">Subtotal</h5>
                        <b class="fs-5">$0.00</b>
                    </div>
                    <div class="mini-cart-actions vstack gap-1">
                        <a class='btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700' href='#'>View cart</a>
                        <a class='btn btn-md btn-primary text-white dark:bg-secondary dark:text-primary' href='#'>Checkout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--  Favorites modal -->
<div id="uc-favorites-panel" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">

        <button class="uc-modal-close-default top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90" type="button">
            <i class="unicon-close"></i>
        </button>


        <div class="panel vstack justify-center items-center gap-2 text-center py-8">
            <i class="icon icon-4 unicon-bookmark mb-2 text-primary dark:text-white"></i>
            <h2 class="h4 md:h3 m-0">Your favorites</h2>
            <p class="fs-5 opacity-60">You have not yet added any items to your favorites list.</p>
            <a href="#" class="btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 mt-2 uc-modal-close">Browse items</a>
        </div>
    </div>
</div>

<!--  Contact modal -->
<div id="uc-contact-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog lg:max-w-650px bg-gray-25 text-dark dark:bg-gray-800 dark:text-white rounded-1-5">

        <button class="uc-modal-close-default top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90" type="button">
            <i class="unicon-close"></i>
        </button>


        <div class="panel vstack gap-2 md:gap-4 text-center">
            <div class="panel cstack px-3 md:px-4 py-4 md:py-8 m-0 lg:mx-auto">
                <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                    <h4 class="h5 lg:h4 m-0">Schedule your 15-minute demo now</h4>
                    <div class="panel w-100 sm:w-350px md:w-500px mx-auto">
                        <form class="vstack gap-2">
                            <div class="vstack lg:hstack gap-2">
                                <input class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white dark:text-dark" type="text" placeholder="Full name*" required>
                                <input class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white dark:text-dark" type="text" placeholder="Last name*" required>
                            </div>
                            <div class="vstack lg:hstack gap-2">
                                <input class="form-control h-48px w-100 md:w-1/2 bg-white dark:border-white dark:text-dark" type="email" placeholder="Your email*" required>
                                <input class="form-control h-48px w-100 md:w-1/2 rtl:text-end bg-white dark:border-white dark:text-dark" type="tel" placeholder="Phone number*" required>
                            </div>
                            <input class="form-control h-48px w-full bg-white dark:border-white dark:text-dark" type="text" placeholder="Company name*" required>
                            <textarea class="form-control min-h-150px w-full bg-white dark:border-white dark:text-dark" placeholder="Your message.."></textarea>
                            <button class="btn btn-primary btn-md text-white mt-2" type="submit">Schedule my demo</button>
                            <p class="fs-7 opacity-70 mt-2 text-center">We’ll tailor your demo to your immediate needs and answer all your questions. Get ready to see how it works!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Bottom Actions Sticky -->
<div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
    <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white" data-darkmode-toggle="">
        <label class="switch">
            <span class="sr-only">Dark mode toggle</span>
            <input type="checkbox">
            <span class="slider fs-5"></span>
        </label>
    </div>
    <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="#top" data-uc-backtotop>
        <i class="icon-2 unicon-chevron-up"></i>
    </a>
</div>
