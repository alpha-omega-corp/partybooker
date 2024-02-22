<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles
    @filamentStyles
    @vite('resources/js/tailwind.js')

    @livewireScripts
    @filamentScripts
</head>

<body class="antialiased">


<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8"
     style="background: url({{Vite::image('blob-scene.svg')}}) fixed; background-size: 100% 100%; background-color: teal;">
    <div>
        {{ $slot }}
    </div>
</div>


</body>
</html>
