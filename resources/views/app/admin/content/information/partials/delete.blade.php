<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_INFORMATION"
    :type="ModalType::DELETE"
    :size="ModalSize::SM"
    :background="false"
    :route="route('admin.information.destroy', ['information' => $item])"
>
    <x-slot:body>
        <p>Delete {{$item->locale->title}} ?</p>
    </x-slot:body>
</x-modal.index>
