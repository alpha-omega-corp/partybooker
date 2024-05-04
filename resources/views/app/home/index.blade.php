@extends('main')

@section('title')
@endsection

@section('content')
    <div class="home">
        <!-- Heading -->
        <section class="home-welcome">
            @include('app.home.partials.home.welcome')
        </section>

        <!-- Description -->
        <section class="home-description">
            @include('app.home.partials.home.description')
        </section>

        <!-- Category -->
        <section class="home-category">
            @include('app.home.partials.home.category')
        </section>

        <!-- Tops -->
        <section class="home-top">
            @include('app.home.partials.home.top', [
                'showTitle' => true,
            ])

        </section>

        <!-- AppInformation -->
        <section class="home-information">
            @include('app.home.partials.home.information')
        </section>

        <!-- Comments -->
        <section class="home-comment">
            @include('app.home.partials.home.comment')
        </section>
    </div>
@endsection
