@extends('main')

@section('title')
<title>Login | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
<section class="header not-full">
    @include('common.header-nav')
    <div class="cover abs">
        <img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
    </div>
    <div class="container">
		<h1>Login</h1>
    </div>
    @include('common.social')
</section>
<section class="login-section">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('login') }}">
				@csrf
                <div class="form-group row">
					<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('login.email') }}</label>

                    <div class="col-md-6">
						<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</div>
				</div>
                <div class="form-group row">
					<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('login.password') }}</label>

                    <div class="col-md-6">
						<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">

                        @if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
				</div>

                <div class="form-group row">
					<div class="col-md-6 offset-md-4">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
								{{ __('login.remember') }}
                            </label>
                        </div>
					</div>
				</div>
                <div class="form-group row mb-0">
					<div class="col-md-8 offset-md-4">
						<button type="submit" class="button">
							{{ 'Login' }}
						</button>
						@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('login.forgot') }}
							</a>
                        @endif
					</div>
				</div>
			</form>    
        </div>
    </div>
</div>
</section>
@endsection
