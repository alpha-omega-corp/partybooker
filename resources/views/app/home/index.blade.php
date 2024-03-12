@extends('main')

@section('title')

@endsection

@section('content')
    <div class="home">
        <!-- Heading -->
        <section class="home-welcome">
            @include('app.home.partials.welcome')
        </section>

        <!-- Description -->
        <section class="home-description">
            @include('app.home.partials.description')
        </section>

        <!-- Category -->
        <section class="home-category">
            @include('app.home.partials.category')
        </section>

        <!-- Tops -->
        <section class="home-top">
            @include('app.home.partials.top')
        </section>

        <!-- AppInformation -->
        <section class="home-information">
            @include('app.home.partials.information')
        </section>

        <!-- Comments -->
        <section class="home-comment">
            @include('app.home.partials.comment')
        </section>
    </div>
@endsection
