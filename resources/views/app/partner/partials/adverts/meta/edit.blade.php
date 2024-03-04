<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT_SEO"
    :type="ModalType::UPDATE"
    :size="ModalSize::LG"
    :absolute="true"
    :route="route('partner.advert.update', [
        'advert' => $advert
    ])"
>

    <x-tab.locale>
        <x-slot:french>
            <x-forms.input
                name="name_fr"
                label="French Title"
                type="text"
                :value="$advert->ofLang(Language::FR)->first()->locale->title"
            >
                @svg('heroicon-o-ticket')
            </x-forms.input>

            <x-repeater name="keywords_fr"/>
        </x-slot:french>

        <x-slot:english>
            <x-forms.input
                name="name_en"
                label="English Title"
                type="text"
                :value="$advert->ofLang(Language::EN)->first()->locale->title"
            >
                @svg('heroicon-o-ticket')
            </x-forms.input>

            <x-repeater name="keywords_en"/>
        </x-slot:english>
    </x-tab.locale>
</x-modal.index>
