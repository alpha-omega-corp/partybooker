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

@section('content')
    <section class="home-section">
        <section class="home-categories">
            @include('home.main')
        </section>

        <section class="top-services">
            @include('home.top-services')
        </section>
    </section>
    
    <section class="accordion-section">
        @include('home.about')
    </section>

    <section class="mb-5 mt-5">
        @include('home.comments')
    </section>

@endsection
