<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @yield('page')>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
        <!-- Google Analytics -->
    @endif

    <title>{{ MetaTag::get('title') }} | {{ __('partybooker-cp.www') }}</title>
    {!! MetaTag::tag('description') !!}
    {!! MetaTag::tag('keywords') !!}
    @stack('header')

    <script src="{{ asset('dist/app.js') }}" defer></script>
    <link href="{{ asset('dist/app.css') }}" rel="stylesheet">
</head>

<body class="body">


    @include('common.header-nav')

    @if (Auth::user() == null)
        <div class="text-center py-8 color-white language">
            <a href="<?= route('setlocale', ['lang' => 'fr']) ?>" lan="fr">
                <img src="{{ asset('images/switzerland.svg') }}" alt="..." />
            </a>
            <a href="<?= route('setlocale', ['lang' => 'en']) ?>" lan="en">
                <img src="{{ asset('images/united-kingdom.svg') }}" alt="..." />
            </a>
        </div>

        <div class="auth">
            <a class="btn btn-primary" data-bs-toggle="modal" href="#loginModalToggle" role="button">
                {{ __('main.login') }}
            </a>
        </div>
    @endif
    @yield('content')






    <section>
        @include('auth.login')
        @include('auth.register')
    </section>

    <section>
        @include('common.cookies')
    </section>
</body>
@stack('footer')

</html>
