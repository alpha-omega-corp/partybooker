@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <div class="container p-0 partner-dashboard shadow-lg">
        <div class="partner-dashboard-header">
            <img src="{{$partner->company->logo}}" alt="{{$partner->company->name}} logo"/>
            <h1>{{$partner->company->name}}</h1>
        </div>

        <div class="partner-dashboard-content">
            <div class="row align-items-start">
                <div class="col-xl-8 col-lg-7 col-md-12">
                    @include('app.partner.partials.adverts')
                </div>

                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="d-flex flex-column gap-4">
                        @include('app.partner.partials.statistics')
                        @include('app.partner.partials.plan')
                        @include('app.partner.partials.company')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
