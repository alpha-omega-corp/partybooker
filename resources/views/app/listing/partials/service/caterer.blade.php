<x-advert.form-group
    name="caterer_material"
    :title="__('advert.service')"
    :service="$content->service"
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
    <ul class="service-delivery">
        @foreach($content->delivery_services as $delivery)
            <li class="caterer-delivery-service">
                <span>{{__('service.checklist.delivery')}} :</span>
                <a href="{{$delivery['service_url']}}" target="_blank">
                    {{$delivery['service']}}
                </a>
            </li>
        @endforeach
    </ul>
</x-advert.form-group>

<x-service.capacity :content="$content"/>

<x-card :title="__('service.section.caterer.menu')" :can-open="false">
    <x-slot:body>
        <div class="d-flex justify-content-between gap-2">
            <p>{{$content->specialty}}</p>
            <x-service.file :content="$content"/>
        </div>
    </x-slot:body>
</x-card>


