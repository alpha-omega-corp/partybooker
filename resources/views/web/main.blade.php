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

    @vite(['resources/js/app.js', 'resources/sass/admin/admin.scss'])
    <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.mask.js') }}"></script>

</head>
<body class="body">
@include('common.header-nav')

<div class="main-content">
    @php use App\Http\Middleware\LocaleMiddleware; @endphp

    <section class="general-section partner-cp" data-type="{{Auth::user()->type}}">

        @if (Auth::user()->type == 'admin')
            @if (app()->getLocale() == 'en')
                <h1 class="text-uppercase text-center fw-bold display-4 mb-5">{{$user->partnerInfo->en_company_name}}</h1>
            @else
                <h1 class="text-uppercase text-center fw-bold display-4 mb-5">{{$user->partnerInfo->fr_company_name}}</h1>
            @endif

        @else
            <h1 class="text-uppercase text-center fw-bold display-4 mb-5">Dashboard</h1>
        @endif


        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

                @php


                    function isActive($segment): string {
                        $active = collect(request()->segments())->last();
                        return $active === $segment ? 'nav-active' : '';
                    }

                @endphp

            <div class="d-flex justify-content-center">

                @if(Auth::user()->type == 'admin')
                    <li class="{{isActive('statistics')}}">
                        <a class="link-underline link-underline-primary"
                           href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/statistics">{{__('partner.home_page')}}</a>
                    </li>
                    <li class="{{isActive('profile')}}">
                        <a class="link-underline link-underline-primary"
                           href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/profile">{{__('partner.profile')}}</a>
                    </li>
                    <li class="{{isActive('plans')}}">
                        <a class="link-underline link-underline-primary"
                           href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/plans">{{__('partner.my_plan')}}</a>
                    </li>
                @else

                    <li class="{{isActive('statistics')}}">
                        <a  href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/statistics">{{__('partner.home_page')}}</a>
                    </li>
                    <li class="{{isActive('profile')}}">
                        <a href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/profile">{{__('partner.profile')}}</a>
                    </li>
                    <li class="{{isActive('plans')}}">
                        <a href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/plans">{{__('partner.my_plan')}}</a>
                    </li>

                    <li class="{{isActive('contacts')}}">
                        <a href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/contacts">{{__('partner.contacts')}}</a>
                    </li>
                @endif
            </div>

            <div class="dashboard-container">
                @yield('content')
            </div>
        </div>
    </section>


    @include('common.footer')
</div>
</body>

</html>
