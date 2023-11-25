@extends('admin.admin')

@section('page')
    page="main"
@endsection

@section('title')
    <title>{{ __('become_partner.title') }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <div class="mt-5">
        <div class="container">
            <h1 class="modal-title text-uppercase fw-bold text-center mb-5" id="partnership">
                {{ __('become_partner.company_info') }}
            </h1>

            <form action="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/partner/reg') }}"
                  method="POST" class="partner-register">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <x-dashboard.input-card>
                            <label for="user_name" class="form-label">{{ __('become_partner.contact_name') }}</label>
                            <input type="text" class="form-control" id="user_name" name="user_name">

                            <label for="user_email" class="form-label">{{ __('become_partner.contact_email') }}</label>
                            <input type="text" class="form-control" id="user_email" name="user_email">

                            <label for="user_password"
                                   class="form-label">{{ __('become_partner.password') }}</label>
                            <input type="password" class="form-control" id="user_password" name="user_password">

                            <label for="name" class="form-label">{{ __('become_partner.company_name') }}</label>
                            <input type="text" class="form-control" id="name" name="company_name">

                            <label for="phone" class="form-label">{{ __('become_partner.phone') }}</label>
                            <input type="text" class="form-control" id="phone" name="company_phone">

                            <div class="language-list">
                                <label class="fw-bold text-uppercase mt-3">
                                    {{__('become_partner.languages')}}
                                </label>
                                <hr>
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
                    </div>

                    <div class="col-md-6">
                        <x-dashboard.input-card>
                            @include('partial.map')
                        </x-dashboard.input-card>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary text-white text-uppercase w-100">
                    {{ __('partner.create_new_service') }}
                </button>
            </form>
        </div>
    </div>
@endsection




