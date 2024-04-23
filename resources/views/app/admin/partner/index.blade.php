@php use App\Models\Company; @endphp
@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection


@section('content')
    <x-card.panel :title="__('admin.partners')" class="admin-listing">

        <!-- Top Services -->
        <x-dashboard.accordion title="Top Services" name="partner-tops">
            @include('app.admin.partner.partials.tops')
        </x-dashboard.accordion>

        <div x-data="partners">
            <x-forms.input
                name="input"
                model="input"
                label="Search"
                type="text">
                @svg('heroicon-o-magnifying-glass')
            </x-forms.input>

            <div class="admin-listing-container">
                <div class="admin-listing-filters">
                    <!-- Create Partner -->
                    @include('app.admin.partner.partials.create')

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
                </div>

                <div class="admin-listing-content">
                    <template x-for="item in filteredPartners()">
                        <div class="admin-listing-item shadow-lg" x-bind:class="'border-' + item.plan">
                            <div class="listing-item-header">
                                <h5 x-text="item.company" class="fw-bold"></h5>

                                <p x-text="item.id"></p>
                                <div class="d-flex gap-4">
                                    <small>Created <span x-text="item.created"></span></small>
                                </div>
                            </div>

                            <div class="admin-listing-action">
                                <a :href="item.url" class="btn btn-orange text-white d-flex align-items-center gap-2">
                                    @svg('heroicon-o-arrow-up-right')
                                    <span>View</span>
                                </a>

                                <a @click="remove(item)" class="btn btn-danger d-flex align-items-center gap-2">
                                    @svg('heroicon-o-trash')
                                    <span>Delete</span>
                                </a>
                            </div>

                            <div class="p-4">
                                <div class="listing-item-content">
                                    <x-admin.listing-info title="User" icon="heroicon-o-user-circle">
                                        <p x-text="item.name"></p>
                                        <p x-text="item.email"></p>
                                    </x-admin.listing-info>

                                    <x-admin.listing-info title="Billing" icon="heroicon-o-currency-dollar">
                                        <p x-text="item.paymentType"></p>
                                        <p x-text="item.paymentStart"></p>
                                        <p x-text="item.paymentEnd"></p>
                                    </x-admin.listing-info>

                                    <x-admin.listing-info title="Company" icon="heroicon-o-home-modern">
                                        <p x-text="item.company"></p>
                                        <p x-text="item.address"></p>
                                    </x-admin.listing-info>

                                    <x-admin.listing-info title="Adverts" icon="heroicon-o-archive-box">
                                        <ul>
                                            <template x-for="category in item.categories">
                                                <li>
                                                    <p x-text="category"></p>
                                                </li>
                                            </template>
                                        </ul>
                                    </x-admin.listing-info>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

    </x-card.panel>
@endsection

