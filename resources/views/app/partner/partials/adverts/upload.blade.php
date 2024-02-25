<x-modal.index
    :index="$advert->id"
    :name="ModalName::PARTNER_ADVERT_IMAGE"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :background="false"
    :icon="$galleryIcon"
    :tooltip="__('advert.gallery')"
    :route="route('partner.advert.update', [
        'advert' => $advert
    ])"
>
</x-modal.index>
