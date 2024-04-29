<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_FAQ"
    :type="ModalType::DELETE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.faq.destroy', ['faq' => $item])"
>
    <x-slot:body>
        <p>Delete <b>{{$item->locale->question}}</b> ?</p>
    </x-slot:body>
</x-modal.index>
