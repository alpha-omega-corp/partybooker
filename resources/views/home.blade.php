@extends('main')

@section('page')
    page="home"
@endsection

@section('title')
    @if (app()->getLocale() == 'fr')
        <title>Partybooker - Les meilleures idéés d'événements</title>
        <meta name="description"
              content="Retrouvez notre sélection des meilleures idées d'événement à faire en Suisse romande. Pour les familles, les sorties entre amis ou entreprise et même les mariages. ">
        <meta name="keywords" content="événements, idées d'événements">
    @else
        <title>Partybooker - Best Event Ideas</title>
        <meta name="description"
              content="Find our selection of the best event ideas to do in French-speaking Switzerland. For families, outings with friends or business and even weddings.">
        <meta name="keywords" content="events, event ideas">
    @endif
@endsection

@push('header')
    <script>
        function open(i) {
            document.getElementById(i).click();
        }
    </script>
@endpush

@section('content')
    <section class="home-section">
        <h1 class="display-2 text-center fw-bold text-uppercase p-5">
            {{__('main.title_home_h1')}}
        </h1>

        <div class="container">

            <section>
                @include('common.home-description')
            </section>

            <section class="top-services">
                @include('common.top-services')
            </section>

            <section class="home-about">
                @include('common.home-about')
            </section>

            <section class="categories">
                @include('common.home-categories')
            </section>
        </div>

    </section>
@endsection
