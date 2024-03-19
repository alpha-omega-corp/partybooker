<x-modal.index
    :name="ModalName::APP_ABOUT_ITEM"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.about.item.store', ['about' => $item->id])"
>
    <x-tab.locale>
        <x-slot:french>
            <x-forms.textarea
                name="content"
                label="Content"
            />
        </x-slot:french>

        <x-slot:english>
            <x-forms.textarea
                name="content"
                label="Content"
            />
        </x-slot:english>
    </x-tab.locale>

</x-modal.index>
