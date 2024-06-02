@extends('main')

@section('content')
    <div class="home">
        @include('app.home.partials.home.welcome')
        @include('app.home.partials.home.category')
        @include('app.home.partials.home.top', [
            'showTitle' => true,
        ])

        @include('app.home.partials.home.information')
        @include('app.home.partials.home.comment')
    </div>
@endsection
