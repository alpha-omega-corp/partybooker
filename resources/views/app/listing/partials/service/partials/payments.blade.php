<x-card :title="__('service.section.price.payment')" :can-open="false" class="w-100">
    <x-slot:body>
        <x-advert.form
            :service="$advert->service"
            :type="FormType::PAYMENT"
        />
    </x-slot:body>
</x-card>
