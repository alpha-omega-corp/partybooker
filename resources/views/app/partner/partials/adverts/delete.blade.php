<x-modal
    id="deleteAdvert{{$advert->id}}"
    name="Advert"
    :type="ModalType::DELETE"
    :size="ModalSize::SM"
    :background="false"
    :route="route('partner.advert.destroy', [
                                'partner' => $partner,
                                'advert' => $advert
                            ])">
    <p>Delete {{$advert->title}} ?</p>
</x-modal>
