<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('partner.advert.access', [
        'advert' => $advert
    ])"
>
    <x-tab.locale>
        <x-slot:french>
            @php($locale = $advert->ofLang(Language::FR)->first()->locale)
            <x-forms.input
                name="title_fr"
                label="Title"
                type="text"
                :value="$locale->title"
            >
                @svg($titleIcon)
            </x-forms.input>
        </x-slot:french>

        <x-slot:english>
            @php($locale = $advert->ofLang(Language::EN)->first()->locale)
            <x-forms.input
                name="title_en"
                label="Title"
                type="text"
                :value="$locale->title"
            >
                @svg($titleIcon)
            </x-forms.input>
        </x-slot:english>
    </x-tab.locale>
</x-modal.index>
