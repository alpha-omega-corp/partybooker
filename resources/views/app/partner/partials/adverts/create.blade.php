<x-modal.index
    :name="ModalName::PARTNER_ADVERT"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :absolute="true"
    :background="false"
    :route="route('partner.advert.store', [
            'partner' => $partner
        ])"
>
    <x-tab.locale>
        <x-slot:french>
            <x-forms.input
                name="title_fr"
                label="Title"
                type="text">
                @svg($titleIcon)
            </x-forms.input>
        </x-slot:french>

        <x-slot:english>
            <x-forms.input
                name="title_en"
                label="Title"
                type="text">
                @svg($titleIcon)
            </x-forms.input>
        </x-slot:english>
    </x-tab.locale>

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
