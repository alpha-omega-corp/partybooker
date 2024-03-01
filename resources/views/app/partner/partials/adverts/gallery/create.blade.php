<x-modal.index
    :iterator="$advert->id"
    :multipart="true"
    :name="ModalName::PARTNER_ADVERT_IMAGE"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :tooltip="__('advert.gallery')"
    :absolute="true"
    :route="route('partner.advert.gallery.store', [
        'advert' => $advert,
    ])"
>
    <x-slot:body>
        <x-forms.file
            name="image"
            label="Image"
            id="createImage{{$advert->id}}"
        />
    </x-slot:body>

    <x-tab.locale>
        <x-slot:french>

            <x-forms.input
                name="title_fr"
                label="Title"
            >
                @svg('heroicon-o-ticket')
            </x-forms.input>

            <x-forms.input
                name="description_fr"
                label="Description"
            >
                @svg($infoIcon)
            </x-forms.input>


        </x-slot:french>

        <x-slot:english>

            <x-forms.input
                name="title_en"
                label="Title"
            >
                @svg('heroicon-o-ticket')
            </x-forms.input>

            <x-forms.input
                name="description_en"
                label="Description"
            >
                @svg($infoIcon)
            </x-forms.input>

        </x-slot:english>
    </x-tab.locale>
</x-modal.index>
