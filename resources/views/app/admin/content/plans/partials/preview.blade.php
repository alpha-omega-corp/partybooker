<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_PLAN"
    :type="ModalType::READ"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.plan.update', [
        'plan' => $item
    ])"
>
    <x-plan.card :plan="$item"/>
</x-modal.index>
