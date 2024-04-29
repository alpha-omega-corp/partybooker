@php use App\Models\AppPost; @endphp

<x-modal.index
    :name="ModalName::APP_POST"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :hidden="true"
    :multipart="true"
    :route="route('admin.post.store')"
>
    @include('app.admin.content.posts.partials.form', ['item' => new AppPost()])
</x-modal.index>
