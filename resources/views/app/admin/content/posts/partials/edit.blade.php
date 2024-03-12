<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_POST"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.post.update', ['post' => $item])"
>
    @include('app.admin.content.posts.partials.form', ['item' => $item])
</x-modal.index>
