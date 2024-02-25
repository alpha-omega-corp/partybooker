<x-modal.index
    :index="$advert->id"
    :name="ModalName::PARTNER_ADVERT_SEO"
    :type="ModalType::UPDATE"
    :size="ModalSize::LG"
    :icon="$keyIcon"
    :tooltip="__('advert.meta')"
    :background="false"
    :route="route('partner.advert.update', [
        'advert' => $advert
    ])"
>

</x-modal.index>
