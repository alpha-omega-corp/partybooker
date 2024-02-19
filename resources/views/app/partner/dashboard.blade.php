@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <div class="container mt-5">

        <h1>{{$partner->company->name}}</h1>
        <hr>
        @include('app.partner.partials.statistics')
        <hr>

        @include('app.partner.partials.plan')
    </div>

@endsection
