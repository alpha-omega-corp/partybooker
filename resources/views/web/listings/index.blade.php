@extends('main')

@section('page')
    page="listing"
@endsection

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <section>
        @include('web.common.social')
    </section>

    <section class="listing">
        <div class="container p-relative">
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
                                <i class="bi bi-house"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-uppercase" aria-current="page">
                            <a href="#">{{ __('service.listings') }}</a>
                        </li>
                    @endif
                </ol>
            </nav>

            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ __('listing.sort_by') }}
                </button>
                @include('web.listings.partial.sort-by')
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 filters">
                    @include('web.common.category-filter')

                    <h6>{{ __('partner.budget') }}:</h6>
                    {{--					@include('web.listings.partial.price-range') --}}
                    @include('web.listings.partial.budget-filter')

                    @include('web.common.event-types-filter')
                </div>
                <div class="col-lg-9 col-md-12">
                    @include('web.listings.partial.partial-list')
                </div>
            </div>
        </div>
    </section>
@endsection
