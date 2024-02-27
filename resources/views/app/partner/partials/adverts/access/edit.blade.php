<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT_ACCESS"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :absolute="true"
    :route="route('partner.advert.access', [
        'advert' => $advert
    ])"
>
    <x-forms.input
        name="slug"
        label="Hyperlink"
        type="text"
        :value="$advert->slug"
    >
        @svg('heroicon-o-globe-alt')
    </x-forms.input>
</x-modal.index>
