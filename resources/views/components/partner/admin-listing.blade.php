@php use App\Models\Category; @endphp
@props([
    'partners',
    'plan'
])


<div>
    @php
        $partnerValues = $partners->map(function ($partner) {
            $categories = array_values($partner->categories->map(function ($category) {
                    return Category::where('parent_id', $category->category_id)->first()->form_name;
                })->toArray());
            return [
                'id' => $partner->id_partner,
                'name' => str_replace("'", '', $partner->user->name),
                'email' => str_replace("'", '', $partner->user->email),
                'payment_status' => $partner->payment_status,
                'payment_start' => $partner->payed,
                'payment_end' => $partner->expiration_date,
                'company' => str_replace("'", '', $partner->fr_company_name),
                'location' => str_replace("'", '', $partner->address),
                'categories' => count($categories) === 0 ? ['none'] : $categories,
            ];
        })->toArray();

        $partnerValues = array_values($partnerValues);

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
                            <b>{{ __('partner.categories')}}</b>
                            <template x-for="category in partner.categories">

                                <div x-show="category === 'none'">
                                    @svg('heroicon-o-no-symbol', 'text-danger')
                                </div>

                                <div x-show="category !== 'none'">
                                    <span x-text="category"></span>
                                </div>
                            </template>

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

    <script>
        function searchHandler() {
            return {
                partners: [],
                shownPartners: [],
                filter: 'all',
                sort: 'newest',
                search: '',
                loadPartners(partners) {
                    if (!partners) {
                        return;
                    }

                    JSON.parse(partners).forEach((field) => {
                        this.partners.push({
                            id: field.id,
                            name: field.name,
                            email: field.email,
                            payment_status: field.payment_status,
                            payment_start: field.payment_start,
                            payment_end: field.payment_end,
                            company: field.company,
                            location: field.location,
                            url: '/cp/partner-cp/' + field.id + '/advert',
                            categories: field.categories,
                        });
                    });
                },
                filterPartner(partners) {
                    return partners.filter(
                        partner => partner.company.toLowerCase().includes(this.search.toLowerCase())
                    );
                },
                filteredPartners() {
                    switch (this.filter) {
                        case 'all':
                            this.shownPartners = this.filterPartner(this.partners)
                            break;
                        case 'payed':
                            this.shownPartners = this.filterPartner(this.filterPayed())
                            break;
                        case 'un-payed':
                            this.shownPartners = this.filterPartner(this.filterUnPayed())
                            break;
                        case 'event-place':
                            this.shownPartners = this.filterPartner(this.filterCategory('event-place'))
                            break;
                        case 'caterer':
                            this.shownPartners = this.filterPartner(this.filterCategory('caterer'))
                            break;
                        case 'wine':
                            this.shownPartners = this.filterPartner(this.filterCategory('wine'))
                            break;
                        case 'entertainment':
                            this.shownPartners = this.filterPartner(this.filterCategory('entertainment'))
                            break;
                        case 'equipment':
                            this.shownPartners = this.filterPartner(this.filterCategory('equipment'))
                            break;
                    }

                    switch (this.sort) {
                        case 'name':
                            this.shownPartners.sort()
                            break;

                        case 'newest':
                            this.shownPartners.sort((partner) => {
                                return partner.id
                            })
                            break;

                        case 'oldest':
                            this.shownPartners.sort((partner) => {
                                return partner.id
                            }).reverse()
                            break;
                    }

                    return this.shownPartners;
                },
                filterPayed() {
                    return this.partners.filter((partner) => {
                        return partner.payment_status === 1;
                    });
                },
                filterUnPayed() {
                    return this.partners.filter((partner) => {
                        return partner.payment_status === 0;
                    });
                },
                filterCategory(category) {
                    return this.partners.filter((partner) => {
                        return partner.categories.includes(category);
                    });
                }
            }
        }
    </script>
</div>

