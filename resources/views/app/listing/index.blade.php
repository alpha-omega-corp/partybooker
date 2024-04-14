@extends('main')

@section('title')
    <title>{{ strtoupper(__('service.listings')) }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <x-card.panel :title="__('app.listing')" class="app-listing">
        <div class="row">
            <!-- Filters -->
            <div class="col-xl-4 col-lg-12 app-filter-container">
                <div>
                    @include('app.listing.partials.breadcrumbs')

                    <div class="app-filter-desktop">
                        <x-app.title
                            :size="TitleSize::SMALL"
                            :color="AppColor::PINK"
                            :value="__('listing.categories')"
                            class="listing-category-title"
                        />

                        @include('app.listing.partials.category')
                    </div>

                    <div class="app-filter-mobile">

                        <x-accordion name="listing-mobile">
                            <x-accordion.item
                                accordion="listing-mobile"
                                name="listing-mobile-item"
                            >
                                <x-slot:title>
                                    <x-app.title
                                        :size="TitleSize::SMALL"
                                        :color="AppColor::PINK"
                                        :value="__('listing.categories')"
                                        class="listing-category-title"
                                    />
                                </x-slot:title>

                                <x-slot:content>
                                    @include('app.listing.partials.category')
                                </x-slot:content>
                            </x-accordion.item>
                        </x-accordion>
                    </div>
                </div>
            </div>

            <!-- Listing -->
            <div class="col-xl-8 col-lg-12 p-0">
                <div class="app-listing-container">
                    <div class="listing-container-content">
                        @include('app.listing.partials.listing')
                    </div>
                </div>
            </div>
        </div>

    </x-card.panel>
@endsection
