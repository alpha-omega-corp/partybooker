<x-modal.index
    :iterator="$advert->id"
    :name="ModalName::PARTNER_ADVERT_CATEGORY"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :icon="$boxIcon"
    :background="false"
    :route="route('partner.advert.update.category', [
        'advert' => $advert
    ])"
>

    <x-slot:body>
        <x-forms.select :label="__('partner.choose-category')" name="category">
            @svg($boxIcon)
            <x-slot:options>
                @foreach($categories as $id => $category)
                    <option value="{{$id}}">{{$category}}</option>
                @endforeach
            </x-slot:options>
        </x-forms.select>
    </x-slot:body>


</x-modal.index>
