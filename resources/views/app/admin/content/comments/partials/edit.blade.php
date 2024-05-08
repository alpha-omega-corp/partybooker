<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_COMMENT"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.comment.update', [
        'comment' => $item
    ])"
>
    <x-slot:body>
        <x-forms.input
            name="name"
            label="Name"
            :value="$item->name"
        >
            @svg('heroicon-o-user-circle')
        </x-forms.input>
    </x-slot:body>

    <x-tab.locale>
        <x-slot:french>
            @php($locale = $item->ofLang(Language::FR)->first()->locale)
            <x-forms.textarea
                name="content_fr"
                label="Content"
                :value="$locale->content"
            />
        </x-slot:french>

        <x-slot:english>
            @php($locale = $item->ofLang(Language::EN)->first()->locale)
            <x-forms.textarea
                name="content_en"
                label="Content"
                :value="$locale->content"
            />
        </x-slot:english>
    </x-tab.locale>
</x-modal.index>
