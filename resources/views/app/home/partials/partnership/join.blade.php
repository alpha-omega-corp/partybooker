@php use App\Enums\PaymentType; @endphp
<x-modal.index
    :name="ModalName::GUEST_PARTNERSHIP"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :custom-color="AppColor::SECONDARY"
    :title="__('form.join_title')"
    :action="false"
    :validation="true"
    :singleton="true"
    :hidden="true"
    :icon="$checkIcon"
    :route="route('guest.home.join')"
>

    <x-slot:body>
        <x-forms.input
            name="email"
            :label="__('form.email')"
            type="email"
        >
            @svg($emailIcon)
        </x-forms.input>

        <x-forms.input
            name="phone"
            :label="__('form.phone')"
        >
            @svg($phoneIcon)
        </x-forms.input>


        <x-forms.select
            name="plan"
            :label="__('form.plan')"
            :options="[
                'free' => __('form.free'),
                'premium' => __('form.premium'),
            ]"
        >

        </x-forms.select>
    </x-slot:body>


</x-modal.index>
