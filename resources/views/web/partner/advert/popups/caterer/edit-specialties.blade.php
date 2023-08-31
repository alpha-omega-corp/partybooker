<div class="edit-specialties-{{$iterator}} popup popup-form editdetails partnerdetails">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/adverts/'.$advert->id.'/edit-specialties')}}" method="POST" enctype="multipart/form-data">
	@else
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/adverts/'.$advert->id.'/edit-specialties')}}" method="POST" enctype="multipart/form-data">
	@endif
	
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('partner.specialties')}}</h3>
			@if (Auth::user()->type == 'admin')
				<input type="text" name="id_partner" value="{{$user->id_partner}}" hidden />
			@else
				<input type="text" name="id_partner" value="{{\Auth::user()->id_partner}}" hidden />
			@endif
			<input type="text" name="fileNum" value="
			@if(!is_null($advert->service->menu))
				{{sizeof(json_decode($advert->service->menu))}}
			@else
				0
			@endif
			" class="fileNum" hidden />
			
			<label class="wide">{{__('partner.specialties')}}<span>*</span></label>
			<textarea name="specialties" maxlength="350" rows="2" required />{{$advert->service->specialities}}</textarea>
			
			<label>{{__('partner.menus')}}</label>
			<label for="menu" class="label">
				<div class="button">{{__('partner.browse')}}</div>
				<div class="zone">{{__('partner.drop_files')}}</div>
				<input type="file" id="menu" name="menu[]" class="multiple filesUpload" multiple accept="image/*, .doc,.docx, .xls, .xlsx, .pdf" />
			</label>
			<div id="menus"></div>
			
			<button type="submit" class="button file-limit">{{__('partner.save')}}</button>
		</div>
	</form>	
</div>
