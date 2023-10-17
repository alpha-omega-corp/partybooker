@extends('main')

@section('title')
    <title>Reset Password. | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <section class="section-reset">
        <div class="container" style="color: black">

            <div class="d-flex flex-column align-items-start">
                <x-logo/>
                <h1 class="text-uppercase mt-5">
                    {{ __('Reset Password') }}
                </h1>

            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
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
                            value="{{ old('email') }}" autocomplete="email" autofocus>
                    </div>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif


                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection




