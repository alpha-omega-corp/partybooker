<x-modal.index
    :iterator="$post->id"
    :name="ModalName::BLOG"
    :type="ModalType::UPDATE"
    :size="ModalSize::XL"
    :multipart="true"
    :route="route('admin.blog.update', ['post' => $post])"
>
    @include('app.blog.partials.form', ['post' => $post])
</x-modal.index>
