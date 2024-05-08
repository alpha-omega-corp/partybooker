<x-advert.form-group
    name="service_event"
    :title="__('advert.service')"
    :service="$category->service"
    :types="[
        FormType::SERVICE_ENTERTAINMENT,
    ]"
>
    <x-service.file :text="__('service.section.file.magazine')" :content="$category"/>

    <x-slot:details>
        <x-service.capacity :content="$category"/>
    </x-slot:details>

</x-advert.form-group>
