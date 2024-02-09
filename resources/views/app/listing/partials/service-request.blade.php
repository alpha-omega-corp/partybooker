<x-modal
    id="createRequest"
    name="Request"
    :button="__('service.book')"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :route="route('guest.company.request', ['company' => $advert->company])"
>

    <x-forms.list>
        <x-forms.input
            name="name"
            :label="__('service.name')">
            @svg('heroicon-o-user-circle')
        </x-forms.input>

        <x-forms.input
            name="email"
            :label="__('service.email')">
            @svg('heroicon-o-envelope')
        </x-forms.input>

        <x-forms.input
            name="phone"
            :label="__('service.phone')">
            @svg('heroicon-m-device-phone-mobile')
        </x-forms.input>

        <x-forms.input
            name="participants"
            type="number"
            :label="__('service.participants')">
            @svg('heroicon-o-user-group')
        </x-forms.input>

        <x-forms.input
            name="date"
            type="date"
            :label="__('service.date')">
            @svg('heroicon-o-calendar-days')
        </x-forms.input>
    </x-forms.list>

</x-modal>
