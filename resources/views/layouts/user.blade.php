<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Coinclock') }} | @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon.png') }}" />
    <link href="{{ asset('/img/favicon.png') }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-5.1.0/dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/lineicons-free-basic-3.0/icon-font/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/feather-icons/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/user/app.css') }}" />

    <!-- Start of Async Drift Code -->
    <script>
    "use strict";

    !function() {
      var t = window.driftt = window.drift = window.driftt || [];
      if (!t.init) {
        if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
        t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
        t.factory = function(e) {
          return function() {
            var n = Array.prototype.slice.call(arguments);
            return n.unshift(e), t.push(n), t;
          };
        }, t.methods.forEach(function(e) {
          t[e] = t.factory(e);
        }), t.load = function(t) {
          var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
          o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
          var i = document.getElementsByTagName("script")[0];
          i.parentNode.insertBefore(o, i);
        };
      }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('f5y2r3v9t357');
    </script>
    <!-- End of Async Drift Code -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack('style')
    @stack('head-script')
</head>
<body>
    <div class="app">
        @yield('header')

        <main class="main container">
            @yield('content')
        </main>

        @yield('footer')
        @yield('extra-content')
    </div>
    
    <script src="{{ asset('vendor/bootstrap-5.1.0/dist/js/bootstrap.bundle.min.js') }}"></script>
    @stack('body-script')
</body>
</html>