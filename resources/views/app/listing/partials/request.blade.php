<x-modal.open
    :background="true"
    :name="ModalName::PARTNER_ADVERT_REQUEST"
    :singleton="true"
    :text="__('advert.request')"
/>

<x-modal.index
    :name="ModalName::PARTNER_ADVERT_REQUEST"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :singleton="true"
    :action="false"
    :validation="true"
    :hidden="true"
    :title="__('advert.request')"
    :route="route('guest.company.request', ['company' => $advert->company])"
>

    <x-slot:body>
        <x-forms.input
            name="name"
            :label="__('form.name')">
            @svg('heroicon-o-user-circle')
        </x-forms.input>

        <x-forms.input
            name="email"
            :label="__('form.email')">
            @svg('heroicon-o-envelope')
        </x-forms.input>

        <x-forms.input
            name="phone"
            :label="__('form.phone')">
            @svg('heroicon-m-device-phone-mobile')
        </x-forms.input>

        <x-forms.input
            name="participants"
            type="number"
            :label="__('form.participants')">
            @svg('heroicon-o-user-group')
        </x-forms.input>

        <x-forms.input
            name="date"
            type="date"
            :label="__('form.date')">
            @svg('heroicon-o-calendar-days')
        </x-forms.input>

        <x-forms.textarea
            name="message"
            :label="__('form.message')"
        />
    </x-slot:body>
</x-modal.index>
