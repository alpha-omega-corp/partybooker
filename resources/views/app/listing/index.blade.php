@extends('main')

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <div class="app-listing">
        <x-card.dashboard :title="__('app.listing')">
            <x-slot:header>
                {{Breadcrumbs::render('listing', Request::segments())}}

                <div class="app-listing-search">
                    @include('app.listing.partials.search')
                    <x-modal.open
                        :name="ModalName::APP_LISTING_SEARCH"
                        :type="ModalType::READ"
                    />
                </div>
            </x-slot:header>

            @include('app.listing.partials.listing')
        </x-card.dashboard>
    </div>
@endsection
