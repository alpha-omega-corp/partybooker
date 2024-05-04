@extends('main')

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')

    <x-card.panel :title="__('app.listing')">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('listing', Request::segments())}}
        </x-slot:breadcrumbs>

        <x-app.section class="app-listing-container" :bg="AppColor::HOME_GRAY">
            <div class="app-listing-filters">
                <!-- Search -->
                @include('app.listing.partials.search')

                <!-- Category -->
                @include('app.listing.partials.category')
            </div>

            @include('app.listing.partials.listing')

        </x-app.section>
    </x-card.panel>

    <div class="home-top mt-4">
        @include('app.home.partials.home.top', [
            'showTitle' => false,
        ])
    </div>

@endsection
