<div class="app-listing-filters">
    <div class="sticky-listing-search listing-search-container">

        <div class="desktop-listing-filters">
            @include('app.listing.partials.search')
            @include('app.listing.partials.filters')
        </div>

        <div class="mobile-listing-filters">
            @include('app.listing.partials.search')
            <div class="w-100">
                <x-accordion name="listingFilters">
                    <x-accordion.item
                        accordion="listingFilters"
                        name="filters"
                    >
                        <x-slot:title>
                            <span class="mobile-filter-title">
                                {{ __('listing.filters') }}
                            </span>
                        </x-slot:title>

                        <x-slot:content>
                            @include('app.listing.partials.filters')

                        </x-slot:content>
                    </x-accordion.item>
                </x-accordion>
            </div>
        </div>


    </div>


</div>
