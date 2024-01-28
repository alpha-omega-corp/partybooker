@extends('main')

@section('page')
    page="listing"
@endsection

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

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
                    @if (!isset($current))
                        <li class="breadcrumb-item">
                            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}">
                                @svg('heroicon-o-home')
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-uppercase" aria-current="page">
                            <a href="#">{{ __('service.listings') }}</a>
                        </li>
                    @endif
                </ol>
            </nav>

            <hr>

            @include('web.listings.partial.listing-content')
        </div>

    </div>
@endsection
