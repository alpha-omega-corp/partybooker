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

    <x-tab.index :items="[
        Language::FR,
        Language::EN
    ]">
        <x-tab.item>
            <x-forms.input
                name="name_fr"
                label="French Title"
                type="text"
                :value="$advert->ofLang(Language::FR)->first()->locale->title"
            >
                @svg('heroicon-o-ticket')
            </x-forms.input>

            <x-repeater name="keywords_fr"/>
        </x-tab.item>

        <x-tab.item>
            <x-forms.input
                name="name_en"
                label="English Title"
                type="text"
                :value="$advert->ofLang(Language::EN)->first()->locale->title"
            >
                @svg('heroicon-o-ticket')
            </x-forms.input>

            <x-repeater name="keywords_en"/>
        </x-tab.item>

    </x-tab.index>


</x-modal.index>
