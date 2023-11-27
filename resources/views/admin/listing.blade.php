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

