@php use App\Models\AppPlan; @endphp

<x-modal.index
    :name="ModalName::PARTNER_PLAN"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :absolute="true"
    :background="false"
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
