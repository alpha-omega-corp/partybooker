<x-tab.locale>
    <x-slot:french>
        @php($locale = $item->locale ? $item->ofLang(Language::FR)->first()->locale : $item)

        <x-forms.input
            name="title_fr"
            label="Title"
            :value="$locale->title"
        >
            @svg($titleIcon)
        </x-forms.input>

        <x-forms.textarea
            name="description_fr"
            label="Description"
            :value="$locale->description"
        />
    </x-slot:french>

    <x-slot:english>
        @php($locale = $item->locale ? $item->ofLang(Language::EN)->first()->locale : $item)

        <x-forms.input
            name="title_en"
            label="Title"
            :value="$locale->title"
        >
            @svg($titleIcon)
        </x-forms.input>

        <x-forms.textarea
            name="description_en"
            label="Description"
            :value="$locale->description"
        />
    </x-slot:english>
</x-tab.locale>
