@extends('main')

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')

    <x-card.panel :title="__('app.listing')" class="app-listing">

        @include('app.listing.partials.search')


        <div class="row">
            <div
                class="listing-sidebar col-lg-3 col-md-0 col-sm-0 d-none d-sm-none d-md-none d-lg-block">

                <div class="listing-category-card">
                    <div class="listing-search-card">
                        <x-modal.open
                            :name="ModalName::APP_LISTING_SEARCH"
                            :icon="$searchIcon"
                            :singleton="true"
                            :background="true"
                            :tooltip="__('listing.search')"
                        />
                    </div>
                    <div class="d-flex justify-content-between">
                        @if(count(Request::segments()) > 1)
                            <div class="category-card-header">
                                {{Breadcrumbs::render('listing', Request::segments())}}
                            </div>
                        @endif


                    </div>
                    @if($active)
                        <div class="category-card-description">
                            <p>
                                {{$active->locale->description}}
                            </p>
                        </div>
                    @endif
                </div>


                @include('app.listing.partials.category')
            </div>

            <div class="col-lg-9">
                @include('app.listing.partials.listing')
            </div>
        </div>
    </x-card.panel>
@endsection
