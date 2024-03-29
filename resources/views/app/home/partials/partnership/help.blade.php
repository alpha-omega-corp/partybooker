<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_HELP"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :title="__('home.help_title')"
    :tooltip="__('home.help_title')"
    :action="false"
    :validation="true"
    :icon="$checkIcon"
    custom-color="secondary"
    :route="route('guest.home.help', [
        'plan' => $item
    ])"
>
    <x-slot:body>
        <x-forms.input
            name="phone"
            :label="__('form.phone')"
        >
            @svg($phoneIcon)
        </x-forms.input>

        <x-forms.textarea
            name="message"
            :label="__('form.message')"
        />
    </x-slot:body>
</x-modal.index>
