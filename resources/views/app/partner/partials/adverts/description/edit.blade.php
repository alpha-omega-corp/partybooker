<x-modal.open
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT_DESCRIPTION"
    :type="ModalType::UPDATE"
    :icon="$editIcon"
    :fit="true"
    :radius="false"
    :background="true"
/>

<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT_DESCRIPTION"
    :type="ModalType::UPDATE"
    :size="ModalSize::LG"
    :hidden="true"
    :background="false"
    :route="route('partner.advert.description', [
        'advert' => $advert
    ])"
>
    <x-tab.locale>
        <x-slot:french>
            @php($locale = $advert->ofLang(Language::FR)->first()->locale)

            <x-forms.editor
                id="editAdvertDescriptionFrench"
                name="description_fr"
                label="Description"
                :value="$locale->description"
            />
        </x-slot:french>

        <x-slot:english>
            @php($locale = $advert->ofLang(Language::EN)->first()->locale)

            <x-forms.editor
                id="editAdvertDescriptionEnglish"
                name="description_en"
                label="Description"
                :value="$locale->description"
            />
        </x-slot:english>
    </x-tab.locale>

</x-modal.index>
