<x-advert.form-group
    name="service_wine"
    :title="__('advert.service')"
    :service="$category->service"
    :types="[
        FormType::SERVICE_WINE,
        FormType::FURNITURE,
        FormType::DECORATION,
        FormType::TECHNICAL,
        FormType::STAFF,
        FormType::INSTALLATION,
        FormType::FOOD,
    ]"
>
    <x-service.file :text="__('service.section.wine.article')" :content="$category"/>

    <x-slot:details>
        <x-service.capacity :content="$category"/>
    </x-slot:details>
</x-advert.form-group>


