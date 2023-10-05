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
        <div>
            <img class="main-img" src="{{Vite::image('about-main.svg')}}" alt="">
            <span class="benefits-undercaption">
            </span>
        </div>

        <h1 class="text-uppercase display-1 fw-bold">{{__('about.ABOUT_PARTYBOOKER')}}</h1>

        <div class="d-flex stats">
            <img src="{{Vite::image('logoPB.png')}}" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande." />
            <div>
                <u>{{__('about.partner_benefits_expl_since')}}</u>
                <span class="text-info">{{__('about.partner_benefits_expl_visitors')}}</span>
                <span>{{__('about.partner_benefits_expl_average')}}</span>
                <br>
                <span>{{__('about.partner_benefits_expl_made')}}</span>

            </div>

        </div>

        <div class="description">
            <p>
                {{__('about.ABOUT_PARTYBOOKER_p1')}}
                {{__('about.ABOUT_PARTYBOOKER_p2')}}
            </p>
        </div>

        <h2 class="text-uppercase fw-bold mt-5 display-6">{{__('about.partner_benefits')}}</h2>
        <div class="row all-advantages">
            <div class="col-6">
                <x-partner-advantage :items="[
                            __('about.partner_benefits_1'),
                            __('about.partner_benefits_2'),
                            __('about.partner_benefits_3')
                        ]" image="about1.svg" />
            </div>

            <div class="col-6">
                <x-partner-advantage :items="[
                        __('about.partner_benefits_4'),
                        __('about.partner_benefits_5'),
                    ]" image="about2.svg" />
            </div>

            <div class="col-6">
                <x-partner-advantage :items="[
                        __('about.partner_benefits_6'),
                        __('about.partner_benefits_7'),
                        __('about.partner_benefits_8'),
                    ]" image="about3.svg" />
            </div>

            <div class="col-6">
                <x-partner-advantage :items="[
                        __('about.partner_benefits_9'),
                        __('about.partner_benefits_10'),
                        __('about.partner_benefits_11'),
                    ]" image="about4.svg" />
            </div>


            <div class="col-6">

                <x-partner-advantage :items="[
                        __('about.partner_benefits_12'),
                        __('about.partner_benefits_13'),
                        __('about.partner_benefits_14'),
                    ]" image="about5.svg" />
            </div>


            <div class="col-6">
                <x-partner-advantage :items="[
                        __('about.partner_benefits_15'),
                        __('about.partner_benefits_16'),
                        __('about.partner_benefits_17'),
                    ]" image="about6.svg" />
            </div>

            <div class="col-6">
                <x-partner-advantage :items="[
                        __('about.partner_benefits_18'),
                        __('about.partner_benefits_19'),
                        __('about.partner_benefits_20'),
                    ]" image="about7.svg" />
            </div>
        </div>

        <p>
            {!! __('about.CONCEPT_expl') !!}
        </p>


        <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/' . __('urls.partner'))}}"
           class="btn btn-premium d-flex"
           target="_blank">
            {{strtoupper(__('about.become_a_partner'))}}
        </a>


        <section class="team-section">
            <div class="team">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <img src="{{Vite::image('team2.jpg')}}" class="d-flex justify-content-center rounded-circle shadow-lg" alt="Anne confondatrice du concept Partybooker">
                    </div>

                    <div class="col-md-9">
                        <h3 class="text-uppercase fw-bold">Anne Bonvin</h3>
                        <p>{{__('about.ab_1')}}</p>
                        <p>{{__('about.ab_2')}}</p>
                        <p>{{__('about.ab_3')}}</p>

                        <div class="collapse" id="collapseExample">
                            <p>
                                {{__('about.ab_4')}}
                            </p>
                            <p>
                                {{__('about.ab_5')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team mt-5">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <img src="{{Vite::image('Caro_photo_2019.jpeg')}}" class="rounded-circle cover shadow-lg" alt="Caroline toujours à la recherche des bons plans à découvrir de Suisse romande">
                    </div>
                    <div class="col-md-9">
                        <h3 class="text-uppercase fw-bold">Caroline Christen</h3>
                        <p>{{__('about.cc1')}},</p>
                        <p>{{__('about.cc2')}}</p>
                        <div class="collapse" id="collapseExample2">
                            <p>{{__('about.cc3')}}</p>
                            <p>{{__('about.cc4')}}</p>
                            <p>{{__('about.cc5')}}!</p>
                            <p>{{__('about.cc6')}}!</p>
                        </div>
                    </div>


                </div>
            </div>
        </section>





    </div>
</section>

@endsection
