@extends('main')

@section('content')
    <x-card.panel :title="__('app.listing')">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('listing', Request::segments())}}
        </x-slot:breadcrumbs>

        <div class="app-listing-container">
            <div class="app-listing-filters">
                <!-- Category -->
                <div class="app-listing-filters-lg">
                    <div class="sticky-listing-filters">
                        <x-app.title
                            :size="TitleSize::SMALL"
                            :color="AppColor::BLUE"
                            :value="__('listing.categories')"
                            :border="false"
                            :background="true"
                        />
                        @include('app.listing.partials.category')
                    </div>
                </div>

                <div class="app-listing-filters-sm">
                    <div class="sticky-listing-filters">

                        <x-accordion.index
                            name="listingFilterSM"
                        >
                            <x-accordion.item
                                name="content"
                                accordion="listingFilterSM"
                            >
                                <x-slot:title>
                                    <x-app.title
                                        :size="TitleSize::SMALL"
                                        :color="AppColor::BLUE"
                                        :value="__('listing.categories')"
                                        :border="false"
                                        :background="true"
                                        :padding="false"
                                    />
                                </x-slot:title>

                                <x-slot:content>
                                    @include('app.listing.partials.category')

                                </x-slot:content>
                            </x-accordion.item>
                        </x-accordion.index>
                    </div>
                </div>
            </div>

            @include('app.listing.partials.listing')
        </div>
    </x-card.panel>

@endsection
