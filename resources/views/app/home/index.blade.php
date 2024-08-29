@extends('main')

@section('content')
    <div class="home">

        @include('app.home.partials.home.welcome')

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
