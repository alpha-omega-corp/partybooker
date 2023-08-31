<div class="user-register-form popup popup-form">
	<form class="login" method="POST" action="{{ route('register') }}">
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('login.register')}}</h3>

			<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{__('login.name')}}">
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

			<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{__('login.your_email')}}">
			@if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

			<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password" placeholder="{{__('login.your_password')}}">
			@if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

			<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{__('login.your_password_repeat')}}">

			<input id="type" type="text" name="type" value="" hidden>
			<div class="mt-30">
				<span class="agreement checkbox-item">
					<input type="checkbox" name="agreement" required />
					<span>I agree to <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/user-terms')}}">User Terms & Conditions</a></span>
				</span>
			</div>
			<button type="submit" class="button">Register</button>
		</div>
	</form>
</div>
