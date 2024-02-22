<x-modal
    id="editAdvert{{$advert->id}}"
    name="Advert"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('partner.advert.update', [
                                'partner' => $partner,
                                'advert' => $advert
                            ])">
    <x-forms.list>
        <x-forms.input
            name="title"
            label="Title"
            type="text"
            :value="$advert->title"
        >
            @svg('heroicon-o-ticket')
        </x-forms.input>

        <x-forms.input
            name="slug"
            label="Hyperlink"
            type="text"
            :value="$advert->slug"
        >
            @svg('heroicon-o-globe-alt')
        </x-forms.input>
    </x-forms.list>
</x-modal>
