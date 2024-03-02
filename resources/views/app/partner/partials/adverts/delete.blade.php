<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT"
    :type="ModalType::DELETE"
    :size="ModalSize::SM"
    :background="false"
    :route="route('partner.advert.destroy', [
                                'partner' => $partner,
                                'advert' => $advert
                            ])">
    <x-slot:body>
        <p>Delete <b>{{$advert->locale->title}}</b> ?</p>
    </x-slot:body>
</x-modal.index>
