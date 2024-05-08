<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_POST"
    :type="ModalType::DELETE"
    :size="ModalSize::SM"
    :background="false"
    :route="route('admin.post.destroy', ['post' => $item])"
>
    <x-slot:body>
        <p>Delete <b>{{$item->locale->title}}</b> ?</p>
    </x-slot:body>
</x-modal.index>
