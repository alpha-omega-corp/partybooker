<x-card :title="$title" :can-open="false">
    <x-accordion.index :name="$accordion">
        @foreach($types as $type)
            <x-accordion.item
                :name="$type->name"
                :accordion="$accordion"
            >
                <x-slot:title>
                    <h6>
                        {{__('service.checklist.'.strtolower($type->name))}}
                    </h6>
                </x-slot:title>

                <x-slot:content>

                    <x-advert.form
                        :service="$service"
                        :type="$type"
                    />
                </x-slot:content>
            </x-accordion.item>
        @endforeach
    </x-accordion.index>

    {{$slot}}
</x-card>

