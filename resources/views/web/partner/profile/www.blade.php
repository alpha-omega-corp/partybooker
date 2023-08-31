<ul class="socialLiks">
	<li block="socialLiks"><h4>WWW</h4></li>
	<li class="li"><span>{{__('partner.url_website')}}:</span> <a href="{{$user->partnerInfo->www}}" target="_blank">{{$user->partnerInfo->www}}</a></li>
	<li class="li"><span>Facebook:</span> <a href="{{$user->partnerInfo->facebook}}" target="_blank">{{$user->partnerInfo->facebook}}</a></li>
	<li class="li"><span>Twitter:</span> <a href="{{$user->partnerInfo->twitter}}" target="_blank">{{$user->partnerInfo->twitter}}</a></li>
	<li class="li"><span>Instagram</span> <a href="{{$user->partnerInfo->instagram}}" target="_blank">{{$user->partnerInfo->instagram}}</a></li>
	<li class="li"><span>LinkedIn</span> <a href="{{$user->partnerInfo->linkedin}}" target="_blank">{{$user->partnerInfo->linkedin}}</a></li>
	<li class="li"><span>Youtube video</span> <a href="{{$user->partnerInfo->youtube}}" target="_blank">{{$user->partnerInfo->youtube}}</a></li>
	<li class="li"><span>Vimeo video</span> <a href="{{$user->partnerInfo->vimeo}}" target="_blank">{{$user->partnerInfo->vimeo}}</a></li>
	<li class="li"><a href="#" class="button">{{__('partner.edit')}}</a></li>
</ul>
