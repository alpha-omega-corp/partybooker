<x-card.index :title="__('partner.plan')" :can-open="false">
    @include('app.partner.partials.plan.edit')

    <x-slot:body>
        <x-plan.badge :plan="$payment->plan"/>
    </x-slot:body>
</x-card.index>






