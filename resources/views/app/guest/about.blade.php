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

            <section class="partner-advantage-section">

                <div class="accordion-section">
                    <div class="accordion-container">
                        <div class="accordion-container-items">
                            <x-home.accordion accordion="infoAccordion">
                                <x-home.accordion-item
                                    accordion="infoAccordion"
                                    name="description"
                                    image="information.svg">
                                    <x-slot:title>
                                        Partybooker
                                    </x-slot:title>

                                    <p>
                                        {{__('about.ABOUT_PARTYBOOKER_p1')}}
                                    </p>
                                    <p>
                                        {{__('about.ABOUT_PARTYBOOKER_p2')}}
                                    </p>
                                </x-home.accordion-item>


                            </x-home.accordion>

                            <x-home.accordion accordion="conceptAccordion">
                                <x-home.accordion-item
                                    accordion="conceptAccordion"
                                    name="concept"
                                    image="concept.svg">


                                    <x-slot:title>
                                        {{__('about.CONCEPT')}}
                                    </x-slot:title>

                                    <p>
                                        {{ __('about.CONCEPT_expl') }}
                                    </p>
                                </x-home.accordion-item>
                            </x-home.accordion>
                        </div>
                    </div>
                </div>

                <div class="about-stats-card shadow-lg">
                    <div class="about-card-content">
                        <h1 class="text-uppercase display-6 mt-5">{{__('about.partner_benefits')}}</h1>

                        <div class="d-flex justify-content-center">
                            <img src="{{Vite::image('about0.svg')}}" alt="" width="300" height="100">
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
                        <div class="d-flex justify-content-center">
                            <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/' . __('urls.partner'))}}"
                               class="btn btn-accent become-partner-btn"
                               target="_blank">
                                {{strtoupper(__('about.become_a_partner'))}}
                            </a>
                        </div>
                        <hr>

                    </div>

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
                </div>


            </section>


        </div>
    </section>

@endsection
