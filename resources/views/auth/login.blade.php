<div class="modal fade" id="loginModalToggle" aria-hidden="true" aria-labelledby="login" tabindex="-1">
    <form method="POST" action="{{ route('login') }}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-uppercase fw-bold text-primary" id="login">
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

                    @if (Route::has('password.request'))
                        <div class="text-end">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('login.forgot') }}
                            </a>
                        </div>
                    @endif

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="remember" id="remember"
                            checked hidden>
                        <label class="form-check-label" for="remember">

                        </label>
                    </div>
                </div>
                <div class="modal-footer hstack">
                    <div>
                        <button type="submit" class="btn btn-primary text-white">
                            {{ __('main.login') }}
                        </button>
                    </div>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-secondary" data-bs-target="#registerModalToggle"
                            data-bs-toggle="modal">
                            {{ __('main.register') }}
                        </button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            {{ __('main.close') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
