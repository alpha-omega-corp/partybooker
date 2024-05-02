<x-modal.index
    :name="ModalName::APP_HELP"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :title="__('home.help_title')"
    :tooltip="__('home.help_title')"
    :action="false"
    :hidden="true"
    :validation="true"
    :singleton="true"
    :icon="$checkIcon"
    :route="route('guest.home.help', [
    ])"
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

        <x-forms.textarea
            name="message"
            :label="__('form.message')"
        />
    </x-slot:body>
</x-modal.index>


