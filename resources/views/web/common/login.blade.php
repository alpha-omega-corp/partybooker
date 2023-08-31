<div class="login-form popup popup-form">
	<form class="login" action="{{ route('login') }}" method="POST">
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>Log in</h3>
			<input type="email" name="email" placeholder="{{__('login.email')}}"/>
			<input type="password" name="password" placeholder="{{__('login.password')}}"/>
			<div class="checkbox-item">
				<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span>{{__('login.remember')}}</span>
			</div>
			<button type="submit" class="button">Log in</button>
			
			<div class="social-login">
				<span>{{__('login.log')}}</span>
				<a href="/auth/redirect/google"><i class="icon-googleplus"></i> </a>
				<a href="/auth/redirect/facebook"><i class="icon-facebook"></i></a>
{{--                <a href="/auth/redirect/twitter"><i class="icon-twitter"></i></a>--}}
			</div>
			<div class="create-account">
				{{__('login.don_have')}} <span class="create">{{__('login.create')}}</span>
			</div>
			<div class="create-account">
				{{__('login.forgot')}} <span class=""><a href="/password/reset">{{__('login.reset')}}  </a></span>
			</div>
		</div>
	</form>	
</div>
