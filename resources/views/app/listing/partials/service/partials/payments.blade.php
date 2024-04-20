<x-card
    :title="__('service.section.price.payment')"
    :center="true"
    class="w-100"
>
    <x-accordion.index name="payment-accordion">
        <x-accordion.item
            accordion="payment-accordion"
            name="methods"
        >
            <x-slot:title>
                {{__('advert.payment.methods')}}
            </x-slot:title>

            <x-slot:content>
                <x-advert.form
                    :service="$advert->service"
                    :type="FormType::PAYMENT"
                />
            </x-slot:content>
        </x-accordion.item>

        <x-accordion.item
            accordion="payment-accordion"
            name="deposit"
        >
            <x-slot:title>
                {{__('advert.payment.deposit')}}
            </x-slot:title>

            <x-slot:content>
                @include('app.listing.partials.service.partials.deposit')
            </x-slot:content>
        </x-accordion.item>

        <x-accordion.item
            accordion="payment-accordion"
            name="budget"
        >
            <x-slot:title>
                {{__('advert.payment.budget')}}
            </x-slot:title>

            <x-slot:content>
                @include('app.listing.partials.service.partials.budget')
            </x-slot:content>
        </x-accordion.item>
    </x-accordion.index>
</x-card>

