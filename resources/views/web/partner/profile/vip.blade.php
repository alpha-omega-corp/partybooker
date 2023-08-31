@if($user->partnerInfo->vipPlan)
	<ul class="vipPlan @if(!$user->partnerInfo->vipPlan->is_payed || ($user->partnerInfo->vipPlan->end_date && date("Y-m-d") > $user->partnerInfo->vipPlan->end_date)) attention @endif">
		<li block="vipPlan"><h4>VIP</h4></li>
		<li class="li"><span>{{__('partner.count_of_categories')}}:</span> {{$user->partnerInfo->vipPlan->categories_count}}</li>
		<li class="li"><span>{{__('partner.expire')}}:</span> {{$user->partnerInfo->vipPlan->end_date}}</li>
		<li class="li"><span>{{__('partner.url_website')}}:</span> {{$user->partnerInfo->vipPlan->website_url}} </li>
		<li class="li"><span>{{__('partner.image')}}:</span>  <img src="{{$user->partnerInfo->vipPlan->image ? asset('storage/banners/'.$user->partnerInfo->vipPlan->image) : 'https://via.placeholder.com/150'}}" class="img-thumbnail"> </li>
		<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
	</ul>
@endif
