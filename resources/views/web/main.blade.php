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
    <script src="{{ asset('/js/popper.js') }}"></script>
    <script src="{{ asset('/js/bootstrap4.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.mask.js') }}"></script>

</head>
<body class="body">
@include('common.header-nav')

<div class="main-content">
    @php use App\Http\Middleware\LocaleMiddleware; @endphp

    <section class="general-section partner-cp" data-type="{{Auth::user()->type}}">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <ul class="partner-nav">
                        <ul class="partner-nav">
                            @if(Auth::user()->type == 'admin')
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}">{{__('partner.home_page')}}</a>
                                </li>
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/profile">{{__('partner.profile')}}</a>
                                </li>
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale().'/cp/partner-cp/'.$user->id_partner)}}/plans">{{__('partner.my_plan')}}</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}">{{__('partner.home_page')}}</a>
                                </li>
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/profile">{{__('partner.profile')}}</a>
                                </li>
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/plans">{{__('partner.my_plan')}}</a>
                                </li>
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/faq">{{__('partner.faq')}}</a>
                                </li>
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/terms">{{__('partner.provider_terms')}}</a>
                                </li>
                                <li>
                                    <a href="{{url(LocaleMiddleware::getLocale().'/partner-cp/'.$user->id_partner)}}/contacts">{{__('partner.contacts')}}</a>
                                </li>
                            @endif
                        </ul>
                    </ul>
                </div>
                <div class="col-md-8 col-xl-9">
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

                    @yield('content')
                </div>
            </div>
        </div>
    </section>


    @include('common.footer')
</div>
</body>

</html>
