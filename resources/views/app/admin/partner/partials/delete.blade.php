@php use App\Models\Partner; @endphp

<x-modal.open
    :iterator="$ajaxPartnerId"
    :name="ModalName::PARTNER"
    :type="ModalType::DELETE"
/>

<x-modal.index
    :iterator="$ajaxPartnerId"
    :name="ModalName::PARTNER"
    :type="ModalType::DELETE"
    :size="ModalSize::MD"
    :hidden="true"
    :route="route('partner.destroy', [
        'id' => $ajaxPartnerId
    ])"
>
    <x-slot:body>
        <p>Delete <b>{{$ajaxPartnerId}}</b> ?</p>
    </x-slot:body>
</x-modal.index>

