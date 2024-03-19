<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_ABOUT"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :multipart="true"
    :route="route('admin.about.update', ['about' => $item])"
>
    <x-slot:body>
        <x-forms.file
            name="image"
            label="Image"
            id="editAppAboutImage{{$item->id}}"
            :file="asset($item->image)"
        />
    </x-slot:body>

    <x-tab.locale>
        <x-slot:french>
            @php($locale = $item->ofLang(Language::FR)->first()->locale)
            <x-forms.input
                name="title"
                label="Title"
                :value="$locale->title"
            >
                @svg($titleIcon)
            </x-forms.input>
        </x-slot:french>

        <x-slot:english>
            @php($locale = $item->ofLang(Language::EN)->first()->locale)
            <x-forms.input
                name="title"
                label="Title"
                :value="$locale->title"
            >
                @svg($titleIcon)
            </x-forms.input>
        </x-slot:english>
    </x-tab.locale>

</x-modal.index>
