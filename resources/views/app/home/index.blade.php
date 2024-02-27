@extends('main')

@section('title')

@endsection

@section('content')
    <div class="home">
        <section class="home-welcome">
            @include('app.home.partials.welcome')
        </section>

        <section class="home-description">
            @include('app.home.partials.description')
        </section>

        <section class="home-top">
            @include('app.home.partials.top')
        </section>

        <section class="home-information">
            @include('app.home.partials.information')
        </section>

        <section class="home-comment">
            @include('app.home.partials.comment')
        </section>
    </div>
@endsection
