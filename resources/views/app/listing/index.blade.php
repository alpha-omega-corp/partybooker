@extends('main')

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')

    <div class="app-ll">
        
    </div>

    <x-card.listing
        :title="__('app.listing')"
        :title-color="AppColor::BLUE"
        class="app-listing"
    >
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('listing', Request::segments())}}
        </x-slot:breadcrumbs>

        <x-slot:information>
            @include('app.listing.partials.pagination')
        </x-slot:information>

        <x-slot:left>
            <div class="app-filter-container">
                <!-- Search -->
                @include('app.listing.partials.search')

                <!-- Category -->
                @include('app.listing.partials.category')
            </div>
        </x-slot:left>

        <x-slot:right>
            @include('app.listing.partials.listing')
        </x-slot:right>
    </x-card.listing>

    <div class="home-top">
        @include('app.home.partials.home.top')
    </div>

@endsection
