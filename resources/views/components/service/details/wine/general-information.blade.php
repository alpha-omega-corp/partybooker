@php use App\Helpers\FurnitureTranslatorHelper;use App\Helpers\TechnicalEquipmentTranslatorHelper; @endphp
<h6 class="text-uppercase">{{__('service.general_info')}}</h6>

<div class="advert-table mb-3">
    <table class="w-100">
        <tr class="text-uppercase text-gray">
            <th>{{__('partner.wine_name')}}</th>
            <th>{{__('partner.service_description')}}</th>
            <th>{{__('partner.price')}}</th>
            <th>{{__('partner.medal')}}</th>
        </tr>
        @foreach (json_decode($details->wine) as $key => $wine)
            <tr>
                <td><b>{{'#' .$key}}</b> {{$wine->name}}</td>
                <td>{{$wine->description}}</td>
                <td>{{$wine->price}}</td>
                <td>
                    <img src="{{Vite::image($wine->rewards . '-medal.svg')}}"/>
                </td>
            </tr>
        @endforeach
    </table>
</div>

<x-service.list-item :title="__('partner.service_details')">
    <x-service.ul>
        @foreach (json_decode($details->service) as $item)
            <li>
                {{$item->name}} : {{$item->description}}
            </li>
        @endforeach
    </x-service.ul>
</x-service.list-item>

<x-service.list-item :title="__('partner.participant_capacity')">
    <x-service.ul>
        @foreach (json_decode($details->participant) as $participant)

            <li class="border-bottom">
                <p>{{ $participant->name }}</p>
            </li>
            <div class="d-flex mb-1 mt-2">
                <div class="d-flex flex-column">
                    <div>
                        Maximum : {{ $participant->max }}
                        @svg('heroicon-o-user-circle')
                    </div>
                    <div>
                        Minimum : {{ $participant->min }}
                        @svg('heroicon-o-user-circle')
                    </div>
                </div>
            </div>
        @endforeach
    </x-service.ul>
</x-service.list-item>

<x-service.list-item :title="__('partner.articles')">
    @if (json_decode($details->article))
        <x-service.ul>
            @foreach (json_decode($details->article) as $key => $article)
                <li>
                    <a href="{{ asset('storage/'.$article)}}" target="blank">{{$key . '. Article'}}</a>
                </li>
            @endforeach
        </x-service.ul>
    @endif
</x-service.list-item>

<x-service.list-item :title="__('partner.affiliations')">
    <x-service.ul>
        @foreach (json_decode($details->affiliation) as $item)
            <li>
                <a href="{{$item->url ?? "#"}}" target="_blank">{{$item->name}}</a>
            </li>
        @endforeach
    </x-service.ul>
</x-service.list-item>
