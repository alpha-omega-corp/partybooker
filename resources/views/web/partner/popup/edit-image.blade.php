<div class="edit-images-alt popup popup-form popup-form-xl">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-images-alt')}}" method="POST" style="width:1000px;">
			<input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden />
	@else
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-images-alt')}}" method="POST" style="width:1000px;">
			<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden />
	@endif
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>Edit images alt</h3>
			
                        @foreach($categoryImages as $category => $data)
                        @foreach($data['images'] as $key=>$img)
                        
                        <input type="text" name="image_alt[{{$img['id']}}][image_alt_en]" placeholder="Alt EN" value="{{$img['image_alt_en']}}" />
                        <input type="text" name="image_alt[{{$img['id']}}][image_alt_fr]" placeholder="Alt FR" value="{{$img['image_alt_fr']}}" />
                        <hr>
                        @endforeach
                        @endforeach
			<button type="submit" class="button">{{__('partner.save')}}</button>
		</div>
	</form>	
</div>
