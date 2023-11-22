<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @yield('page')>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Styles -->

    @yield('summernote-css')

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    @yield('summernote-js')
    @yield('bootstrap-js')
    <script src="{{ asset('js/jquery.mask.js') }}"></script>
    @stack('head')
    @vite('resources/js/admin.js')
</head>
<body class="body">

@include('admin.header')

@yield('content')

@include('admin.footer')

@stack('footer')
</body>
</html>
