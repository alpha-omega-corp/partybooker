<x-modal.index
    :name="ModalName::APP_INFORMATION"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :hidden="true"
    :route="route('admin.information.store')"
>
    <x-tab.locale>
        <x-slot:french>
            <x-forms.input
                name="title_fr"
                label="Title"
            >
                @svg($titleIcon)
            </x-forms.input>
            <x-forms.editor name="content_fr" label="Content"/>
        </x-slot:french>

        <x-slot:english>
            <x-forms.input
                name="title_en"
                label="Title"
            >
                @svg($titleIcon)
            </x-forms.input>
            <x-forms.editor name="content_en" label="Content"/>
        </x-slot:english>
    </x-tab.locale>
</x-modal.index>
