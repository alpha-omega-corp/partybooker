<ul class="contactDetail">
    <li block="contactDetail">
        <h4>{{__('become_partner.contact_details')}}</h4>
    </li>

    <li class="li"><span>{{__('become_partner.contact_name')}}:</span> {{$user->name}}</li>
    <li class="li"><span>{{__('become_partner.contact_email')}}:</span> {{$user->email}}</li>
    <li class="li"><span>{{__('become_partner.phone')}}:</span> {{$user->partnerInfo->phone}}</li>
    <li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>

</ul>
