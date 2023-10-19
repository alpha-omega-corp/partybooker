@extends('main')

@section('page')
    page="aboutus"
@endsection

@section('title')
    <title>{{strtoupper(__('about.about_us'))}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <section class="about">
        <div class="container">
            <h1 class="text-uppercase display-1">{{__('about.ABOUT_PARTYBOOKER')}}</h1>

            <div class="description">

                <div class="row">
                    <div class="col-md-4 col-sm-12">

                        <div class="about-stats-card shadow-lg">
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-center">
                                    <img src="{{Vite::image('about-main.svg')}}" alt="" width="300" height="100">
                                </div>
                                <div class="about-stats-text">
                                    <p>
                                        <span>{{__('about.partner_benefits_expl_since')}}</span>
                                        <span
                                            class="text-primary fw-bold">
                                        {{__('about.partner_benefits_expl_visitors')}}
                                    </span>
                                        <span>{{__('about.partner_benefits_expl_average')}}</span>
                                        <!--<span>{{__('about.partner_benefits_expl_made')}}</span>-->
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-8 col-sm-12">

                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-start">


                                <div class="about-main">
                                    <p>
                                        {{__('about.ABOUT_PARTYBOOKER_p1')}}
                                    </p>
                                    <p>
                                        {{__('about.ABOUT_PARTYBOOKER_p2')}}
                                    </p>
                                    <h3 class="about-concept fw-bold">{{__('about.CONCEPT')}}</h3>
                                    <p>
                                        {{ __('about.CONCEPT_expl') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <section class="partner-advantage-section">
                <h2 class="text-uppercase display-6">{{__('about.partner_benefits')}}</h2>
                <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/' . __('urls.partner'))}}"
                   class="btn btn-primary d-flex become-partner-btn"
                   target="_blank">
                    {{strtoupper(__('about.become_a_partner'))}}
                </a>
                <div class="row all-advantages mx-auto">
                    <div class="col-md-6 col-sm-12">
                        <x-partner-advantage :items="[
                            __('about.partner_benefits_1'),
                            __('about.partner_benefits_2'),
                            __('about.partner_benefits_3')
                        ]" image="about1.svg"/>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <x-partner-advantage :items="[
                        __('about.partner_benefits_4'),
                        __('about.partner_benefits_5'),
                    ]" image="about2.svg"/>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <x-partner-advantage :items="[
                        __('about.partner_benefits_6'),
                        __('about.partner_benefits_7'),
                        __('about.partner_benefits_8'),
                    ]" image="about3.svg"/>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <x-partner-advantage :items="[
                        __('about.partner_benefits_9'),
                        __('about.partner_benefits_10'),
                        __('about.partner_benefits_11'),
                    ]" image="about4.svg"/>
                    </div>


                    <div class="col-md-6 col-sm-12">

                        <x-partner-advantage :items="[
                        __('about.partner_benefits_12'),
                        __('about.partner_benefits_13'),
                        __('about.partner_benefits_14'),
                    ]" image="about5.svg"/>
                    </div>


                    <div class="col-md-6 col-sm-12">
                        <x-partner-advantage :items="[
                        __('about.partner_benefits_15'),
                        __('about.partner_benefits_16'),
                        __('about.partner_benefits_17'),
                    ]" image="about6.svg"/>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <x-partner-advantage :items="[
                        __('about.partner_benefits_18'),
                        __('about.partner_benefits_19'),
                        __('about.partner_benefits_20'),
                    ]" image="about7.svg"/>
                    </div>
                </div>
            </section>
        </div>
    </section>

@endsection

@push('header')
    <script>
        function openMember(id) {
            document.getElementById(id).click()
        }
    </script>
@endpush
