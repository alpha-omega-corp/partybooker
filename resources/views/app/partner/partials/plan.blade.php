@php use App\Models\Plan; @endphp
<x-card :title="__('dashboard.plan')">
    <x-plans.badge :plan="$payment->plan"/>

    <x-modal.index
        :name="ModalName::PARTNER_PLAN"
        :type="ModalType::UPDATE"
        :size="ModalSize::MD"
        :absolute="true"
        :route="route('partner.plan', ['partner' => $partner])"
    >
        <x-forms.radio
            :colorize="true"
            :value="$payment->plan->name"
            :items="$plans->map(fn(Plan $plan) => $plan->name)"
            id="updatePlan"
            name="plan"
        />
    </x-modal.index>
</x-card>



