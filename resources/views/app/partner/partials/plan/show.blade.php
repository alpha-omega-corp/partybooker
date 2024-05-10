<x-card.index :title="__('partner.plan')" :can-open="false" class="partner-dashboard-card">

    @if(Auth::user()->isAdmin())
        @include('app.partner.partials.plan.edit')
    @endif

    <x-slot:body>
        <x-plan.badge :plan="$payment->plan"/>
    </x-slot:body>
</x-card.index>






