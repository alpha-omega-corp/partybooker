<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_FORM"
    :type="ModalType::DELETE"
    :size="ModalSize::SM"
    :background="false"
    :route="route('admin.form.destroy', ['form' => $item])"
>
    <x-slot:body>
        <p>Delete {{$item->locale->label}} ?</p>
    </x-slot:body>
</x-modal.index>
