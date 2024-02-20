@extends('main')

@section('title')
    <title>Partners | {{ __('partybooker-cp.www')}}</title>
@endsection


@section('content')
    <div class="container">
        <div class="admin-listing">
            <!-- Top Services -->
            <x-dashboard.accordion title="Top Services" name="partner-tops">
                @include('app.admin.partials.tops')
            </x-dashboard.accordion>

            <hr>

            <div x-data="partnerSearch">
                <x-forms.input
                    name="input"
                    model="input"
                    label="Search"
                    type="text">
                    @svg('heroicon-o-magnifying-glass')
                </x-forms.input>
                <hr>

                <div class="d-flex">
                    <div class="admin-listing-filters">

                        <!-- Create Partner -->
                        <x-modal
                            id="createPost"
                            name="Partner"
                            :type="ModalType::CREATE"
                            :size="ModalSize::MD"
                            :route="route('partner.store')"
                        >
                            <x-forms.list>
                                <x-forms.input
                                    name="company"
                                    label="Company"
                                    type="text">
                                    @svg('heroicon-o-home-modern')
                                </x-forms.input>

                                <hr>
                                <div class="d-flex justify-content-around">
                                    <x-forms.radio
                                        :colorize="true"
                                        :items="$plans"
                                        id="updatePlan"
                                        name="plan"/>
                                </div>
                                <hr>

                                <x-forms.input
                                    name="name"
                                    label="User"
                                    type="text">
                                    @svg('heroicon-o-user-circle')
                                </x-forms.input>

                                <x-forms.input
                                    name="email"
                                    label="Email"
                                    type="email">
                                    @svg('heroicon-o-envelope')
                                </x-forms.input>

                                <x-forms.input
                                    name="password"
                                    label="Password"
                                    type="password">
                                    @svg('heroicon-o-lock-closed')
                                </x-forms.input>

                                <hr>
                                <x-forms.checkbox
                                    name="language"
                                    title="Languages"
                                    :items="Language::values()"/>
                            </x-forms.list>
                        </x-modal>

                        <x-dashboard.accordion title="Plan" name="plan" :open="true">
                            <x-admin.filter-group
                                name="plan"
                                :model="PartnerFilter::PLAN"
                                :filters="$planFilters"/>
                        </x-dashboard.accordion>

                        <x-dashboard.accordion title="Category" name="category">
                            <x-admin.filter-group
                                name="category"
                                :model="PartnerFilter::CATEGORY"
                                :filters="$categoryFilters"/>
                        </x-dashboard.accordion>

                        <hr>
                        <x-dashboard.accordion title="Sort" name="filter">
                            <x-admin.sort
                                name="sorts"
                                :sorts="$partnerSorts"/>
                        </x-dashboard.accordion>
                    </div>

                    <div class="admin-listing-content">
                        <template x-for="partner in filteredPartners()">
                            <div class="admin-listing-item shadow-lg" x-bind:class="'border-' + partner.plan">
                                <h5 x-text="partner.company" class="fw-bold"></h5>

                                <p x-text="partner.id"></p>
                                <div class="d-flex gap-4">
                                    <small>Created <span x-text="partner.created"></span></small>
                                </div>

                                <hr>

                                <div class="admin-listing-action">
                                    <a :href="partner.url" class="btn btn-orange">
                                        Profile
                                    </a>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <x-admin.listing-info title="User" icon="heroicon-o-user-circle">
                                        <p x-text="partner.name"></p>
                                        <p x-text="partner.email"></p>
                                    </x-admin.listing-info>

                                    <x-admin.listing-info title="Billing" icon="heroicon-o-currency-dollar">
                                        <p x-text="partner.paymentType"></p>
                                        <p x-text="partner.paymentStart"></p>
                                        <p x-text="partner.paymentEnd"></p>
                                    </x-admin.listing-info>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <x-admin.listing-info title="Company" icon="heroicon-o-home-modern">
                                        <p x-text="partner.company"></p>
                                        <p x-text="partner.address"></p>
                                    </x-admin.listing-info>

                                    <x-admin.listing-info title="Adverts" icon="heroicon-o-archive-box">
                                        <ul>
                                            <template x-for="category in partner.categories">
                                                <li>
                                                    <p x-text="category"></p>
                                                </li>
                                            </template>
                                        </ul>
                                    </x-admin.listing-info>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

