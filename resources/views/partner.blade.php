@extends('main')

@section('page')
    page="partner"
@endsection

@section('title')
    <title>{{ __('become_partner.title') }} | {{ __('partybooker-cp.www') }}</title>
@endsection

@section('content')
    <div class="become-partner">
        <section class="benefits">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-column text-center p-4 h-100">

                            <img src="{{ Vite::image('benefits1.jpg') }}" class="become-partner-img"
                                 alt="Devenir partenaire pour rendre votre présence web plus impactante. Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande."
                                 width="100">


                            @if (Auth::user() == null)
                                <a class="rainbow p-4 text-uppercase fw-bold fs-3" data-bs-toggle="modal"
                                   href="#loginModalToggle" role="button">
                                    @svg('heroicon-m-arrow-long-right')

                                </a>
                            @else
                                <a class="rainbow p-4 text-uppercase fw-bold" data-bs-toggle="modal"
                                   href="#partnershipModalToggle" role="button">
                                    @svg('heroicon-m-arrow-long-right')

                                </a>
                            @endif
                            <br>

                        </div>
                    </div>
                    <div class="col-md-6 ps-4">
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

        <section class="packages">
            <div class="container">
                <div class="heading">
                    <h2 class="display-4 fw-bold text-uppercase">
                        {{ __('become_partner.yearly_packages') }}
                    </h2>
                    <p>{{ __('become_partner.yp_text') }}</p>
                </div>

                <div class="row justify-content-center">
                    @foreach ($plans as $plan)
                        @if (in_array(strtolower($plan->name), ['basic', 'commission', 'vip']))
                            @continue;
                        @endif

                        <div class="col-md-3">
                            <div class="package position-relative" x-data="" @click="contact()">
                                <div class="text-uppercase text-center ">
                                    <h3 class="fw-bold p-2 {{ 'text-' . $plan->name }}">{{ __('plan.' . strtolower($plan->name)) }}</h3>
                                </div>

                                <ul>
                                    <li>
                                        <img src="{{ Vite::image('options.svg') }}" alt="category"/>
                                        @foreach ($plan->options as $option)
                                            <span> {{ $option['name'] }} </span>
                                            @if (!$loop->last)
                                                <span>or</span>
                                            @endif
                                        @endforeach
                                    </li>

                                    <li>
                                        <img src="{{ Vite::image('picture.svg') }}" alt="picture"/>

                                        <span>{{ $plan->photos_num }}
                                            {{ __('become_partner.photos') }}</span>
                                    </li>
                                    @if ($plan->video == 1)
                                        <li>
                                            <img src="{{ Vite::image('video-player.svg') }}" alt="video"/>
                                            <span>{{ __('become_partner.video') }}</span>
                                        </li>
                                    @endif
                                    @if ($plan->direct_request == 1)
                                        <li>
                                            <img src="{{ Vite::image('network.svg') }}" alt="network"/>

                                            <span>{{ __('become_partner.direct_request') }}</span>
                                        </li>
                                    @endif
                                </ul>
                                <div class="pricing">
                                    <span class="amount">CHF {{ $plan->price }}</span>
                                    <span>{{ __('become_partner.per_year') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-md-3">
                        <div class="package position-relative">
                            <div class="text-uppercase text-center bg-primary">
                                <h3 class="fw-bold p-2">VIP</h3>
                            </div>
                            <ul>
                                <li>{{ __('partner.vip_info1') }}</li>
                                <li>{{ __('partner.vip_info2') }}</li>
                            </ul>

                            <div class="pricing">
                                <span class="amount">CHF 95</span>
                                <span>{{ __('plan.per_month') }}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="contactus">
            <div class="container">
                <p class="fw-bold">{{ __('become_partner.any_questions') }}</p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary d-flex w-100 text-uppercase" data-bs-toggle="modal"
                        data-bs-target="#contactModal" id="contactButton">
                    {{ __('become_partner.contact') }}
                </button>

                <!-- Modal -->
                <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">

                        <form class="login" action="" method="POST">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h1 class="modal-title fs-5 text-uppercase fw-bolder text-primary"
                                        id="contactModalLabel">
                                        {{__('become_partner.any_questions_title')}}
                                    </h1>

                                </div>
                                <div class="modal-body">
                                    <div class="close"></div>


                                    <div class="container">
                                        <p class="any-questions">{{ (__('become_partner.any_questions_text')) }}</p>

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

                                </div>
                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="terms">
                    <span>{{ __('become_partner.provider_service') }}</span>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner-terms')) }}"
                       target="_blank">{{ __('become_partner.view') }}</a>
                </div>
            </div>


        </section>

        <section class="terms">
            <div class="container">
                <div class="row justify-content-center">

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
                        @for ($i = 0; $i < 7; $i++)

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

    @include('common.partner-register')
@endsection


@push('header')
    <script>
        function contact() {
            document.getElementById('contactButton').click();
        }
    </script>
@endpush
