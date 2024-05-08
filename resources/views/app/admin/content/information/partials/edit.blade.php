<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_INFORMATION"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.information.update', [
        'information' => $item
    ])"
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

            <x-forms.editor
                id="editAppInformationFrench{{ $item->id }}"
                name="content_fr"
                label="Content"
                :value="$locale->content"/>
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

            <x-forms.editor
                id="editAppInformationEnglish{{ $item->id }}"
                name="content_en"
                label="Content"
                :value="$locale->content"/>
        </x-slot:english>
    </x-tab.locale>
</x-modal.index>
