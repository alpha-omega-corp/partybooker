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


<x-forms.select
    name="category"
    model="category"
    :color="AppColor::INDIGO"
    :label="__('listing.categories')"
>
    @svg($boxIcon)

    <x-slot:options>
        @foreach($categories as $category)
            <option value="{{$category->id}}">
                {{$category->locale->title}}
            </option>
        @endforeach
    </x-slot:options>
</x-forms.select>
