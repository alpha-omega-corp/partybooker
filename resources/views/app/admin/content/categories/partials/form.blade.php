<x-tab.locale>
    <x-slot:french>
        @php($locale = $item->ofLang(Language::FR)->first()->locale)

        <x-forms.input
            name="title_fr"
            label="Title"
            :value="$locale->title"
        >
            @svg($titleIcon)
        </x-forms.input>

        <x-forms.input
            name="slug_fr"
            label="Hyperlink"
            :value="$locale->slug"
        >
            @svg($linkIcon)
        </x-forms.input>

        <x-forms.input
            name="description_fr"
            label="Description"
            :value="$locale->description"
        >
            @svg($titleIcon)
        </x-forms.input>

        <hr>
        <x-utils.repeater
            name="keywords_fr"
            :data="$locale->keywords"
        />
    </x-slot:french>

    <x-slot:english>
        @php($locale = $item->ofLang(Language::EN)->first()->locale)

        <x-forms.input
            name="title_en"
            label="Title"
            :value="$locale->title"
        >
            @svg($titleIcon)
        </x-forms.input>

        <x-forms.input
            name="slug_en"
            label="Hyperlink"
            :value="$locale->slug"
        >
            @svg($linkIcon)
        </x-forms.input>

        <x-forms.input
            name="description_en"
            label="Description"
            :value="$locale->description"
        >
            @svg($titleIcon)
        </x-forms.input>

        <hr>
        <x-utils.repeater
            name="keywords_en"
            :data="$locale->keywords"
        />
    </x-slot:english>
</x-tab.locale>
