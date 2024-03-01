<x-tab :items="[
            strtoupper(Language::FR->name),
            strtoupper(Language::EN->name)
        ]"
       justify="end">


    <x-tab.item :information="__('locale.french')">
        <x-forms.list>
            {{$french}}
        </x-forms.list>
    </x-tab.item>

    <x-tab.item :information="__('locale.english')">
        <x-forms.list>
            {{$english}}
        </x-forms.list>
    </x-tab.item>

</x-tab>
