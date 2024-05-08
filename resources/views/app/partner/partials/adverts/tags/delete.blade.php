<x-modal.index
    :iterator="$advert->id.$tag->id"
    :name="ModalName::PARTNER_ADVERT_TAG"
    :type="ModalType::DELETE"
    :size="ModalSize::MD"
    :hidden="true"
    :tooltip="__('advert.tags')"
    :route="route('partner.advert.tag.destroy', [
        'advert' => $advert,
        'tag' => $tag,
    ])"
>
    <x-slot:body>
        <p>Delete <b>{{$tag->locale->title}}</b> tag ? </p>
    </x-slot:body>

</x-modal.index>
