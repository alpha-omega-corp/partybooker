@if($advert->tags->count() < $plan->tag_count)

    <x-modal.open
        :iterator="$advert->id"
        :name="ModalName::PARTNER_ADVERT_TAG"
        :type="ModalType::CREATE"
        :icon="$createIcon"
        :fit="true"
        :radius="false"
        :background="true"
    />

    <x-modal.index
        :iterator="$advert->id"
        :name="ModalName::PARTNER_ADVERT_TAG"
        :type="ModalType::CREATE"
        :size="ModalSize::MD"
        :hidden="true"
        :tooltip="__('advert.tags')"
        :route="route('partner.advert.tag', [
        'advert' => $advert,
    ])"
    >
        <x-slot:body>
            <x-forms.select name="tag" :label="__('advert.tags')">
                @svg($boxIcon)

                <x-slot:options>
                    @foreach($advert->category->tags as $tag)
                        @if($tag->locale)
                            <option value="{{$tag->id}}">
                                {{$tag->locale->title}}
                            </option>
                        @endif

                    @endforeach
                </x-slot:options>
            </x-forms.select>
        </x-slot:body>
    </x-modal.index>
@endif
