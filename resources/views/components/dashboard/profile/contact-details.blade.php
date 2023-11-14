@props([
    'user'
])

<div x-data="{modal: 'editContacts'}"
     @click="openModalPrevent(modal)" class="coordinates-card">
    <div class="user-info-item" data-tippy-content="{{__('partner.name')}}">
        @svg('heroicon-o-identification')
        {{$user->name}}
    </div>

    <div class="user-info-item" data-tippy-content="{{__('partner.mobile')}}">
        @svg('heroicon-m-device-phone-mobile')
        {{$user->phone}}
    </div>
    <hr>

    <div class="user-info-item" data-tippy-content="{{__('partner.email')}}">
        @svg('heroicon-o-envelope')
        {{$user->email}}
    </div>


    @include('web.partner.popup.edit-contacts')
</div>
