<hr>
<x-tab :items="[
            strtoupper(Language::FR->name),
            strtoupper(Language::EN->name)
        ]"
       justify="end"
>
    <x-tab.item :information="__('locale.french_tab')">
        {{$french}}
    </x-tab.item>

    <x-tab.item :information="__('locale.english_tab')">
        {{$english}}
    </x-tab.item>

</x-tab>
