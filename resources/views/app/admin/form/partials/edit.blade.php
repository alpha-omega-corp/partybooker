<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_FORM"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.form.update', ['form' => $item])"
>
    @include('app.admin.form.partials.form', ['item' => $item])
</x-modal.index>
