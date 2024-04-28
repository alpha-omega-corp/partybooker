<x-modal.index
    :name="ModalName::APP_USP"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :hidden="true"
    :route="route('admin.usp.store')"
>
    @include('app.admin.content.usp.partials.form', ['item' => new \App\Models\AppUsp()])
</x-modal.index>
