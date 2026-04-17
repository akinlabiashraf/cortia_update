<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        @include('partials.meta')
        
        <!-- app head for bootstrap core -->
        <script src="{{ asset('assets/js/app-head-bs.js') }}"></script>
        
        @include('partials.styles')
    </head>
    <body class="@yield('body_class', 'uni-body panel home-three text-gray-900 dark:bg-black dark:text-white')">

        <!-- Modals -->
        @include('partials.modals')

        <!-- Header -->
        @include('partials.header')

        @yield('content')

        <!-- Footer -->
        @include('partials.footer')

        <!-- App Scripts -->
        @include('partials.scripts')
    </body>
</html>
