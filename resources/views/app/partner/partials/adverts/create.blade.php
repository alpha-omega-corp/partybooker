<x-modal
    id="createAdvert"
    name="Advert"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :absolute="true"
    :route="route('partner.advert.store', [
            'partner' => $partner
        ])"
>
    <x-forms.list>
        <x-forms.input
            name="title"
            label="Title"
            type="text">
            @svg('heroicon-o-ticket')
        </x-forms.input>

        <hr>

        <x-forms.select label="Choose Category" name="category">
            @foreach($categories as $category)
                <option value="{{$category}}">{{$category}}</option>
            @endforeach
        </x-forms.select>

    </x-forms.list>
</x-modal>
