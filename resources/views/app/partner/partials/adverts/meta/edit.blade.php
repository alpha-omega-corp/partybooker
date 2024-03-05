<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT_SEO"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :absolute="true"
    :route="route('partner.advert.meta', [
        'advert' => $advert
    ])"
>

    <x-tab.locale>
        <x-slot:french>
            <x-utils.repeater
                name="keywords_fr"
                :data="$advert->ofLang(Language::FR)->first()->locale->keywords"
            />
        </x-slot:french>

        <x-slot:english>
            <x-utils.repeater
                name="keywords_en"
                :data="$advert->ofLang(Language::EN)->first()->locale->keywords"
            />
        </x-slot:english>
    </x-tab.locale>

</x-modal.index>
