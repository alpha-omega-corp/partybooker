<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <form method="POST" action="{{ route('login') }}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-uppercase" id="exampleModalToggleLabel">
                        {{ __('main.login') }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="email" name="email"
                            class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="email">Email address</label>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                            id="password" name="password" required autocomplete="current-password">
                        <label for="password">Password</label>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('login.remember') }}
                        </label>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">

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

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">
                        Register
                    </button>

                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('main.close') }}</button>
                    <button type="submit" class="btn btn-primary text-white">{{ __('main.login') }}</button>
                </div>
            </div>
        </div>
    </form>
</div>
