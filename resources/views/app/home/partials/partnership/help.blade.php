<x-modal.open
    :name="ModalName::APP_HELP"
    :type="ModalType::CREATE"
    :custom-color="AppColor::PINK"
    :fit="true"
    :singleton="true"
    :icon="$checkIcon"
    :title="__('home.help_title')"
    class="app-help-button"/>

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