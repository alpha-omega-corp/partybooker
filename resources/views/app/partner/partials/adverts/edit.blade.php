<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('partner.advert.access', [
        'advert' => $advert
    ])"
>
    <x-slot:body>
        <x-forms.input
            name="slug"
            label="Hyperlink"
            type="text"
            :value="$advert->slug"
        >
            @svg('heroicon-o-globe-alt')
        </x-forms.input>
    </x-slot:body>
</x-modal.index>
