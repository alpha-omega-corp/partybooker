@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <div class="container partner-dashboard shadow-lg">
        <h1>{{$partner->company->name}}</h1>
        <hr>
        @include('app.partner.partials.statistics')
        <hr>

        <div class="row align-items-start">
            <div class="col-xl-8 col-lg-7 col-md-12">
                @include('app.partner.partials.adverts.show')
            </div>

            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="d-flex flex-column gap-4">
                    @include('app.partner.partials.plan')
                    @include('app.partner.partials.company')
                </div>
            </div>
        </div>
    </div>

@endsection
