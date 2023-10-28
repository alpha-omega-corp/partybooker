<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" @yield('page')>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    @stack('header')

    <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.mask.js') }}"></script>
    
    @vite(['resources/js/app.js'])

</head>
<body class="body">
@include('common.header-nav')

<div class="main-content">
    @php use App\Http\Middleware\LocaleMiddleware; @endphp

    <section class="general-section partner-cp" data-type="{{Auth::user()->type}}">


        <x-app-notifications/>
        <x-dashboard.title/>


        <div class="container">
            <div class="d-flex">
                <x-dashboard.navigation/>

                <div class="dashboard-container w-100">
                    @if(!Auth::user()->subscribed('PartyBooker'))
                        <div>
                            <h2>
                                Choose a plan to start
                            </h2>
                        </div>
                    @endif

                    @yield('content')
                    @include('common.footer')
                </div>
            </div>
        </div>
    </section>
</div>
</body>

</html>
