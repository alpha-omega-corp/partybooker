<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_ABOUT_ITEM"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.about.item.update', ['item' => $item->id])"
>

    <x-tab.locale>
        <x-slot:french>
            @php($locale = $item->ofLang(Language::FR)->first()->locale)

            <x-forms.textarea
                name="content_fr"
                label="Content"
                :value="$locale->content"
            />
        </x-slot:french>

        <x-slot:english>
            <x-forms.textarea
                name="content"
                label="Content"
                :value="$item->locale->content"
            />
        </x-slot:english>
    </x-tab.locale>

</x-modal.index>
