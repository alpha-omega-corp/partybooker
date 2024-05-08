<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_USP"
    :type="ModalType::DELETE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.usp.destroy', ['usp' => $item])"
>
    <x-slot:body>
        <p>Delete <b>{{$item->locale->title}}</b> ?</p>
    </x-slot:body>
</x-modal.index>
