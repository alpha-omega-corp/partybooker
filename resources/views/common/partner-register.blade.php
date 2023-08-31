<!-- REGISTRATION form -->
<div class="register-form popup popup-form">
	<form class="reg container" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner/reg')}}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="close"></div>
		<h3></h3>
		<div class="row">
			<div class="col-10 offset-1">
				<h6>{{__('become_partner.contact_details')}}</h6>
			</div>
			<div class="col-lg-3 offset-lg-1 col-md-4 d-block">
				<label>{{__('become_partner.contact_name')}}<span>*</span></label>
				<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
			</div>
			<div class="col-lg-3 col-md-4 d-block">
				<label>{{__('become_partner.contact_email')}}<span>*</span></label>
				<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">
			</div>
			<div class="col-lg-3 col-md-4 d-block">
				<label>{{__('become_partner.contact_phone')}}<span>*</span></label>
				<input type="tel" name="phone" required />
			</div>
		</div>
		<div class="row mt-10">
			<div class="col-lg-3 offset-lg-1 col-md-4 d-block">
				<label>{{__('become_partner.password')}}<span>*</span></label>
				<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password" minlength="6">
			</div>
			<div class="col-lg-3 col-md-4 d-block">
				<label>{{__('become_partner.repeat_password')}}<span>*</span></label>
				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" minlength="6">
			</div>
		</div>

		<div class="row mt-30">
			<div class="col-10 offset-1 ">
				<h6>{{__('become_partner.company_info')}}</h6>
			</div>
			<div class="col-lg-3 offset-lg-1 col-md-4 d-block">
				<label>{{__('become_partner.company_name')}}<span>*</span></label>
				<input type="text" name="company_name" maxlength="50" required />
			</div>
			<div class="col-lg-3 col-md-4 d-block">
				<label class="select">{{__('become_partner.location')}}<span>*</span></label>
				<select name="location" required>
					<option selected disabled></option>
					@include('common.cantons')
				</select>
			</div>
			<div class="col-md-4 d-block">
				<label>{{__('become_partner.address')}}<span>*</span></label>
				<input type="text" name="address" id="address_full" maxlength="100" required />
			</div>
			<div class="col-lg-2 offset-lg-1 mt-10 col-md-4 d-block">
				<label>{{__('become_partner.phone')}}<span>*</span></label>
				<input type="text" name="company_phone" required />
			</div>
			<div class="col-lg-2 mt-10 col-md-4 d-block">
				<label>{{__('become_partner.fax')}}</label>
				<input type="text" name="company_fax">
			</div>

			<div class="col-md-12 mt-10 col-lg-6 abs-file-block">
				<!-- <div class="col-md-12 mt-10 col-xl-4"> -->
				<label for="logo d-block">Logo
					<div class="button" onclick="document.getElementById('logo').click();">{{__('become_partner.choose')}}</div>
					<div class="zone">{{__('become_partner.drop')}}</div>
					<input type="file" id="logo" name="logo" class="imagesFileUpload">
				</label>
				<div id="filename"></div>
			</div>

			<div class="col-10 offset-1 d-block" style="padding-bottom: 30px; padding-top: 20px;">
				@include('partial.map_partner')
			</div>

			<div class="col-lg-10 offset-lg-1 col-md-12 mt-10 mt-50-md d-block">
				<label>{{__('become_partner.slogan')}}</label>
				<textarea name="slogan" maxlength="250" rows="3"></textarea>
			</div>
			<div class="col-lg-10 offset-lg-1 col-md-12 mt-10 d-block">
				<label>{{__('become_partner.short_descr')}}<span>*</span></label>
				<textarea name="short_descr" maxlength="350" rows="4" required></textarea>
			</div>
			<div class="col-lg-10 offset-lg-1 col-md-12 mt-10 d-block">
				<label>{{__('become_partner.full_descr')}}<span>*</span></label>
				<textarea name="full_descr" maxlength="3000" rows="6" required></textarea>
			</div>
			<div class="col-lg-8 offset-lg-1 col-md-12 mt-10 line-height d-flex flex-wrap">
				<label class="w-100">{{__('become_partner.languages')}}<span>*</span></label>
				<span class="checkbox-item">
					<input type="checkbox" name="languages[]" value="french">
					<span>{{__('become_partner.french')}}</span>
				</span>
				<span class="checkbox-item">
					<input type="checkbox" name="languages[]" value="english">
					<span>{{__('become_partner.english')}}</span>
				</span>
				<span class="checkbox-item">
					<input type="checkbox" name="languages[]" value="german">
					<span>{{__('become_partner.german')}}German</span>
				</span>
				<span class="checkbox-item">
					<input type="checkbox" name="languages[]" value="italian">
					<span>{{__('become_partner.italian')}}</span>
				</span>
				<span class="checkbox-item">
					<input type="checkbox" name="languages[]" value="other" class="other">
					<span>{{__('become_partner.other')}}</span>
				</span>
			</div>
			<div class="col-md-6 offset-md-6 col-lg-2 additional-field mt-10"></div>
		</div>
		<div class="row mt-10">
			<div class="col-10 offset-1">
				<h6>www</h6>
			</div>
			<div class="col-lg-3 offset-lg-1 col-md-4 d-block">
				<label>{{__('become_partner.website')}}</label>
				<input type="url" name="company_url" placeholder="https://..." />

				<label class="mt-10">Instagram</label>
				<input type="url" name="instagram" placeholder="https://..." />

				<label class="mt-10">Youtube</label>
				<input type="url" name="youtube" placeholder="https://..." />

			</div>
			<div class="col-lg-3 col-md-4">
				<div class="d-block">
					<label>Facebook</label>
					<input type="url" name="facebook" placeholder="https://..." />
				</div>

				<div class="d-block">
					<label class="mt-10">LinkedIn</label>
					<input type="url" name="linkedin" placeholder="https://..." />
				</div>
				<div class="d-block">
					<label class="mt-10">Vimeo</label>
					<input type="url" name="vimeo" placeholder="https://..." />
				</div>
			</div>
			<div class="col-lg-3 col-md-4 d-block">
				<label>Twitter</label>
				<input type="url" name="twitter" placeholder="https://..." />
			</div>
		</div>
		<div class="row mt-30">
			<div class="col-lg-10 offset-lg-1 col-md-12">
				<span class="agreement checkbox-item d-block">
					<input type="checkbox" name="terms" value="1">
					<span>
						{{__('become_partner.agree')}} <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/'.__('urls.partner-terms'))}}">{{__('become_partner.sp')}}</a>
					</span>
				</span>
			</div>
		</div>
		<button type="submit" class="button btn-reg">{{__('become_partner.register')}}</button>
	</form>
</div>
