<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT"
    :type="ModalType::UPDATE"
    :size="ModalSize::LG"
    :absolute="true"
    :route="route('partner.advert.update', [
        'advert' => $advert
    ])"
>
    <x-tab :items="[
        Language::FR,
        Language::EN
    ]">
        <x-tab.item>
            <x-forms.input
                name="title_fr"
                label="Title"
                type="text"
                :value="$advert->ofLang(Language::FR)->first()->locale->title"
            >
                @svg('heroicon-o-ticket')
            </x-forms.input>

            <x-forms.editor
                name="description_fr"
                label="Description"
                :value="$advert->ofLang(Language::FR)->first()->locale->description"
            />
        </x-tab.item>

        <x-tab.item>
            <x-forms.input
                name="title_en"
                label="English Title"
                type="text"
                :value="$advert->ofLang(Language::EN)->first()->locale->title"
            >
                @svg('heroicon-o-ticket')
            </x-forms.input>

            <x-forms.editor
                name="description_en"
                label="English Description"
                :value="$advert->ofLang(Language::EN)->first()->locale->description"
            />
        </x-tab.item>
    </x-tab>


</x-modal.index>
