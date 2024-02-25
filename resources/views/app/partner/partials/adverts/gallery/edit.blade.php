<x-modal.index
    :iterator="$image->id"
    :name="ModalName::PARTNER_ADVERT_IMAGE"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :hidden="true"
    :route="route('partner.advert.gallery.update', [
        'image' => $image,
    ])"
>

    <x-tab :pages="[
        Language::FR,
        Language::EN
    ]"
    >
        <x-tab.item>
            <x-forms.input
                name="title_fr"
                label="French Title"
                type="text"
                :value="$advert->ofLang(Language::FR)->first()->locale->title"
            >
                @svg('heroicon-o-ticket')
            </x-forms.input>
        </x-tab.item>

        <x-tab.item>
            <x-forms.input
                name="title_en"
                label="English Title"
                type="text"
                :value="$advert->ofLang(Language::EN)->first()->locale->title"
            >
                @svg('heroicon-o-ticket')
            </x-forms.input>
        </x-tab.item>
    </x-tab>

    <x-forms.list>
        <x-forms.input
            name="name"
            :label="__('image.name')"
            :value="$image->name">
            @svg('heroicon-o-identification')
        </x-forms.input>
    </x-forms.list>

</x-modal.index>
