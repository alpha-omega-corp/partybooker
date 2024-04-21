<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @yield('page')>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Partybooker</title>
    @yield('title')
    @stack('head')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

    @if(config('app.env') === EnvironmentType::PROD->value)
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-09C5215HQL"></script>
        <!-- Google Analytics -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
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
    @endif

    @filamentStyles
    @vite(['resources/js/app.js'])

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>
@include('app.partials.navigation')


<div class="app-content">
    <div class="container position-relative">
        @if ($message = Session::get('success'))
            <x-notification.popup :type="NotificationType::SUCCESS" :message="$message"/>
        @endif

        @if ($message = Session::get('error'))
            <x-notification.popup :type="NotificationType::ERROR" :message="$message"/>
        @endif
    </div>

    {{$slot}}
</div>

@include('app.partials.footer')

</body>
</html>
