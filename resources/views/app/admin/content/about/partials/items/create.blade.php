<x-modal.index
    :iterator="$about->id"
    :name="ModalName::APP_ABOUT_ITEM"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.about.item.store', ['about' => $item])"
>
    <x-tab.locale>
        <x-slot:french>
            <x-forms.textarea
                name="content_fr"
                label="Content"
            />
        </x-slot:french>

        <x-slot:english>
            <x-forms.textarea
                name="content_en"
                label="Content"
            />
        </x-slot:english>
    </x-tab.locale>

</x-modal.index>
