@extends('main')

@section('title')
<title>Not found.. | {{ __('partybooker-cp.www')}}</title>
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
                    <h1>oops!</h1>
                </div>
            </div>
        </div>
        @include('web.common.social')
    </section>

    <section class="section-404">
        <div class="container">
            <div class="row justify-content-center">
                <img src="/images/404.svg" alt="" class="img-404">
                <div class="col-md-7 col-lg-5 sm-center">
                    <h3>The page You requested couldn’t be found</h3>
                    <a href="#" class="btn-orange">Take me back</a>
                </div>
            </div>
        </div>
    </section>
@endsection
