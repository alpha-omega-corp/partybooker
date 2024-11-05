<x-forms.select
    name="state"
    :label="__('listing.states')"
    model="location"
>
    @svg($pinIcon)

    <x-slot:options>
        @foreach($locations as $location)
            <option value="{{$location}}">
                {{strtoupper($location)}}
            </option>
        @endforeach
    </x-slot:options>
</x-forms.select>
