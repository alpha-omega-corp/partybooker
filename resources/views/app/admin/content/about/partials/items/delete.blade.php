<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_ABOUT_ITEM"
    :type="ModalType::DELETE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.about.item.destroy', ['item' => $item->id])"
>

    <x-slot:body>
        <p>Delete {{$item->about->name}}'s item ?</p>
    </x-slot:body>


</x-modal.index>
