<x-advert.form-group
    name="service_event"
    :title="__('advert.service')"
    :service="$category->service"
    :types="[
        FormType::SERVICE_EQUIPMENT,
        FormType::DELIVERY,
    ]"
>
    <x-service.file :text="__('service.section.file.magazine')" :content="$category"/>


</x-advert.form-group>
