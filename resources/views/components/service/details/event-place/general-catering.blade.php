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

    <x-service.list-item :title="__('partner.external_food_allowed')">
        <x-service.list-bool :value="$details->ext_food"/>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.available_furniture_equipment')">
        @if($details->furniture)

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
        @if($details->equipment)
            <x-service.ul>
                @foreach(json_decode($details->equipment) as $equipment)
                    @if (strlen($equipment) > 0 && $equipment != 'other')
                        <li>

                            {{ucfirst(TechnicalEquipmentTranslatorHelper::translate($equipment))}}

                        </li>
                    @endif
                @endforeach
            </x-service.ul>
        @endif

        @if($details->other_eq)
            <x-service.ul>
                @foreach(json_decode($details->other_eq) as $equipment)
                    @if (strlen($equipment) > 0)
                        <li>
                            {{ucfirst($equipment)}}
                        </li>
                    @endif
                @endforeach
            </x-service.ul>
        @endif

    </x-service.list-item>

    @if($details->yes_af_caterers)
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
        @if(!$details->yes_free_caterers)
            <x-service.list-bool :value="false"/>
        @endif

        <x-service.ul>
            @if($details->yes_free_caterers)
                @foreach(json_decode($details->yes_free_caterers) as $caterer)
                    <li>
                        <a href="{{$caterer->url ?? "#"}}" target="_blank">{{$caterer->name}}</a>
                    </li>
                @endforeach
            @endif

        </x-service.ul>
    </x-service.list-item>
</div>
