<x-modal.index
    :name="ModalName::APP_COMMENT"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :absolute="true"
    :route="route('admin.comment.store')"
>
    <x-slot:body>
        <x-forms.input
            name="name"
            label="Name"
        >
            @svg('heroicon-o-user-circle')
        </x-forms.input>
    </x-slot:body>
    
    <x-tab.locale>
        <x-slot:french>
            <x-forms.editor name="content_fr" label="Content"/>
        </x-slot:french>

        <x-slot:english>
            <x-forms.editor name="content_en" label="Content"/>
        </x-slot:english>
    </x-tab.locale>
</x-modal.index>
