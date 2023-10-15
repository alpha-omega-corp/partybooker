<div class="modal fade" id="registerModalToggle" aria-hidden="true" aria-labelledby="register" tabindex="-1">
    <form method="POST" action="{{ route('register') }}">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-uppercase fw-bold text-primary" id="register">
                        {{ __('main.register') }}
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf


                    <div class="form-floating mb-3">
                        <input type="text" name="name"
                               class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="email"
                               value="{{ old('name') }}" required autofocus>
                        <label for="name">
                            Username
                        </label>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email"
                               class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="email"
                               value="{{ old('name') }}" required>
                        <label for="email">
                            Email
                        </label>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               id="password" name="password" required>
                        <label for="password">Password</label>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-floating">
                        <input type="password"
                               class="form-control {{ $errors->has('password_repeat') ? ' is-invalid' : '' }}"
                               id="password-repeat" name="password_repeat" required>
                        <label for="password-repeat">
                            Password Confirmation
                        </label>
                        @if ($errors->has('password_repeat'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password_repeat') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="modal-footer hstack">
                    <div>
                        <button type="submit" class="btn btn-primary text-white">
                            {{ __('main.register') }}
                        </button>
                    </div>
                    <div class="ms-auto">
                        <button class="btn btn-secondary" data-bs-target="#loginModalToggle" data-bs-toggle="modal">
                            {{ __('main.login') }}
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
