@extends('main')

@section('title')
    <title>Reset Password. | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('service')
    <section>
        <div class="container">

            <div class="d-flex justify-content-center">
                <div class="d-flex flex-column">

                    <h1 class="text-uppercase fw-bold mb-5">
                        {{ __('Reset Password') }}
                    </h1>
                </div>
            </div>


            <div class="d-flex justify-content-center">
                <div class="reset-password-container shadow-lg">

                    <div class="d-flex justify-content-center">
                        <img src="{{Vite::image('reset-password.svg')}}" alt="reset-password" width="80">
                    </div>

                    <hr>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="mail">
                                @svg('heroicon-o-envelope')
                            </span>
                            <input
                                type="email"
                                required
                                name="email"
                                placeholder="{{ __('service.email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                aria-label="{{ __('service.email') }}"
                                aria-describedby="mail"
                                value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="password">
                                @svg('heroicon-o-lock-closed')
                            </span>
                            <input
                                type="password"
                                required
                                name="password"
                                placeholder="{{ __('New Password') }}"
                                class="form-control @error('password') is-invalid @enderror"
                                aria-label="{{ __('New Password') }}"
                                aria-describedby="password"
                                autocomplete="off">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="confirm-password">
                                @svg('heroicon-o-lock-closed')
                            </span>
                            <input
                                type="password"
                                required
                                name="password_confirmation"
                                placeholder="{{ __('Confirm Password') }}"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                aria-label="{{ __('New Password') }}"
                                aria-describedby="confirm-password">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Submit
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
