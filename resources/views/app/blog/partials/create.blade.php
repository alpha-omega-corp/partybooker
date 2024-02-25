@php use App\Models\Post; @endphp
<x-modal.index
    :name="ModalName::BLOG"
    :type="ModalType::CREATE"
    :size="ModalSize::XL"
    :route="route('admin.blog.store')"
>
    @include('app.blog.partials.form', ['post' => new Post()])
</x-modal.index>
