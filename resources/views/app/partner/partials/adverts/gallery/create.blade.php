<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT_IMAGE"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :tooltip="__('advert.gallery')"
    :absolute="true"
    :route="route('partner.advert.update', [
        'advert' => $advert
    ])"
>
</x-modal.index>
