<div class="admin-listing-filters">
    <!-- Create Partner -->
    @include('app.admin.partner.partials.create')

    @include('app.admin.partner.partials.tops')
    <x-accordion.index name="adminListingFilters">

        <x-accordion.item
            name="plan"
            accordion="adminListingFilters"
        >
            <x-slot:title>
                Plans
            </x-slot:title>

            <x-slot:content>
                <x-admin.filter-group
                    name="plan"
                    :model="PartnerFilter::PLAN"
                    :filters="$planFilters"/>
            </x-slot:content>
        </x-accordion.item>

        <x-accordion.item
            name="category"
            accordion="adminListingFilters"
        >
            <x-slot:title>
                Category
            </x-slot:title>

            <x-slot:content>
                <x-admin.filter-group
                    name="category"
                    :model="PartnerFilter::CATEGORY"
                    :filters="$categoryFilters"/>
            </x-slot:content>
        </x-accordion.item>

        <x-accordion.item
            name="sort"
            accordion="adminListingFilters"
        >
            <x-slot:title>
                Sort
            </x-slot:title>

            <x-slot:content>
                <x-admin.sort
                    name="sorts"
                    :sorts="$partnerSorts"/>
            </x-slot:content>
        </x-accordion.item>
    </x-accordion.index>

    <div class="p-4 bg-white">
        <x-forms.input
            name="input"
            model="input"
            label="Search"
            type="text">
            @svg('heroicon-o-magnifying-glass')
        </x-forms.input>
    </div>
</div>
