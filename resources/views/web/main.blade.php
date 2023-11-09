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

    <script>
        function openModalPrevent(modal) {
            !$('#' + modal).is(':visible') ? document.getElementById(modal + '-button').click() : ''
        }

        function targetMany(targets) {
            JSON.parse(targets).forEach(target => {
                document.getElementById(target) !== null ? document.getElementById(target).click() : ''
            })
        }
    </script>

    <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.mask.js') }}"></script>

    @vite(['resources/js/app.js'])
    @filamentStyles
</head>
<body class="body">
@include('common.header-nav')

<div class="main-content">
    @php use App\Http\Middleware\LocaleMiddleware; @endphp

    <section class="general-section partner-cp" data-type="{{Auth::user()->type}}">

        <x-app-notifications/>

        <div class="container">
            <div class="dashboard-container w-100 shadow-lg">


                @if(!Auth::user()->subscribed('PartyBooker'))
                    @if(!$user->onTrial())
                        <x-dashboard.card-info>
                            Choose a plan to start using the service
                        </x-dashboard.card-info>

                        <form method="POST"
                              action="{{route('trial', [
                                'id_partner' => Auth::user()->id_partner,
                              ])
                        }}">
                            @csrf
                            <button type="submit" class="btn btn-accent w-100 text-uppercase">
                                {{ __('partner.start-trial') }}
                            </button>

                        </form>
                        <hr>
                    @endif
                @endif


                @yield('content')
                @include('common.footer')
            </div>
        </div>

    </section>
</div>
</body>

</html>
