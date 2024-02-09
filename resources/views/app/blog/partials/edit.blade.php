<x-modal
    id="editPost-{{$post->id}}"
    name="Post"
    :type="ModalType::UPDATE"
    :size="ModalSize::XL"
    :multipart="true"
    :route="route('admin.blog.update', ['post' => $post])"
>
    @include('blog.partials.form', ['post' => $post])
</x-modal>
