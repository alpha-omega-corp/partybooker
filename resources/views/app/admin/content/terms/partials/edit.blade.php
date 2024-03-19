<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_CONTENT"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :absolute="true"
    :route="route('admin.content.update', ['content' => $item])"
>

    <x-tab.locale>
        <x-slot:french>
            @php($locale = $item->ofLang(Language::FR)->first()->locale)

            <x-forms.input
                name="title_fr"
                label="Title"
                :value="$locale->title"
            >
                @svg($titleIcon)
            </x-forms.input>

            <x-forms.textarea
                name="content_fr"
                label="Content"
                :value="$locale->content"
            />
        </x-slot:french>

        <x-slot:english>
            @php($locale = $item->ofLang(Language::EN)->first()->locale)

            <x-forms.input
                name="title_en"
                label="Title"
                :value="$locale->title"
            >
                @svg($titleIcon)
            </x-forms.input>

            <x-forms.textarea
                name="content_en"
                label="Content"
                :value="$locale->content"
            />
        </x-slot:english>
    </x-tab.locale>
</x-modal.index>
