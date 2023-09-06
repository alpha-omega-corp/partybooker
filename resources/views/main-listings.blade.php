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
    <title>{{ MetaTag::get('title') }} | {{ __('partybooker-cp.www') }}</title>
    {!! MetaTag::tag('description') !!}
    {!! MetaTag::tag('keywords') !!}
    @stack('header')
    <!-- Styles -->
    <link href="{{ asset('dist/app.css') }}" rel="stylesheet">
</head>

<body class="body">
    @include('common.header')
    @yield('content')
    @include('common.footer')
    @include('common.cookies')
</body>
<!-- Scripts -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap4.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/jquery.mask.js') }}"></script>
{{--		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDpzw9SH97G5L9Af-dR5TeixK8OEPqocY&callback=initMap" type="text/javascript"></script> --}}
@stack('footer')

</html>
