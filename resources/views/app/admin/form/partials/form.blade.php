<x-tab.locale>
    <x-slot:french>
        @php($locale = $item->locale ? $item->ofLang(Language::FR)->first()->locale : $item)

        <x-forms.input
            name="label_fr"
            label="Label"
            :value="$locale->label"
        >
            @svg($titleIcon)
        </x-forms.input>
    </x-slot:french>

    <x-slot:english>
        @php($locale = $item->locale ? $item->ofLang(Language::EN)->first()->locale : $item)

        <x-forms.input
            name="label_en"
            label="Label"
            :value="$locale->label"
        >
            @svg($titleIcon)
        </x-forms.input>
    </x-slot:english>
</x-tab.locale>
