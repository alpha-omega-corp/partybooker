<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_USP"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.usp.update', ['usp' => $item])"
>
    @include('app.admin.content.usp.partials.form', ['item' => $item])
</x-modal.index>
