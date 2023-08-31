<div class="edit-company popup popup-form popup-form-xl">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-company')}}" method="POST" enctype="multipart/form-data">
	@else
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-company')}}" method="POST" enctype="multipart/form-data">
	@endif
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>Edit company details</h3>
			@if (Auth::user()->type == 'admin')
				<input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden />
			@else
				<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden />
			@endif
			<input type="text" name="current_logo" value="{{$user->partnerInfo->logo}}" hidden />
			<input type="text" name="current_loc" value="{{$user->partnerInfo->location_code}}" hidden />
			
			<div class="logo-file">		
				<label for="logo">
					<div class="button">{{__('partner.choose_logo')}}</div>
					<div class="zone"></div>
					<input type="file" id="logo" name="logo" class="imagesFileUpload">
				</label>
				<div id="filename">
					{{$user->partnerInfo->logo}}
				</div>
			</div>	
			
			<div class="select-loc">
				<label class="select">{{__('become_partner.location')}}<span>*</span></label>
				<select name="location">
					<option selected disabled>{{__('cantons.'.strtolower($user->partnerInfo->location_code).'_loc')}}</option>
					@include('web.common.cantons')
				</select>
			</div>
			
			<input type="text" id="address_full" name="address" maxlength="100" value="{{$user->partnerInfo->address}}"  placeholder="{{__('become_partner.address')}}" required />

			@include('web.partial.map_company')

			<input type="text" name="company_phone" value="{{$user->partnerInfo->company_phone}}" placeholder="{{__('partner.company_phone')}}" required />
			<input type="text" name="company_fax" value="{{$user->partnerInfo->fax}}" placeholder="{{__('become_partner.fax')}}">
			
			<div class="lang-nav">
				<ul>
					<li lan="en">En</li>
					<li lan="fr">Fr</li>
				</ul>
			</div>
			<div class="info-en lang-tab" lan="en">
				<input type="text" name="en_company_name" placeholder="{{__('partybooker-cp.company_name')}}" maxlength="50" value="{{$user->partnerInfo->en_company_name}}" required>
				
				<textarea name="en_slogan" maxlength="250" placeholder="{{__('partybooker-cp.slogan')}}" rows="3">{{$user->partnerInfo->en_slogan}}</textarea>
					
				<textarea name="en_short_descr" maxlength="350" placeholder="{{__('partybooker-cp.short_description')}}" rows="4" required class="textarea-wysiwyg">{{$user->partnerInfo->en_short_descr}}</textarea>
					
				<textarea name="en_full_descr" maxlength="3000" placeholder="{{__('partybooker-cp.full_description')}}" rows="6" required class="textarea-wysiwyg">{{$user->partnerInfo->en_full_descr}}</textarea>
			</div>
			<div class="info-fr lang-tab" lan="fr">
				<input type="text" name="fr_company_name" placeholder="{{__('partybooker-cp.company_name')}}" maxlength="50" value="{{$user->partnerInfo->fr_company_name}}" required>
				
				<textarea name="fr_slogan" maxlength="250" placeholder="{{__('partybooker-cp.slogan')}}" rows="3">{{$user->partnerInfo->fr_slogan}}</textarea>
					
				<textarea name="fr_short_descr" maxlength="350" placeholder="{{__('partybooker-cp.short_description')}}" rows="4" required class="textarea-wysiwyg">{{$user->partnerInfo->fr_short_descr}}</textarea>
					
				<textarea name="fr_full_descr" maxlength="3000" placeholder="{{__('partybooker-cp.full_description')}}" rows="6" required class="textarea-wysiwyg">{{$user->partnerInfo->fr_full_descr}}</textarea>
			</div>
			
			<div class="languages">
				<label>{{ __('partybooker-cp.languages')}}</label>
				<span class="checkbox-item">
					<input type="checkbox" name="languages[]" value="french"  @if(strpos($user->partnerInfo->language, 'french') != false) checked @endif>
					<span>{{ __('partybooker-cp.french')}}</span>
				</span>
				<span class="checkbox-item">
					<input type="checkbox" name="languages[]" value="english" @if(strpos($user->partnerInfo->language, 'english') != false) checked @endif>
					<span>{{ __('partybooker-cp.english')}}</span>
				</span>
				<span class="checkbox-item">
					<input type="checkbox" name="languages[]" value="german" @if(strpos($user->partnerInfo->language, 'german') != false) checked @endif>
					<span>{{ __('partybooker-cp.german')}}</span>
				</span>
				<span class="checkbox-item">
					<input type="checkbox" name="languages[]" value="italian" @if(strpos($user->partnerInfo->language, 'italian') != false) checked @endif>
					<span>{{ __('partybooker-cp.italian')}}</span>
				</span>
				<span class="checkbox-item">
					<input type="checkbox" name="languages[]" value="other" class="other" @if(strpos($user->partnerInfo->language, 'other') != false) checked @endif>
					<span>{{ __('partybooker-cp.other')}}</span>
				</span>
			</div>			
			@if(strpos($user->partnerInfo->other_lang, 'other') != false)
				<div class="additional-field visible">
					<label>{{ __('partybooker-cp.enter_other_languages')}}</label>
					<input type="text" name="other" maxlength="35" class="add-input" value="{{$user->partnerInfo->other_lang}}" required="">
				</div>
			@else 
				<div class="additional-field">
					<label>{{ __('partybooker-cp.enter_other_languages')}}</label>
				</div>
			@endif
			<button type="submit" class="button">{{__('partybooker-cp.save')}}</button>
		</div>
	</form>	
</div>
