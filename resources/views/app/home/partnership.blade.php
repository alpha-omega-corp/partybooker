@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('page')
    page="partner"
@endsection

@section('title')
    <title>{{ __('become_partner.title') }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')

    <x-card.panel :title="__('home.partnership')">
        <section class="partnership">

            <div class="benefits-content-card">
                <div class="d-flex justify-content-between">

                    <div class="benefits-header">
                        <h2 class="benefits-title">
                            {{__('home.benefits')}}
                        </h2>

                        <img src="{{ Vite::app('partnership.jpg') }}" class="benefits-image"
                             alt="Partybooker Partnership"/>
                    </div>

                    <div class="benefits-content">
                        @foreach($benefits as $benefit)
                            <div class="benefit-card">
                                <div class="benefit-card-header">

                                    <h6 class="benefit-card-title">
                                        {{$benefit->locale->title}}
                                    </h6>
                                    <div class="p-1">
                                        <img src="{{ $benefit->image }}" alt="{{ $benefit->name }}" class="shadow-lg">
                                    </div>
                                </div>

                                <div class="benefit-card-content">
                                    @foreach($benefit->items as $item)
                                        <p>{{ $item->locale->content }}</p>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <hr>

            <div class="plans-content-card">
                @foreach($plans as $plan)
                    <x-plan.card :plan="$plan"></x-plan.card>
                @endforeach
            </div>

        </section>
    </x-card.panel>


    <div class="become-partner">
        <section class="benefits mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-column text-center p-4 h-100">


                            <a class="rainbow">
                                Test
                            </a>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <h1 class="display-4 fw-bold text-uppercase mb-3">{{ __('become_partner.benefits_title') }}</h1>
                        <ul>
                            <li>
                                <div class="d-flex">
                                    <h3>{{ __('become_partner.b1') }}</h3>
                                </div>
                                <p>{{ __('become_partner.b1_text') }}</p>
                            <li>

                                <div class="d-flex">
                                    <h3> {{ __('become_partner.b2') }}</h3>
                                </div>
                                <p>{{ __('become_partner.b2_text') }}</p>

                            </li>

                            <li>
                                <div class="d-flex">
                                    <h3> {{ __('become_partner.b3') }}</h3>
                                </div>
                                <p>{{ __('become_partner.b3_text') }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <section class="packages mt-5">
            <div class="container">
                <div class="heading text-center ">
                    <h2 class="display-4 fw-bold text-uppercase">
                        {{ __('become_partner.yearly_packages') }}
                    </h2>
                    <p>{{ __('become_partner.yp_text') }}</p>
                </div>
                <br>
                <div class="mt-4">


                </div>


            </div>
        </section>


        <section class="contactus">
            <div class="container">
                <h4 class="text-uppercase fw-bold">
                    {{__('become_partner.any_questions_title')}}
                </h4>
                <p>
                    {{__('become_partner.any_questions_text')}}
                </p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary d-flex w-100 text-uppercase" data-bs-toggle="modal"
                        data-bs-target="#contactModal" id="contactButton">
                    {{ __('become_partner.contact') }}
                </button>

                <!-- Index -->
                <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title fs-5 text-uppercase fw-bolder text-primary"
                                    id="contactModalLabel">
                                    {{__('become_partner.any_questions_title')}}
                                </h1>

                            </div>
                            <form method="POST">
                                @csrf
                                <div class="modal-body">
                                    <p class="any-questions shadow-lg">
                                        {{ (__('become_partner.any_questions_text')) }}
                                    </p>

                                    <div class="contact-input-container shadow-lg">

                                        <label for="phone" class="text-uppercase fw-bolder">
                                            {{__('partner.your_phone_number')}}
                                        </label>

                                        <input type="tel" name="phone" placeholder="+41"
                                               class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                               id="phone"
                                               value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="terms">
                    <span>{{ __('become_partner.provider_service') }}</span>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner-terms')) }}"
                       target="_blank">{{ __('become_partner.view') }}</a>
                </div>
            </div>


        </section>


        <section class="usp">
            <div class="container">
                <h2 class="display-4 mb-5 fw-bold text-uppercase">
                    {{ __('become_partner.become_info_title') }}
                </h2>
                <div class="container text-center">
                    <div class="row">
                        @for ($i = 0; $i < 8; $i++)
                            <div class="col-lg-6 usp-item">
                                <h4 class="text-uppercase text-start">
                                    <span class="text-primary fw-bold">{{ $i + 1 }}.</span>
                                    {{__('usp.title-' . $i + 1) }}
                                </h4>
                                <p>{{__('usp.text-' . $i + 1) }}</p>
                            </div>

                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script type="module">
        function contact() {
            document.getElementById('contactButton').click();
        }
    </script>
@endsection



