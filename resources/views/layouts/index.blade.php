<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="description" content="Official website of Aman Plastic Industries. &copy; {{ date('Y') }} Copyright Reserved. Developed By A. H. M. Azimul Haque.">
    <meta name="keywords" content="Aman Plastic Industries">
    <meta charset="utf-8">
    <meta name="author" content="A. H. M. Azimul Haque">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="google-site-verification" content="M_ahWtl3h3gjjzpkH2T6nGc6JzWkbQlkOGy5J3oVEJY" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/favicons//android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicons//manifest.json') }}">
    <meta name="msapplication-TileColor" content="#022265">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#022265">
    
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/unishop/css/vendor.min.css') }}">
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{ asset('vendor/unishop/css/styles.min.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/unishop/customizer/customizer.min.css') }}">
    @yield('css')
    <script src="{{ asset('vendor/unishop/js/modernizr.min.js') }}"></script>
</head>

<body>
    @include('partials._nav')

    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
        <!-- Page Content-->
        @yield('content')
        @include('partials._footer')
    </div>

    <!-- Backdrop-->
    <div class="site-backdrop"></div>

    <!-- javascript libraries / javascript files set #1 -->
    <script type="text/javascript" src="{{ asset('vendor/unishop/js/vendor.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/unishop/js/scripts.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/unishop/customizer/customizer.min.js') }}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>

    @include('partials._messages')
    @yield('js')
</body>
</html>