<x-advert.form-group
    name="service_caterer"
    :title="__('advert.service')"
    :service="$category->service"
    :types="[
        FormType::SERVICE_CATERER,
        FormType::FURNITURE,
        FormType::DECORATION,
        FormType::DISH,
        FormType::KITCHEN,
        FormType::STAFF,
        FormType::DELIVERY,
    ]"
>
    <x-service.file :text="__('service.section.caterer.menu')" :content="$category"/>

    <x-slot:details>
        <x-service.capacity :content="$category"/>
    </x-slot:details>

    <x-slot:delivery>
        <ul class="service-delivery">
            @foreach($category->delivery_services as $delivery)
                <li>
                    <a href="{{$delivery['service_url']}}" target="_blank">
                        {{$delivery['service']}}
                    </a>
                </li>
            @endforeach
        </ul>
    </x-slot:delivery>
</x-advert.form-group>




