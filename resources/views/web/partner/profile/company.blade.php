@if($user->partnerInfo->logo)

    <div class="d-flex align-items-center">
        <img src="{{ asset('/storage/logos/'.$user->partnerInfo->logo)}}" alt="logo" width="100"
             class="cp-company-logo">

        <div>
            <x-dashboard.company-info :tooltip="__('become_partner.company_name')" icon="heroicon-o-home-modern">
                @if (app()->getLocale() == 'en')
                    {{$user->partnerInfo->en_company_name}}
                @else
                    {{$user->partnerInfo->fr_company_name}}
                @endif
            </x-dashboard.company-info>

            <x-dashboard.company-info :tooltip="__('become_partner.phone')" icon="heroicon-o-phone">
                {{$user->partnerInfo->company_phone}}
            </x-dashboard.company-info>
        </div>
    </div>
@else
    <x-dashboard.company-info :tooltip="__('become_partner.company_name')" icon="heroicon-o-home-modern">
        @if (app()->getLocale() == 'en')
            {{$user->partnerInfo->en_company_name}}
        @else
            {{$user->partnerInfo->fr_company_name}}
        @endif
    </x-dashboard.company-info>

    <x-dashboard.company-info :tooltip="__('become_partner.phone')" icon="heroicon-o-phone">
        {{$user->partnerInfo->company_phone}}
    </x-dashboard.company-info>
@endif



<hr>


<div class="company-details">


    <div class="company-details-languages">
        <h5 class="text-uppercase">
            {{__('become_partner.languages')}}
        </h5>
        <div class="d-flex">
            @foreach(json_decode($user->partnerInfo->language) as $language)
                <img src="{{Vite::image($language . '.svg')}}" alt="{{$language}}" width="20"/>
            @endforeach
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <small>
            {{__('become_partner.fax')}}
            @if($user->partnerInfo->fax)
                {{$user->partnerInfo->fax}}
            @else
                @svg('heroicon-o-no-symbol')
            @endif
        </small>
    </div>
</div>


@include('web.partner.popup.edit-company')




