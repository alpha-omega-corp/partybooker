@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div class="partner-dashboard">

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

                        <x-card.index
                            :title="__('partner.adverts')"
                            :open="true"
                        >
                            <x-slot:body>
                                @include('app.partner.partials.adverts.show')
                            </x-slot:body>
                        </x-card.index>

                    </div>

                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="d-flex flex-column gap-3">

                            <x-card.index :title="__('partner.company')">
                                <x-slot:body>
                                    @include('app.partner.partials.company.show')
                                </x-slot:body>
                            </x-card.index>

                            <x-card.index :title="__('partner.plan')">
                                <x-slot:body>
                                    @include('app.partner.partials.plan')
                                </x-slot:body>
                            </x-card.index>

                        </div>
                    </div>
                </div>
            </div>
        </x-card.dashboard>

    </div>
@endsection
