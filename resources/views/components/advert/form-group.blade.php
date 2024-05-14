@php use App\Services\ListingService; @endphp
<x-card :title="$title" :can-open="false" class="w-100 bg-white" :center="false" :radius="true">
    {{$slot}}

    <x-accordion.index :name="$accordion">

        @if(isset($capacity))
            <x-accordion.item
                name="capacity"
                :accordion="$accordion"
            >
                <x-slot:title>
                    <div>
                        {{__('service.section.capacity')}}
                    </div>
                </x-slot:title>

                <x-slot:content>
                    {{$capacity}}
                </x-slot:content>
            </x-accordion.item>
        @endif

        @foreach($types as $type)
            <x-accordion.item
                :name="$type->name"
                :accordion="$accordion"
                :padding="!(new ListingService())->isService($type)"
            >
                <x-slot:title>
                    <div>
                        {{__('service.checklist.'.strtolower($type->name))}}
                    </div>
                </x-slot:title>

                <x-slot:content>
                    <div>
                        @if(in_array($type, [
                            FormType::SERVICE_CATERER,
                            FormType::SERVICE_EVENT,
                            FormType::SERVICE_EQUIPMENT,
                            FormType::SERVICE_ENTERTAINMENT,
                            FormType::SERVICE_WINE,
                        ]))
                            @if(isset($details))
                                {{$details}}
                            @endif
                        @endif


                        @if($type == FormType::DELIVERY)
                            @if(isset($delivery))
                                {{$delivery}}
                            @endif
                        @endif

                        @if((new ListingService())->isService($type))
                            <x-advert.service title="Options">
                                <x-advert.form
                                    :service="$service"
                                    :type="$type"
                                />
                            </x-advert.service>
                        @else
                            <x-advert.form
                                :service="$service"
                                :type="$type"
                            />
                        @endif

                    </div>

                </x-slot:content>
            </x-accordion.item>
        @endforeach
    </x-accordion.index>
</x-card>

