<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_COMMENT"
    :type="ModalType::DELETE"
    :size="ModalSize::SM"
    :background="false"
    :route="route('admin.comment.destroy', ['comment' => $item])"
>
    <x-slot:body>
        <p>Delete {{$item->name}}'s comment ?</p>
    </x-slot:body>
</x-modal.index>
