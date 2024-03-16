<x-modal.index
    :iterator="$item->id"
    :name="ModalName::APP_PLAN"
    :type="ModalType::UPDATE"
    :size="ModalSize::MD"
    :background="false"
    :route="route('admin.plan.update', [
        'plan' => $item
    ])"
>
    <x-slot:body>

        <x-forms.input
            name="price"
            label="Price"
            :value="$item->price"
            type="number"
        >
            @svg($priceIcon)
        </x-forms.input>

        <div class="d-flex gap-2">
            <x-forms.input
                name="advert_count"
                label="Adverts"
                :value="$item->advert_count"
                type="number"
            />
            <x-forms.input
                name="tag_count"
                label="Tags"
                :value="$item->tag_count"
                type="number"
            />
            <x-forms.input
                name="upload_count"
                label="Uploads"
                :value="$item->upload_count"
                type="number"
            />
        </div>

        <div class="d-flex justify-content-end mt-2">
            <x-forms.color
                name="color"
                label="Color"
                id="plan{{$item->id}}"
                :value="$item->color"
            />
        </div>
    </x-slot:body>

    <hr>

    <x-tab.locale>
        <x-slot:french>
            @php($locale = $item->ofLang(Language::FR)->first()->locale)

            <x-forms.input
                name="name_fr"
                label="Name"
                :value="$locale->name"
            >
                @svg($titleIcon)
            </x-forms.input>

            <x-forms.textarea
                name="description_fr"
                label="Content"
                :value="$locale->description"
            />
        </x-slot:french>

        <x-slot:english>
            @php($locale = $item->ofLang(Language::EN)->first()->locale)

            <x-forms.input
                name="name_en"
                label="Name"
                :value="$locale->name"
            >
                @svg($titleIcon)
            </x-forms.input>

            <x-forms.textarea
                name="description_en"
                label="Content"
                :value="$locale->description"
            />
        </x-slot:english>
    </x-tab.locale>

</x-modal.index>
