<x-modal.index
    :iterator="$image->id"
    :name="ModalName::PARTNER_ADVERT_IMAGE"
    :type="ModalType::DELETE"
    :size="ModalSize::SM"
    :hidden="true"
    :route="route('partner.advert.gallery.destroy', [
        'image' => $image,
    ])"
>
    <p>Delete image?</p>

</x-modal.index>
