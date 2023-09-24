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
            <div class="row container">
                <div class="col-md-6">
                    <div class="d-flex flex-column text-center justify-content-center">

                        <div>
                            <img src="/images/benefits1.jpg"
                                alt="Devenir partenaire pour rendre votre présence web plus impactante. Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande." />

                        </div>
                        <div class="w-100">
                            @if (Auth::user() == null)
                                <a class="btn btn-primary text-uppercase fw-bold" data-bs-toggle="modal"
                                    href="#loginModalToggle" role="button">
                                    {{ __('become_partner.title') }}
                                </a>
                            @else
                                <a class="btn btn-primary text-uppercase fw-bold" data-bs-toggle="modal"
                                    href="#partnershipModalToggle" role="button">
                                    {{ __('become_partner.title') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold text-uppercase">{{ __('become_partner.benefits_title') }}</h1>
                    <ul>
                        <li>
                            <h3>{{ __('become_partner.b1') }}</h3>
                            <p>{{ __('become_partner.b1_text') }}</p>
                        <li>
                            <h3> {{ __('become_partner.b2') }}</h3>
                            <p>{{ __('become_partner.b2_text') }}</p>

                        </li>

                        <li>
                            <h3> {{ __('become_partner.b3') }}</h3>
                            <p>{{ __('become_partner.b3_text') }}</p>
                        </li>
                    </ul>
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
                            <div class="package position-relative">
                                <div class="text-uppercase fw-bold text-center title {{ 'bg-' . $plan->name }}">
                                    <h3>{{ __('plan.' . strtolower($plan->name)) }}</h3>
                                </div>
                                <ul>
                                    <li>
                                        <img src="{{ asset('images/options.svg') }}" alt="category" />
                                        @foreach ($plan->options as $option)
                                            <span> {{ $option['name'] }} </span>
                                            @if (!$loop->last)
                                                <span>or</span>
                                            @endif
                                        @endforeach
                                    </li>

                                    <li>
                                        <img src="{{ asset('images/picture.svg') }}" alt="picture" />

                                        <span>{{ $plan->photos_num }} {{ __('become_partner.photos') }}</span>
                                    </li>
                                    @if ($plan->video == 1)
                                        <li>
                                            <img src="{{ asset('images/video-player.svg') }}" alt="video" />
                                            <span>{{ __('become_partner.video') }}</span>
                                        </li>
                                    @endif
                                    @if ($plan->direct_request == 1)
                                        <li>
                                            <img src="{{ asset('images/network.svg') }}" alt="network" />

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
                            <div class="text-uppercase fw-bold text-center title bg-primary">VIP</div>
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
                <span class="">{{ __('become_partner.any_questions') }}</span>
                <button class="button" id="contactUs">{{ __('become_partner.contact') }}</button>
            </div>
        </section>



        <section class="register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h3>{{ __('become_partner.become_info_title') }}</h3>
                        @if (app()->getLocale() == 'en')
                            {!! __('become_partner.become_info_eng') !!}
                        @else
                            {!! __('become_partner.become_info') !!}
                        @endif
                        <button class="button register-btn">{{ __('become_partner.register') }}</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="photos">
            <img src="/images/jay-wennington-2065-unsplash.jpg"
                alt="Partybooker augmente la visibilité de votre entreprise" />
            <img src="/images/petr-sevcovic-594807-unsplash.jpg"
                alt="Partybooker améliore votre référencement sur les moteurs de recherche" />
            <img src="/images/mitchell-orr-179532-unsplash.jpg"
                alt="Augmentation du taux de conversions des partenaires de Partybooker" />
            <img src="/images/aneta-pawlik-651610-unsplash.jpg"
                alt="Obtenez des clients directement grâces à Partybooker" />
        </section>
        <section class="terms">
            <div class="container">
                <div class="row justify-content-center">
                    <span>{{ __('become_partner.provider_service') }}</span>
                    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner-terms')) }}"
                        class="button" target="_blank">{{ __('become_partner.view') }}</a>
                </div>
            </div>
        </section>
        @include('common.partner-phone')
    </div>

    @include('common.partner-register')
@endsection
