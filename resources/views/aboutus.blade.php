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

            <div class="d-flex">
                <div>
                    <h1 class="text-uppercase display-1">{{__('about.ABOUT_PARTYBOOKER')}}</h1>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{Vite::image('logoPB.png')}}" class="about-logo shadow-lg"
                         alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande."/>
                </div>
            </div>
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
                                    <h3 class="about-concept">Le concept</h3>
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


            <section class="team-section">
                <h2 class="display-6 text-uppercase">{{__('about.our_team')}}</h2>

                <div class="accordion" id="accordionTeam">
                    <div class="team" x-data="" @click="openMember('anne')">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="team-card">
                                    <div class="row">


                                        <div class="accordion-item">
                                            <div class="col d-flex justify-content-center">
                                                <img src="{{Vite::image('team2.jpg')}}"
                                                     class="d-flex justify-content-center rounded-circle shadow-lg"
                                                     alt="Anne confondatrice du concept Partybooker">
                                            </div>
                                            <h3 class="accordion-header text-uppercase fw-bold">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="true" id="anne"
                                                        aria-controls="collapseOne">
                                                    {{__('about.about') . ' ' . 'Anne Bonvin'}}
                                                </button>
                                            </h3>

                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionTeam">
                                                <div class="accordion-body">
                                                    <p>{{__('about.ab_1')}}</p>
                                                    <p>{{__('about.ab_2')}}</p>
                                                    <p>{{__('about.ab_3')}}</p>
                                                    <p>{{__('about.ab_4')}}</p>
                                                    <p>{{__('about.ab_5')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="team-card" x-data="" @click="openMember('caroline')">
                                    <div class="row">

                                        <div class="accordion-item">
                                            <div class="d-flex justify-content-center">
                                                <img src="{{Vite::image('Caro_photo_2019.jpeg')}}"
                                                     class="rounded-circle cover shadow-lg"
                                                     alt="Caroline toujours à la recherche des bons plans à découvrir de Suisse romande">
                                            </div>
                                            <h3 class="accordion-header text-uppercase fw-bold">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-expanded="true" id="caroline"
                                                        aria-controls="collapseTwo">
                                                    {{__('about.about') . ' ' . 'Caroline Christen'}}
                                                </button>
                                            </h3>

                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionTeam">
                                                <div class="accordion-body">
                                                    <p>{{__('about.cc1')}},</p>
                                                    <p>{{__('about.cc2')}}</p>
                                                    <p>{{__('about.cc3')}}</p>
                                                    <p>{{__('about.cc4')}}</p>
                                                    <p>{{__('about.cc5')}}!</p>
                                                    <p>{{__('about.cc6')}}!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

@endsection

@push('header')
    <script>
        function openMember(id) {
            let member = document.getElementById(id);
            member.click();
        }
    </script>
@endpush
