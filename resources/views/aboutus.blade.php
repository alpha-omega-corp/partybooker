@extends('main')

@section('page')
page="aboutus"
@endsection

@section('title')
<title>{{strtoupper(__('about.about_us'))}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
<section class="header not-full">
    @include('common.header-nav')
    <div class="cover abs">
        <img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>{{__('about.about_us')}}</h1>
            </div>
        </div>
    </div>
    @include('common.social')
</section>

<section class="about-section">
    <div class="container info">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h3>{{__('about.ABOUT_PARTYBOOKER')}}</h3>
                <!-- <div class="short-line"></div> -->
                <p>
                    {{__('about.ABOUT_PARTYBOOKER_p1')}}
                </p>
                <p>
                    {{__('about.ABOUT_PARTYBOOKER_p2')}}
                </p>
            </div>
        </div>
    </div>
    <div class="conception-block">
        <div class="container">
            <div class="row justify-content-end">

                <div class="col-md-1 conception-info ">
                </div>
                <div class="col-md-5 conception-info ">
                    <!-- <h3>our conception</h3> -->
                    <h3>{{__('about.CONCEPT')}}</h3>
                    <p>
                        {!! __('about.CONCEPT_expl') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="become-partner-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center benefits-container">
                    <!-- <h3>{{strtoupper(__('about.become_a_partner'))}}</h3>
                    <p>
                        Lorem ipsum dolor sit amet, vel sint mandamus et. Cu evertitur voluptaria qui. Has ne tacimates delicatissimi.
                        Id vel maiorum imperdiet. Urbanitas neglegentur mei ei. Sit ea decore expetenda neglegentur, mel liber aeque feugait no.
                        Per an virtute alterum.
                    </p> -->
                    <img class="main-img" src="/images/about-main.svg" alt="">
                    <h3 class="benefits-caption">{{__('about.partner_benefits')}}</h3>
                    <span class="benefits-undercaption">
                        {{__('about.partner_benefits_expl')}}
                    </span>
                </div>

                <div class="col-12 benefits-detail-container">
                    <div class="benefit-block">
                        <div class="img"> <img src="/images/about1.svg" alt=""> </div>
                        <ul>
                            <li>- {!! __('about.partner_benefits_1') !!}</li>
                            <li>- {!! __('about.partner_benefits_2') !!}</li>
                            <li>- {!! __('about.partner_benefits_3') !!}</li>
                        </ul>
                    </div>
                    <div class="benefit-block">
                        <div class="img"> <img src="/images/about2.svg" alt=""> </div>
                        <ul>
                            <li>- {{__('about.partner_benefits_4')}}</li>
                            <li>- {{__('about.partner_benefits_5')}}</li>
                        </ul>
                    </div>
                    <div class="benefit-block">
                        <div class="img"> <img src="/images/about3.svg" alt=""> </div>
                        <ul>
                            <li>- {!! __('about.partner_benefits_6') !!}</li>
                            <li>- {!! __('about.partner_benefits_7') !!}</li>
                                {!!  __('about.partner_benefits_8') !!}
                        </ul>
                    </div>
                    <div class="benefit-block">

                        <div class="img"> <img src="/images/about4.svg" alt=""> </div>
                        <ul>
                            <li>- {!!__('about.partner_benefits_9')!!}</li>
                            <li>- {!!__('about.partner_benefits_10')!!}</li>
                            <li>- {!!__('about.partner_benefits_11')!!}</li>
                        </ul>
                    </div>
                    <div class="benefit-block">
                        <div class="img"> <img src="/images/about5.svg" alt=""> </div>
                        <ul>
                            <li>- {!!__('about.partner_benefits_12')!!}</li>
                            <li>- {!!__('about.partner_benefits_13')!!}</li>
                            <li>- {!!__('about.partner_benefits_14')!!}</li>
                        </ul>
                    </div>
                    <div class="benefit-block">
                        <div class="img"> <img src="/images/about6.svg" alt=""> </div>
                        <ul>
                            <li>- {!! __('about.partner_benefits_15') !!}</li>
                            <li>- {!!__('about.partner_benefits_16')!!}</li>
                            <li>- {!!__('about.partner_benefits_17')!!}</li>
                        </ul>
                    </div>
                    <div class="benefit-block">
                        <div class="img"> <img src="/images/about7.svg" alt=""> </div>
                        <ul>
                            <li>- {!!__('about.partner_benefits_18')!!}</li>
                            @if(\Lang::has('about.partner_benefits_19'))
                                <li>- {!!__('about.partner_benefits_19')!!}</li>
                            @endif
                            <li>- {{__('about.partner_benefits_20') }}</li>
                        </ul>
                    </div>
                </div>
                <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/' . __('urls.partner'))}}" class="button btn-orange" target="_blank">{{strtoupper(__('about.become_a_partner'))}}</a>
            </div>
        </div>
    </div>

    <section class="photos">
        <img src="/images/jay-wennington-2065-unsplash.jpg" alt="" />
        <img src="/images/petr-sevcovic-594807-unsplash.jpg" alt="" />
        <img src="/images/mitchell-orr-179532-unsplash.jpg" alt="" />
        <img src="/images/aneta-pawlik-651610-unsplash.jpg" alt="" />
    </section>
</section>

<section class="team-section">
    <div class="container">
        <div class="row justify-content-center persone-block">
            <h3 class="team-caption">{{__('about.our_team')}}</h3>
            <div class="col-md-6 team-partner">
                <h3>Anne Bonvin</h3>
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

                <a class="btn-read-more collapsed" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span class="more">{{__('about.read_more')}}</span>
                    <span class="hide">{{__('about.read_less')}}</span>
                </a>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 team-partner-foto">
                <img src="/images/team2.jpg" alt="Anne confondatrice du concept Partybooker">
            </div>
        </div>
        <div class="row justify-content-center persone-block">
            <div class="col-sm-9 col-md-6 col-lg-4 team-partner-foto">
                <img src="/images/Caro_photo_2019.jpeg" alt="Caroline toujours à la recherche des bons plans à découvrir de Suisse romande">
            </div>
            <div class="col-md-6 team-partner right">
                <h3>Caroline Christen</h3>
                <p>{{__('about.cc1')}},</p>
                <p>{{__('about.cc2')}}</p>
                <div class="collapse" id="collapseExample2">
                    <p>{{__('about.cc3')}}</p>
                    <p>{{__('about.cc4')}}</p>
                    <p>{{__('about.cc5')}}!</p>
                    <p>{{__('about.cc6')}}!</p>
                </div>
                <a class="btn-read-more collapsed" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span class="more">{{__('about.read_more')}}</span>
                    <span class="hide">{{__('about.read_less')}}</span>
                </a>
                <!-- <a href="#" class="btn-read-more">read more</a> -->
            </div>
        </div>
    </div>

</section>

<div class="team-href-block">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h6 class="text-center">{{__('about.user_terms_and_conditions')}}</h6>
            <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/user-terms')}}" class="button btn-orange" target="_blank">{{__('about.view')}}</a>
        </div>
    </div>
</div>
@endsection
