<x-modal.index
    :name="ModalName::PARTNER_ADVERT"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :absolute="true"
    :route="route('partner.advert.store', [
            'partner' => $partner
        ])"
>
    <x-slot:body>
        <x-forms.input
            name="slug"
            label="Hyperlink"
            type="text">
            @svg($linkIcon)
        </x-forms.input>

        <hr>

        <x-forms.select label="Choose Category" name="category">
            @foreach($categories as $id => $category)
                <option value="{{$id}}">{{$category}}</option>
            @endforeach
        </x-forms.select>
    </x-slot:body>
</x-modal.index>
