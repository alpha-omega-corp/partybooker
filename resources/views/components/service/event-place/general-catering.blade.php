@php use App\Helpers\FurnitureTranslatorHelper; @endphp
@php use App\Helpers\TechnicalEquipmentTranslatorHelper; @endphp
@props(['details'])
<div class="position-relative">
    {{$slot}}
    <h6 class="text-uppercase">{{__('partner.catering-stewardship')}}</h6>

    <x-service.list-item :title="__('partner.property_prepare_meals')">
        <div class="d-flex">
            <x-service.list-bool :value="$details->meals"/>
        </div>
    </x-service.list-item>

    @if(isset($details->yes_af_caterers))
        <x-service.list-item :title="__('partner.works_with_affiliated_partners')">

            <x-service.ul>
                @foreach(json_decode($details->yes_af_caterers) as $caterer)
                    @if($caterer->name > 0)
                        <li>
                            <a href="{{$caterer->url ?? "#"}}" target="_blank">{{$caterer->name}}</a>
                        </li>
                    @endif
                @endforeach
            </x-service.ul>

        </x-service.list-item>
    @endif

    <x-service.list-item :title="__('partner.free_choice_of_caterer')">

        <div class="d-flex">
            <x-service.list-bool :value="$details->free_caterer"/>
        </div>

        @foreach (isset($details->yes_free_caterers) ? json_decode($details->yes_free_caterers) : [] as $yes_free_caterers)
            @if (strlen($yes_free_caterers) > 0)
                {{$yes_free_caterers}}
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.external_food_allowed')">
        <x-service.list-bool :value="$details->external_food"/>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.available_furniture_equipment')">
        @if(isset($details->furniture))

            <x-service.ul>
                @foreach(json_decode($details->furniture) as $furniture)
                    <span class="d-flex flex-column">
                       <li>{{FurnitureTranslatorHelper::translate($furniture)}}</li>
                    </span>
                @endforeach
            </x-service.ul>

        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.technical_equipment')">
        @if(isset($details->equipment))
            <x-service.ul>
                @foreach(json_decode($details->equipment) as $equipment)
                    @if (strlen($equipment) > 0)
                        <li>
                            {{ucfirst(TechnicalEquipmentTranslatorHelper::translate($equipment))}}
                        </li>
                    @endif
                @endforeach
            </x-service.ul>
        @endif


        {{$details->other_eq ?? ''}}
    </x-service.list-item>
</div>
