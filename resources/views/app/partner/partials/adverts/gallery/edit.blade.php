<x-modal.index
    :iterator="$image->id"
    :name="ModalName::PARTNER_ADVERT_IMAGE"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :hidden="true"
    :route="route('partner.advert.gallery.update', [
        'image' => $image,
    ])"
>

    <x-tab.locale>
        <x-slot:french>
            @php($locale = $image->ofLang(Language::FR)->find($image->id)->locale)

            <x-forms.input
                name="title_fr"
                label="Title"
                :value="$locale->title"
            >
                @svg($titleIcon)
            </x-forms.input>

            <x-forms.input
                name="description_fr"
                label="Description"
                :value="$locale->description"
            >
                @svg($infoIcon)
            </x-forms.input>
        </x-slot:french>

        <x-slot:english>
            @php($locale = $image->ofLang(Language::EN)->find($image->id)->locale)

            <x-forms.input
                name="title_en"
                label="Title"
                type="text"
                :value="$locale->title"
            >
                @svg($titleIcon)
            </x-forms.input>

            <x-forms.input
                name="description_en"
                label="Description"
                :value="$locale->description"
            >
                @svg($infoIcon)
            </x-forms.input>
        </x-slot:english>
    </x-tab.locale>
</x-modal.index>
