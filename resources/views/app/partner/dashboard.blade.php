@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel
        :title="$partner->company->name"
        class="partner-dashboard"
    >
        <div class="row align-items-start">
            <div class="col-xl-8 col-lg-7 col-md-12">
                @include('app.partner.partials.company.show')

                <x-card.index
                    :title="__('partner.adverts')"
                    :can-open="false"
                >
                    @include('app.partner.partials.adverts.show')
                </x-card.index>

            </div>

            <div class="col-xl-4 col-lg-5 col-md-12">
                @include('app.partner.partials.plan')
            </div>
        </div>
    </x-card.panel>
@endsection
