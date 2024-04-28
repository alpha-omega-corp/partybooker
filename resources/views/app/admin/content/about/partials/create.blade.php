<x-modal.index
    :iterator="$aboutType->name"
    :name="ModalName::APP_ABOUT"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :hidden="true"
    :multipart="true"
    :route="route('admin.about.store')"
>
    <input type="hidden" name="type" value="{{$aboutType->name}}">

    <x-slot:body>
        <x-forms.file
            name="image"
            label="Image"
            id="createAboutImage{{$aboutType->name}}"
        />
    </x-slot:body>

    <x-tab.locale>
        <x-slot:french>
            <x-forms.input
                name="title_fr"
                label="Title"
            >
                @svg($titleIcon)
            </x-forms.input>
        </x-slot:french>

        <x-slot:english>
            <x-forms.input
                name="title_en"
                label="Title"
            >
                @svg($titleIcon)
            </x-forms.input>
        </x-slot:english>
    </x-tab.locale>


</x-modal.index>
