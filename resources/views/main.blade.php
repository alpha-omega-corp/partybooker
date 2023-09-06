<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @yield('page')>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (env('APP_ENV') == 'production')
        <!-- Google Analytics -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-54557878-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- End Google Analytics -->
    @endif
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    @stack('header')
    <script src="{{ asset('dist/app.js') }}" defer></script>
    <link href="{{ asset('dist/app.css') }}" rel="stylesheet">
</head>

<body class="body">
    @include('common.header-nav')

    <div style="margin-left: 4.75rem">

        @yield('content')

        @include('common.footer')
        @include('common.cookies')
    </div>

</body>

@stack('footer')

</html>
