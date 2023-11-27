@extends('admin.admin')

@section('page')
    page="listing"
@endsection

@section('title')
    <title>{{ __('partybooker-cp.listing')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="listing-title">
            <x-partner-category-tab
                :tabs="$planTabs">


                <x-tab.item>
                    <x-partner.admin-listing
                        plan="basic"
                        :partners="$basicPartners"/>
                </x-tab.item>

                <x-tab.item>
                    <x-partner.admin-listing
                        plan="commission"
                        :partners="$commissionPartners"/>
                </x-tab.item>

                <x-tab.item>
                    <x-partner.admin-listing
                        plan="standart"
                        :partners="$standardPartners"/>
                </x-tab.item>

                <x-tab.item>
                    <x-partner.admin-listing
                        plan="premium"
                        :partners="$premiumPartners"/>
                </x-tab.item>

                <x-tab.item>
                    <x-partner.admin-listing
                        plan="premium"
                        :partners="$premiumPartners"/>
                </x-tab.item>

            </x-partner-category-tab>
        </div>
    </div>


    <script type="module">
        $(document).on('click', 'a#remove-partner', function (e) {
            var $this = $(this);
            if (confirm('Do yo want to delete this partner?')) {
                $.ajax({
                    url: '/cp/partner-remove',
                    method: 'post',
                    data: {
                        id_partner: $(this).data('partner')
                    },
                    success: function () {
                        $this.closest('div.partner-box').remove();
                    },
                    error: function (r) {
                        var data = JSON.parse(r.responseText);
                        alert(data.message);
                    }
                })
            }
            return false;
        });
    </script>
@endsection

@push('footer')
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
@endpush
