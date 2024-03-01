<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT_DESCRIPTION"
    :type="ModalType::UPDATE"
    :size="ModalSize::LG"
    :absolute="true"
    :route="route('partner.advert.update', [
        'advert' => $advert
    ])"
>
    <x-tab.locale>
        <x-slot:french>
            @php($locale = $advert->ofLang(Language::FR)->find($advert->id)->locale)
            <x-forms.input
                name="title_fr"
                label="Title"
                type="text"
                :value="$locale->title"
            >
                @svg($titleIcon)
            </x-forms.input>

            <x-forms.editor
                name="description_fr"
                label="Description"
                :value="$locale->description"
            />
        </x-slot:french>

        <x-slot:english>
            @php($locale = $advert->ofLang(Language::EN)->find($advert->id)->locale)
            <x-forms.input
                name="title_en"
                label="Title"
                type="text"
                :value="$locale->title"
            >
                @svg($titleIcon)
            </x-forms.input>

            <x-forms.editor
                name="description_en"
                label="Description"
                :value="$locale->description"
            />
        </x-slot:english>
    </x-tab.locale>

</x-modal.index>
