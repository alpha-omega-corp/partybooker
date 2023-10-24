<x-dashboard.card-item :title="__('become_partner.contact_name')">
    {{$user->name}}
</x-dashboard.card-item>

<x-dashboard.card-item :title="__('become_partner.contact_email')">
    {{$user->email}}
</x-dashboard.card-item>

<x-dashboard.card-item :title="__('become_partner.phone')">
    {{$user->partnerInfo->phone}}
</x-dashboard.card-item>

@include('web.partner.popup.edit-contacts')
<div id="editLocation" class="mb-5"></div>
