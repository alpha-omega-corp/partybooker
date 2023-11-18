@props([
    'user',
])

<div>
    <div class="user-info-item" data-tippy-content="{{__('partner.name')}}">
        @svg('heroicon-o-identification')
        {{$user->name}}
    </div>

    <div class="user-info-item" data-tippy-content="{{__('partner.mobile')}}">
        @svg('heroicon-m-device-phone-mobile')
        @if($user->phone)
            {{$user->phone}}
        @else
            @svg('heroicon-o-no-symbol')
        @endif
    </div>
    <hr>

    <div class="user-info-item" data-tippy-content="{{__('partner.email')}}">
        @svg('heroicon-o-envelope')
        {{$user->email}}
    </div>


    @include('web.partner.popup.edit-contacts')
</div>
