<x-modal.index
    :iterator="$post->id"
    :name="ModalName::BLOG"
    :type="ModalType::DELETE"
    :size="ModalSize::SM"
    :multipart="false"
    :route="route('admin.blog.destroy', ['post' => $post])"
>
    <p>Delete {{$post->title_en}}</p>
</x-modal.index>
