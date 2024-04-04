<x-service.panel class="service-wine">

    <x-slot:left>
        <x-service.capacity :content="$content"/>
        <x-service.file
            :title="__('service.section.wine.article')"
            :content="$content"
        />

        <x-advert.form-group
            name="wine_material"
            :title="__('service.section.material')"
            :service="$content->service"
            :types="[
                    FormType::FURNITURE,
                    FormType::DECORATION,
                    FormType::TECHNICAL,
                ]"
        />
    </x-slot:left>

    <x-slot:right>
        <x-service.list
            :title="__('service.section.wine')"
            :content="$content"
            :type="FormType::SERVICE_WINE"
        />

        <x-advert.form-group
            name="wine_logistics"
            :title="__('service.section.logistics')"
            :service="$content->service"
            :types="[
                    FormType::STAFF,
                    FormType::INSTALLATION,
                    FormType::FOOD,
                ]"
        />
    </x-slot:right>
</x-service.panel>
