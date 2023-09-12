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
                        <li class="breadcrumb-item text-uppercase">
                            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}">
                                <i class="bi bi-house"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item text-uppercase" aria-current="page">
                            <a
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}">{{ __('service.listings') }}</a>
                        </li>
                        <li class="breadcrumb-item
                                text-uppercase" aria-current="page">
                            <a
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $current->parent->lang->slug) }}">
                                {{ $current->parent->lang->name }}
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
@endsection
