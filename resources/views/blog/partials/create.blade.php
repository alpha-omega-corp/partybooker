<x-modal
    id="createPost"
    name="Post"
    :type="ModalType::CREATE"
    :size="ModalSize::XL"
    :multipart="true"
    :absolute="true"
    :route="route('admin.blog.store')"
>
    @include('blog.partials.form', ['post' => new \App\Models\Post()])
</x-modal>
