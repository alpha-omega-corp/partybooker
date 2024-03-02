@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.dashboard :title="__('partner.dashboard')">
        <x-slot:header>
            <div class="partner-dashboard-header">
                @svg('heroicon-o-home-modern')
                <h4 class="fs-6 m-0">{{$partner->company->name}}</h4>
            </div>

        </x-slot:header>


        <div class="partner-dashboard-content">
            <div class="row align-items-start">
                <div class="col-xl-8 col-lg-7 col-md-12">
                    @include('app.partner.partials.adverts.show')
                </div>

                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="d-flex flex-column gap-4">
                        @include('app.partner.partials.statistics')
                        @include('app.partner.partials.plan')
                        @include('app.partner.partials.company.show')
                    </div>
                </div>
            </div>
        </div>
    </x-card.dashboard>
@endsection
