<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_ABOUT_ITEM"
    :type="ModalType::DELETE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.about.item.destroy', ['item' => $item])"
>

    <x-slot:body>
        <p>Delete <b>{{$item->about->locale->title}}</b>'s item ?</p>
    </x-slot:body>


</x-modal.index>
