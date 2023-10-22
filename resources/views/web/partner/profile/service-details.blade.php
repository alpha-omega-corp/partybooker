@php use App\Models\Advert; @endphp
@foreach ($adverts as $k => $advert)
    @if ($advert->status == Advert::STATUS_DRAFT)
        @php
            $title = '#' .  $k + 1 . ': ' . __('service.' . $advert->view_name)
        @endphp

        <x-dashboard.card-info>
            {{__('partner.fill_service_details')}}
        </x-dashboard.card-info>

        <x-dashboard.accordion
            :title="$title"
            :name="$advert->view_name">

            <div class="cp-advert-create-form partnerdetails">
                @include('web.partner.advert.create-forms.' . $advert->view_name)
            </div>

        </x-dashboard.accordion>

    @elseif($advert->status == Advert::STATUS_INACTIVE)
        {{-- <ul class="serviceDetails{{$k+1}}">
            <li block="serviceDetails{{$k+1}}"><h4>{{__('partner.service_details')}} #{{$k+1}}: </h4>  </li>
            <li class="li">{{__('partner.fill_service_details')}}</li>
            <li class="li"><a href="#" class="button fulfilDetails">{{__('partner.edit')}}</a></li>
        </ul> --}}
    @else

        @include('web.partner.advert.details.' . $advert->view_name, [
            'iterator' => $k + 1,
            'advert' => $advert,
        ])
    @endif
@endforeach
