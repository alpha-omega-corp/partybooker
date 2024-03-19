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
        <hr>
        <x-forms.input
            name="name"
            label="Name"
            :value="$item->name"
        >
            @svg($titleIcon)
        </x-forms.input>

    </x-slot:body>

</x-modal.index>
