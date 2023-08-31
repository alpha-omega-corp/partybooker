<div id="edit-profile" class="popup">
	<div class="popup_form">
		<form method="POST" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/settings/edit-profile')}}">
			<div class="close">X</div>
			<h4>{{ __('partybooker-cp.button_edit_profile')}}</h4>
			
			<label>{{ __('partybooker-cp.name')}}</label>
			<input type="text" name="name" placeholder="Enter admin name" value="<?php echo Auth::user()->name; ?>" required>
			
			<label>{{ __('partybooker-cp.email')}}</label>
			<input type="email" name="email" placeholder="Enter admin email" value="<?php echo Auth::user()->email; ?>" required>
			
			<label>{{ __('partybooker-cp.current_password')}}</label>
			<input type="password" name="password" placeholder="{{ __('partybooker-cp.enter_current_pas')}}" required>
			
			<label>{{ __('partybooker-cp.new_password')}}</label>
			<input type="password" name="new_password" placeholder="{{ __('partybooker-cp.enter_password')}}" required>
			
			<label>{{ __('partybooker-cp.repeat_password')}}</label>
			<input type="password" name="rep_password" placeholder="{{ __('partybooker-cp.repeat_your_password')}}" required>
			{{ csrf_field() }}
			<button type="submit">{{ __('partybooker-cp.submit')}}</button> 
		</form>
	</div>
</div>