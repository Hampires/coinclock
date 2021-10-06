<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Coinclock') }} | @yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon.png') }}" />
    <link href="{{ asset('/img/favicon.png') }}" rel="apple-touch-icon">

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">
      
    <!-- Style-->  
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">
    
</head>
<body class="theme-warning bg-dark-body">
    @yield('header')

    @yield('content')

    @yield('footer')

    <!-- Vendor JS -->
    <script src="{{ asset('js/vendors.min.js') }}"></script>   
    <!-- Corenav Master JavaScript -->
    <script src="{{ asset('vendor/corenav-master/coreNavigation-1.1.3.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="{{ asset('vendor/OwlCarousel2/dist/owl.carousel.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
    
    <!-- CryptoCurrency front end -->
    <script src="{{ asset('js/template.js') }}"></script>
</body>
</html>
