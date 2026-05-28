<link rel="preload" href="{{ asset('assets/css/fonts.css') }}" as="style">
<link rel="preload" href="{{ asset('assets/css/unicons.min.css') }}" as="style">
<link rel="preload" href="{{ asset('assets/css/swiper-bundle.min.css') }}" as="style">

<!-- preload footer scripts -->
<link rel="preload" href="{{ asset('assets/js/libs/jquery.min.js') }}" as="script">
<link rel="preload" href="{{ asset('assets/js/libs/scrollmagic.min.js') }}" as="script">
<link rel="preload" href="{{ asset('assets/js/libs/swiper-bundle.min.js') }}" as="script">
<link rel="preload" href="{{ asset('assets/js/libs/anime.min.js') }}" as="script">
<link rel="preload" href="{{ asset('assets/js/libs/prettify.min.js') }}" as="script">
<link rel="preload" href="{{ asset('assets/js/libs/gsap.min.js') }}" as="script">
<link rel="preload" href="{{ asset('assets/js/helpers/data-attr-helper.js') }}" as="script">
<link rel="preload" href="{{ asset('assets/js/helpers/swiper-helper.js') }}" as="script">
<link rel="preload" href="{{ asset('assets/js/helpers/anime-helper.js') }}" as="script">
<link rel="preload" href="{{ asset('assets/js/uikit-components-bs.js') }}" as="script">
<link rel="preload" href="{{ asset('assets/js/app-theme.js') }}" as="script">

<!-- include uni-core components -->
<link rel="stylesheet" href="{{ asset('assets/js/uni-core/css/uni-core.min.css') }}">

<!-- include styles -->
<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/unicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/prettify.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

<!-- include main style -->
<link id="app-style" rel="stylesheet" href="{{ asset('assets/css/theme/main.min.css') }}">

<!-- Custom Branding Colors -->
<style>
    :root {
        /* Bootstrap style variables */
        --bs-primary: #6D23CB;
        --bs-primary-rgb: 109, 35, 203;
        --bs-secondary: #7635caff;
        --bs-secondary-rgb: 192, 132, 252;
        
        /* Uni-core / Main theme variables */
        --color-primary: #6D23CB;
        --color-primary-rgb: 109, 35, 203;
        --color-primary-600: #5a1da8; /* Hover state */
        --color-primary-100: #F3E8FF; /* Light background */
        --color-white: #ffffff;
        --color-black: #000000;
        
        --color-secondary: #7635caff;
        --color-secondary-rgb: 192, 132, 252;
        --color-secondary-600: #A855F7;
        
        --uc-primary: #6D23CB;
        --uc-secondary: #7635caff;
    }

    /* Helper utility overrides to ensure consistency */
    .btn-primary {
        --bs-btn-bg: var(--color-primary);
        --bs-btn-border-color: var(--color-primary);
        --bs-btn-hover-bg: var(--color-primary-600);
        --bs-btn-hover-border-color: var(--color-primary-600);
        --bs-btn-active-bg: var(--color-primary-600);
    }
    
    .text-primary {
        color: var(--color-primary) !important;
    }
    
    .bg-primary {
        background-color: var(--color-primary) !important;
    }

    .bg-primary-100 {
        background-color: var(--color-primary-100) !important;
    }

    .bg-white {
        background-color: var(--color-white) !important;
    }

    .text-black {
        color: var(--color-black) !important;
    }
    
    .text-secondary {
        color: var(--color-secondary) !important;
    }
    
    .bg-secondary {
        background-color: var(--color-secondary) !important;
    }

    /* Dark mode tweaks */
    .dark :root {
        --body-color-background: #01000a;
    }
</style>

<!-- include scripts -->
<script src="{{ asset('assets/js/uni-core/js/uni-core-bundle.min.js') }}"></script>

<!-- custom script to handle dark mode -->
<script>
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        document.querySelector('meta[name="theme-color"]')?.setAttribute('content', '#01000a');
    } else {
        document.documentElement.classList.remove('dark');
        document.querySelector('meta[name="theme-color"]')?.setAttribute('content', '#6D23CB');
    }
</script>
