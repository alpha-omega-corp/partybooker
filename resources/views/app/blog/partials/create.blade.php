@php use App\Models\Post; @endphp
<x-modal
    id="createPost"
    name="Post"
    :type="ModalType::CREATE"
    :size="ModalSize::XL"
    :route="route('admin.blog.store')"
>
    @include('app.blog.partials.form', ['post' => new Post()])
</x-modal>
