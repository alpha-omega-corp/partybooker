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

    <section class="home-top">
        <div class="home-top-opacity">
            <div class="home-top-container">
                <p>{{__('main.welcome')}}</p>

                <h1 class="display-1">
                    <span>Party</span>
                    <br>
                    <span>Booker.ch</span>
                </h1>
            </div>
        </div>
    </section>

    <div class="home-main-container">

        <section>
            <div class="container">
                <div class="home-ideas">
                    <p class="text-pink fw-bold text-uppercase fs-4">{{__('main.ideas-title')}}</p>
                    <h2 class="text-standard fw-bold text-uppercase display-5">{{__('main.ideas-subtitle')}}</h2>

                    <p class="fw-bold text-gray fs-6">
                        <span>{{__('main.ideas-text-1')}}</span>
                        <span>{{__('main.ideas-text-2')}}</span>
                        <span>{{__('main.ideas-text-3')}}</span>
                        <span>{{__('main.ideas-text-4')}}</span>
                    </p>
                </div>
            </div>
        </section>

        <section class="categories">
            <div class="items d-flex justify-content-center">

                <div>
                    <h2 class="fw-bold text-uppercase text-center d-none">
                        {{ __('main.category')}}
                    </h2>

                    <div class="row d-sm-inline-flex justify-content-center mt-5 mb-5">
                        @foreach ($categories as $key => $category)
                            @php
                                $listKey = 'list-category-' . $key;
                                $listId = $listKey . '-list';
                            @endphp

                            <x-home.category :category="$category"/>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>
    </div>

    <section class="top-services">
        @include('home.top-services')
    </section>

    <section class="accordion-section">
        @include('home.about')
    </section>

    <section>
        @include('home.comments')
    </section>
@endsection
