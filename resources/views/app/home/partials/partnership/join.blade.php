@php use App\Enums\PaymentType; @endphp
<x-modal.index
    :name="ModalName::GUEST_PARTNERSHIP"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :title="__('form.join_title')"
    :action="false"
    :validation="true"
    :singleton="true"
    :hidden="true"
    :icon="$checkIcon"
    custom-color="secondary"
    :route="route('guest.home.join')"
>

    <x-slot:body>
        <x-forms.input
            name="name"
            :label="__('form.name')"
        >
            @svg($nameIcon)
        </x-forms.input>

        <x-forms.input
            name="email"
            :label="__('form.email')"
            type="email"
        >
            @svg($emailIcon)
        </x-forms.input>

        <x-forms.input
            name="password"
            type="password"
            :label="__('form.password')"
        >
            @svg($nameIcon)
        </x-forms.input>


        <x-forms.input
            name="company"
            :label="__('form.company')"
        >
            @svg($companyIcon)
        </x-forms.input>

        <x-forms.input
            name="phone"
            :label="__('form.phone')"
        >
            @svg($phoneIcon)
        </x-forms.input>
    </x-slot:body>


</x-modal.index>
