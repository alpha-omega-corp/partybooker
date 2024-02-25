<x-modal.index
    :index="$advert->id"
    :name="ModalName::PARTNER_ADVERT"
    :type="ModalType::DELETE"
    :size="ModalSize::SM"
    :background="false"
    :route="route('partner.advert.destroy', [
                                'partner' => $partner,
                                'advert' => $advert
                            ])">
    <p>Delete {{$advert->title}} ?</p>
</x-modal.index>
