<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_ABOUT"
    :type="ModalType::DELETE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.about.destroy', ['about' => $item])"
>
    <x-slot:body>
        <p>Delete <b>{{$item->locale->title}}</b> ?</p>
    </x-slot:body>
</x-modal.index>
