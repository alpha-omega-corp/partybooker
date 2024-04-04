<x-modal.index
    :iterator="$formType"
    :name="ModalName::APP_FORM"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :absolute="true"
    :route="route('admin.form.store', ['type' => $formType])"
>
    @include('app.admin.form.partials.form', ['item' => new \App\Models\AppForm()])
</x-modal.index>
