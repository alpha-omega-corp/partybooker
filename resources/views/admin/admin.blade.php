<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @yield('page')>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    @yield('summernote-css')
    @yield('summernote-js')


    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @stack('head')
    <script>
        function openModal(modal) {
            !$('#' + modal).is(':visible') ? document.getElementById(modal + '-button').click() : ''
        }
    </script>

    @vite('resources/js/admin.js')
    @filamentStyles
</head>
<body class="body">

@include('admin.header')

@yield('content')

@include('admin.footer')
<x-app-notifications/>
@stack('footer')
</body>
</html>
