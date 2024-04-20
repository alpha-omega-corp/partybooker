<x-advert.form-group
    name="service_event"
    :title="__('advert.service')"
    :service="$category->service"
    :types="[
        FormType::SERVICE_EVENT,
        FormType::FURNITURE,
        FormType::TECHNICAL,
        FormType::STAFF,
        FormType::INSTALLATION,
        FormType::FOOD,
    ]"
>

    <x-slot:details>
        <x-advert.service :title="__('service.section.event.rooms')">
            @foreach($category->rooms as $room)
                <x-advert.kv :key="$room['name']" :value="$room['capacity']"/>
            @endforeach
        </x-advert.service>

        <x-advert.service :title="__('service.section.event.caterers')">
            <ul>
                @foreach($category->caterers as $room)
                    <li>
                        <a href="{{$room['link']}}" target="_blank">
                            {{$room['name']}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </x-advert.service>
    </x-slot:details>
</x-advert.form-group>
