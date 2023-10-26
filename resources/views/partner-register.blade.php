@extends('main')

@section('page')
    page="become_partner"
@endsection

@section('title')
    <title>{{ __('become_partner.title') }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <div>
        <div class="container">
            <h1 class="modal-title text-uppercase fw-bold text-center mb-5" id="partnership">
                {{ __('become_partner.company_info') }}
            </h1>

            <form action="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/partner/reg') }}"
                  method="POST" enctype="multipart/form-data" class="partner-register">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <x-dashboard.input-card>
                            <label for="name" class="form-label">{{ __('become_partner.company_name') }}</label>
                            <input type="text" class="form-control" id="name" name="company_name">

                            <label for="phone" class="form-label">{{ __('become_partner.phone') }}</label>
                            <input type="text" class="form-control" id="phone" name="company_phone">
                        </x-dashboard.input-card>


                        <x-dashboard.input-card>

                            <div class="language-list">
                                <h6 class="fw-bold text-uppercase mt-3">
                                    {{__('become_partner.languages')}}
                                </h6>
                                <x-dashboard.checkbox
                                    name="languages[]"
                                    value="french"
                                    :label="__('partybooker-cp.french')">
                                    <img src="{{Vite::image('french.svg')}}" alt="french"/>
                                </x-dashboard.checkbox>

                                <x-dashboard.checkbox
                                    name="languages[]"
                                    value="english"
                                    :label="__('partybooker-cp.english')">
                                    <img src="{{Vite::image('english.svg')}}" alt="english"/>
                                </x-dashboard.checkbox>

                                <x-dashboard.checkbox
                                    name="languages[]"
                                    value="german"
                                    :label="__('partybooker-cp.german')">
                                    <img src="{{Vite::image('german.svg')}}" alt="german"/>
                                </x-dashboard.checkbox>

                                <x-dashboard.checkbox
                                    name="languages[]"
                                    value="italian"
                                    :label="__('partybooker-cp.italian')">
                                    <img src="{{Vite::image('italian.svg')}}" alt="italian"/>
                                </x-dashboard.checkbox>
                            </div>
                        </x-dashboard.input-card>

                        <div class="form-check">
                            <div class="partner-register-terms">
                                <input class="form-check-input " type="checkbox" value=""
                                       id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <span>{{ __('become_partner.agree') }} {{ __('become_partner.sp') }}</span>

                                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner-terms')) }}"
                                       class="text-accent text-center">
                                        Voir
                                    </a>
                                </label>
                                <br>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <x-dashboard.input-card>
                            @include('partial.map')
                        </x-dashboard.input-card>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary text-white text-uppercase w-100">
                    {{ __('become_partner.register') }}
                </button>
            </form>
        </div>
    </div>

@endsection




