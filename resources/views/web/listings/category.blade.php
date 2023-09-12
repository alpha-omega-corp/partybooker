@extends('main')

@section('page')
    page="listing"
@endsection

@section('title')
    <title>{{ MetaTag::get('title') }}</title>
    {!! MetaTag::tag('description') !!}
    {!! MetaTag::tag('keywords') !!}
@endsection


@section('content')
    <section>
        @include('web.common.social')
    </section>

    <section class="listing">
        <div class="p-relative">
            <div class="container">
                <h1 class="display-1 fw-bold text-uppercase">
                    @if (isset($current))
                        {{ __('categories.' . $current->code) }}
                    @else
                        {{ __('service.listings') }}
                    @endif
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}">
                                <i class="bi bi-house"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item text-uppercase" aria-current="page">
                            <a
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}">
                                {{ __('service.listings') }}
                            </a>
                        </li>
                        <li class="breadcrumb-item text-uppercase active" aria-current="page">
                            <a href="#">{{ $current->lang->name }}</a>
                        </li>
                    </ol>
                </nav>
            </div>

            <section class="listing-page">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-3 filters">
                        @include('web.common.category-filter')
                    </div>
                    <div class="col-lg-7 col-md-9">
                        @include('web.listings.partial.partial-list')
                    </div>
                    <div class="col-lg-3 col-md-0">
                        <section class="event-types-filter">
                            @include('web.listings.partial.budget-filter')
                            @include('web.common.event-types-filter')
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="list-section">
        <div class="container p-relative">
            @php
                if (!isset($current)) {
                    $url = url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings'));
                } else {
                    if ($current->parent) {
                        $url = url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $current->parent->lang->slug);
                    } else {
                        $url = url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings'));
                    }
                }
            @endphp

            <a href="{{ $url }}" class="back">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 11" width="16" height="11">
                    <defs>
                        <image width="16" height="11" id="img1"
                            href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAAXNSR0IB2cksfwAAAEhQTFRFAAAA/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkB/YkBpnK28gAAABh0Uk5TAB/jRij37hIz6xQ1+ugMQ/vpKgr/5+pFy0o7KAAAAERJREFUeJxjYAACRiZmBmTAwsrGjsznYOXkQuZz8/DyIfP5BQSFGBFAmEFQBAWIAlXwoqrAMANkixgXqgi6O0AuFYezARJlAvgnuCj6AAAAAElFTkSuQmCC" />
                    </defs>
                    <style>
                        tspan {
                            white-space: pre
                        }
                    </style>
                    <use id="right-arrow copy" href="#img1" x="0" y="0" />
                </svg>
                {{ __('service.back') }}</a>

            <br>
            <br>
            <nav aria-label="">
                <ol class="breadcrumb" style="color: #fe8a02; background: transparent">
                    @if (!isset($current))
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="#">{{ __('service.listings') }}</a>
                        </li>
                    @else
                        @if ($current->parent)
                            <li class="breadcrumb-item" aria-current="page">
                                <a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}">{{ __('service.listings') }}</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $current->parent->slug) }}">{{ $current->parent->lang->name }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">{{ $current->lang->name }}</a>
                            </li>
                        @else
                            <li class="breadcrumb-item" aria-current="page">
                                <a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}">{{ __('service.listings') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">{{ $current->lang->name }}</a>
                            </li>
                        @endif
                    @endif
                </ol>
            </nav>

            <h1>
                @if (isset($current))
                    {{ $current->lang->name }}
                @else
                    {{ __('service.listings') }}
                @endif
            </h1>
            <p class="content-description">{{ $description }}</p>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 filters">

                    @if ($banners)
                        <div class="advertsssss">
                            @foreach ($banners as $banner)
                                @if (!$banner->image)
                                    @continue;
                                @endif
                                <a href="{{ $banner->website_url ?? '#' }}" class="gide-href" target="_blank">
                                    <img src="{{ asset('storage/banners/' . $banner->image) }}"
                                        alt="{{ $banner->website_url }}">
                                </a>
                            @endforeach
                        </div>

                        @push('header')
                            <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/slick/slick.css') }}" />
                            <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/slick/slick-theme.css') }}" />
                        @endpush
                        @push('footer')
                            <script type="text/javascript" src="{{ asset('/plugins/slick/slick.min.js') }}"></script>
                            <script type="text/javascript" src="{{ asset('plugins/jquery-migrate-1.2.1.min.js') }} "></script>
                            <script>
                                $(document).ready(function() {
                                    $('.advertsssss').slick({
                                        dots: true,
                                        infinite: false,
                                        speed: 300,
                                        slidesToShow: 1,
                                        autoplay: true,
                                        autoplaySpeed: 2000,
                                    });
                                });
                            </script>
                        @endpush
                    @endif

                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ __('listing.sort_by') }}
                        </button>
                        @include('web.listings.partial.sort-by')
                    </div>

                    @include('web.common.category-filter', ['listType' => 'category'])

                    <h6>{{ __('partner.budget') }}:</h6>
                    @include('web.listings.partial.budget-filter')

                    @include('web.common.event-types-filter')
                </div>
                <div class="col-lg-9 col-md-12">
                    @include('web.listings.partial.partial-list')
                </div>
            </div>
        </div>
    </section>

    <section class="location">
        <div id="map" class="abs"></div>
        <div class="container">
            <ul>
                @foreach ($categories as $item)
                    <li>
                        <a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $item->lang->slug) }}">{{ $item->lang->name }}</a>
                    </li>
                @endforeach
                <li><a href="#">{{ __('categories.agency') }}</a></li>
                <li>
                    <a
                        href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}">{{ __('main.all') }}</a>
                </li>
            </ul>
        </div>

    </section>
@endsection

@include('web.listings.partial.map')
