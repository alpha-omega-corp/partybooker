<x-card.index :title="__('partner.plan')" :actionable="true">

    <x-slot:actions>
        @include('app.partner.partials.plan.edit')
    </x-slot:actions>

    <x-slot:body>
        <x-plan.badge :plan="$payment->plan"/>
    </x-slot:body>
</x-card.index>






