@extends('main')

@section('page')
    page="listing"
@endsection

@section('title')
    <title>{{ MetaTag::get('title') }}</title>
    {!! MetaTag::tag('description') !!}
    {!! MetaTag::tag('keywords') !!}
@endsection

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

@section('content')
    <div class="p-relative listing">
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
                            @svg('heroicon-o-home')
                        </a>
                    </li>
                    <li class="breadcrumb-item text-uppercase" aria-current="page">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}">
                            {{ __('service.listings') }}
                        </a>
                    </li>
                    <li class="breadcrumb-item text-uppercase active" aria-current="page">
                        <a href="#">{{ $current->lang->name }}</a>
                    </li>
                </ol>
            </nav>
            <hr>

            @include('web.listings.partial.listing-content')
        </div>
    </div>
@endsection
