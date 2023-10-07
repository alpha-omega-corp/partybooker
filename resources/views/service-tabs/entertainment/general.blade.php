
<h6 class="text-uppercase">{{__('service.general')}}</h6>

<p><span>{{__('partner.geographical_limit')}}:</span> {{$details->geo ?? ""}}</p>
<p><span>{{__('partner.number_of_participants')}}:</span> {{$details->participants ?? ""}}</p>
<p><span>{{__('partner.list_of_your_services')}}:</span> {{$details->services ?? ""}}</p>
<p><span>{{__('partner.equipment_provided')}}:</span> {{$details->equipment ?? ""}}</p>
<p><span>{{__('partner.equipment_not_included')}}:</span> {{$details->eq_not_incl ?? ""}}</p>
<p><span>{{__('partner.biography')}}:</span> {{$details->biography ?? ""}}</p>
<p><span>{{__('partner.references')}}:</span> {{$details->reference ?? ""}}</p>

<h6>{{__('partner.comment')}}</h6>
<p></p>

