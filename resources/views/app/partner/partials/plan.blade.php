@php use App\Models\AppPlan; @endphp

<x-card.index :title="__('partner.plan')">
    <x-slot:actions>
        <x-modal.index
            :name="ModalName::PARTNER_PLAN"
            :type="ModalType::UPDATE"
            :size="ModalSize::MD"
            :absolute="true"
            :route="route('partner.plan', ['company' => $partner->company])"
        >
            <x-slot:body>
                <x-forms.radio
                    :colorize="true"
                    :value="$payment->plan->code"
                    :items="$plans->map(fn(AppPlan $plan) => $plan->code)"
                    :inline="true"
                    id="updatePlan"
                    name="plan"
                />
            </x-slot:body>
        </x-modal.index>
    </x-slot:actions>
    <x-slot:body>
        <x-plan.badge :plan="$payment->plan"/>
    </x-slot:body>
</x-card.index>





