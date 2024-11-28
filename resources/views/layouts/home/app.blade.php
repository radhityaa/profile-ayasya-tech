<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default"
    data-assets-path="/assets/" data-template="front-pages" data-style="light">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>@yield('title')</title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
            rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />

        <!-- Core CSS -->

        <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}"
            class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.c') }}ss"
            class="template-customizer-theme-css" />

        <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page.css') }}" />
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />

        <!-- Page CSS -->
        @stack('page-css')

        <!-- Helpers -->
        <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('assets/js/front-config.js') }}"></script>
    </head>

    <body>
        <script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/mega-dropdown.js') }}"></script>

        <!-- Navbar: Start -->
        @include('layouts.home.navbar')
        <!-- Navbar: End -->

        <!-- Sections:Start -->

        <div data-bs-spy="scroll" class="scrollspy-example">
            @yield('content')
        </div>

        <!-- / Sections:End -->

        <!-- Footer: Start -->
        @include('layouts.home.footer')
        <!-- Footer: End -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/js/front-main.js') }}"></script>

        <!-- Page JS -->
        @stack('page-js')
    </body>

</html>
