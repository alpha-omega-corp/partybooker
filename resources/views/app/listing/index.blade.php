@extends('main')

@section('content')
    <x-card.panel :title="$active ? $active->locale->title : __('app.listing')">

        <div class="app-listing-container">

            <div class="row">
                <div class="col-xl-4 col-lg-12">
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
                            <div class="">

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
                </div>

                <div class="col-xl-8 col-lg-12">
                    @include('app.listing.partials.listing')
                </div>
            </div>
        </div>
    </x-card.panel>

@endsection
