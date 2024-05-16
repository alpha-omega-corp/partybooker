<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @yield('page')>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="alternate" hreflang="en" href="https://www.partybooker.ch/en">
    <link rel="alternate" hreflang="fr" href="https://www.partybooker.ch">

    {!! Meta::toHtml() !!}
    @stack('head')

    @if(config('app.env') === EnvironmentType::PROD->value)
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-GN53R9B1EP"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'G-GN53R9B1EP');
        </script>
    @endif

    @vite(['resources/js/app.js'])
</head>

<body>
@include('app.partials.navigation')

<div class="app-content">
    @include('app.partials.notification')
    {{$slot}}
</div>
</body>

@include('app.partials.footer')
</html>
