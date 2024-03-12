@extends('main')

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <div class="app-listing">
        @include('app.listing.partials.search')

        <x-card.listing :title="__('app.listing')">
            <x-slot:breadcrumbs>
                {{Breadcrumbs::render('listing', Request::segments())}}
            </x-slot:breadcrumbs>

            <x-slot:categories>
                @include('app.listing.partials.category')
            </x-slot:categories>

            <div class="listing-description">
                @if($active)
                    {{$active->locale->description}}
                @endif

                <div class="listing-search-bar">
                    <x-modal.open
                        :name="ModalName::APP_LISTING_SEARCH"
                        :icon="$searchIcon"
                        :singleton="true"
                        :absolute="true"
                        :tooltip="__('listing.search')"
                    />
                </div>
            </div>

            <div class="listing-content-pagination">
                @if($adverts->hasPages())
                    {{$adverts->links()}}
                @else
                    <div class="content-pagination-none">
                        <span class="fw-semibold text-gray">{{count($adverts).'/'.count($adverts) }}</span>
                    </div>
                @endif
            </div>

            @include('app.listing.partials.listing')
        </x-card.listing>
    </div>
@endsection
