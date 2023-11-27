@php use App\Models\Category; @endphp
@props([
    'partners',
    'plan'
])

<div>

    @php
        $partnerValues = $partners->map(function ($partner) {
            return (object)[
                'id' => $partner->id_partner,
                'name' => $partner->user->name,
                'email' => $partner->user->email,
                'payment_status' => $partner->payment_status,
                'payment_start' => $partner->payed,
                'payment_end' => $partner->expiration_date,
                'company' => $partner->fr_company_name,
                'location' => $partner->address,
                'categories' => $partner->categories->map(function ($category) {
                    return Category::where('parent_id', $category->category_id)->first()->form_name;
                }),
            ];
        })->toArray();
    @endphp

    <div
        x-data="searchHandler()"
        x-init="loadPartners('{{json_encode($partnerValues)}}')">
        <x-admin.listing.filters>

            <x-slot:filter>
                <x-admin.listing.filter-item
                    plan="{{$plan}}"
                    filterName="payed"
                    filterLabel="Payed"/>

                <x-admin.listing.filter-item
                    plan="{{$plan}}"
                    filterName="un-payed"
                    filterLabel="Not Payed"/>

                <hr>

                <x-admin.listing.filter-item
                    plan="{{$plan}}"
                    filterName="event-place"
                    filterLabel="Event Place"/>

                <x-admin.listing.filter-item
                    plan="{{$plan}}"
                    filterName="caterer"
                    filterLabel="Caterer"/>

                <x-admin.listing.filter-item
                    plan="{{$plan}}"
                    filterName="wine"
                    filterLabel="Wine"/>

                <x-admin.listing.filter-item
                    plan="{{$plan}}"
                    filterName="entertainment"
                    filterLabel="Entertainment"/>

                <x-admin.listing.filter-item
                    plan="{{$plan}}"
                    filterName="equipment"
                    filterLabel="Equipment"/>

                <hr>

                <x-admin.listing.filter-item
                    plan="{{$plan}}"
                    filterName="all"
                    filterLabel="None"/>

            </x-slot:filter>

            <x-slot:sort>
                <x-admin.listing.sort-item
                    plan="{{$plan}}"
                    sortName="newest"
                    sortLabel="Newest"/>
                <x-admin.listing.sort-item
                    plan="{{$plan}}"
                    sortName="oldest"
                    sortLabel="Oldest"/>
                <x-admin.listing.sort-item
                    plan="{{$plan}}"
                    sortName="name"
                    sortLabel="Name"/>
                <hr>
                <x-admin.listing.sort-item
                    plan="{{$plan}}"
                    sortName="default"
                    sortLabel="None"/>
            </x-slot:sort>

        </x-admin.listing.filters>
        <ul>
            <template x-for="partner in filteredPartners()" :key="partner.name">
                <div class="partner-box border border-{{$plan}} shadow-lg">

                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="text-uppercase fw-bold" x-text="partner.company"></h5>
                            <small x-text="partner.id"></small>
                        </div>
                        <div>
                            <a :href="partner.url" target="_blank"
                               class="btn btn-accent text-uppercase">
                                {{ __('partybooker-cp.view_profile')}}
                            </a>

                            <a href="#" id="remove-partner" :data-partner="partner.id"
                               class="btn btn-danger">
                                {{ __('partybooker-cp.remove_partner')}}
                            </a>
                        </div>
                    </div>
                    <hr x-show="partner.id">

                    <div class="partner-item-box partner-user">
                        <div class="partner-label">
                            <b>{{ __('partybooker-cp.name')}}</b>
                            <span x-text="partner.name"></span>
                        </div>

                        <div class="partner-label">
                            <b>{{ __('partybooker-cp.email')}}</b>
                            <span x-text="partner.email"></span>
                        </div>

                        <div class="partner-label">
                            <b>{{ __('become_partner.address')}}</b>
                            <span x-text="partner.location"></span>
                        </div>

                        <div class="partner-label">
                            <b>PAYMENT</b>
                            <div>
                                <div x-show="partner.payment_status">
                                    @svg('heroicon-o-check-circle', 'text-success')
                                </div>

                                <div x-show="!partner.payment_status">
                                    @svg('heroicon-o-no-symbol', 'text-danger')
                                </div>
                            </div>
                        </div>

                        <div class="partner-label">
                            <b>BILLING</b>
                            <div style="font-size: smaller">
                                <span x-text="partner.payment_start"></span>
                                <span class="mx-2">-</span>
                                <span x-text="partner.payment_end"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </ul>
    </div>
</div>
