<x-service.panel class="service-caterer">
    <x-slot:top>
        <x-card.service :title="__('service.section.caterer.specialties')" :padding="true">
            {{$content->specialty}}
        </x-card.service>
    </x-slot:top>

    <x-slot:left>
        <x-service.capacity :content="$content"/>
        <x-service.file
            :title="__('service.section.caterer.menu')"
            :content="$content"
        />

        <x-advert.form-group
            name="caterer_material"
            :title="__('service.section.material')"
            :service="$content->service"
            :types="[
                    FormType::FURNITURE,
                    FormType::DECORATION,
                    FormType::DISH,
                ]"
        />
    </x-slot:left>

    <x-slot:right>
        <x-service.list
            :title="__('service.section.caterer')"
            :content="$content"
            :type="FormType::SERVICE_CATERER"
        />

        <x-card.service :title="__('service.section.caterer.delivery')">

            <ul class="service-caterer-delivery">
                @foreach($content->delivery_services as $delivery)
                    <li class="caterer-delivery-service">
                        <a href="{{$delivery['service_url']}}" target="_blank">
                            {{$delivery['service']}}
                        </a>
                    </li>
                @endforeach
            </ul>

        </x-card.service>

        <x-advert.form-group
            name="caterer_logistics"
            :title="__('service.section.logistics')"
            :service="$content->service"
            :types="[
                    FormType::KITCHEN,
                    FormType::STAFF,
                    FormType::DELIVERY,
                ]"
        />
    </x-slot:right>
</x-service.panel>
