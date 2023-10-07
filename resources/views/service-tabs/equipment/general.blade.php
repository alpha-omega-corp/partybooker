<h6 class="text-uppercase">{{__('service.general')}}</h6>

<p><span>{{__('partner.geographical_limit')}}:</span> {{$details->geo ?? "" }}</p>
<p><span>{{__('partner.complimentary_services')}}:</span> {{$details->complim_services ?? "" }}</p>
<p><span>{{__('partner.proposed_equipment')}}:</span> {{$details->proposed ?? "" }}</p>
<p><span>{{__('partner.references')}}:</span> {{$details->references ?? "" }}</p>

<h6>{{__('partner.comment')}}</h6>
<p>{{$details->comment ?? ''}}</p>
