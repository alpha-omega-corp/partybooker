<div class="edit-www popup popup-form popup-form-xl">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-www')}}" method="POST">
			<input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden />
	@else
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-www')}}" method="POST">
			<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden />
	@endif
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('partner.edit_links')}}</h3>
			
			<input type="url" name="current_www" value="{{$user->partnerInfo->www}}" hidden />
			
			<input type="url" class="url" name="www" placeholder="{{__('partner.your_website')}}" value="{{$user->partnerInfo->www}}" />
			<input type="url" name="facebook" placeholder="Facebook link" value="{{$user->partnerInfo->facebook}}" />	
			<input type="url" name="twitter" placeholder="Twitter link" value="{{$user->partnerInfo->twitter}}" />	
			<input type="url" name="instagram" placeholder="Instagram link" value="{{$user->partnerInfo->instagram}}" />	
			<input type="url" name="linkedin" placeholder="LinkedIn link" value="{{$user->partnerInfo->linkedin}}" />	
			
			
			<input type="url" name="youtube" placeholder="Youtube video link" value="{{$user->partnerInfo->youtube}}" />	
			<input type="url" name="vimeo" placeholder="Vimeo video link" value="{{$user->partnerInfo->vimeo}}" />	
			<p>"{{__('partner.link_must_be')}}: http://youtube.com/embed/[video ID]"</p>
			<button type="submit" class="button">{{__('partner.save')}}</button>
		</div>
	</form>	
</div>
