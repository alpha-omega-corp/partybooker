@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('main')

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <x-card.panel
        :title="$partner->company->name"
        :color="AppColor::PINK"
        class="partner-dashboard"
    >
        <x-app.section>
            <div class="partner-dashboard-main">
                @include('app.partner.partials.adverts.show')

                <div class="w-50">
                    @include('app.partner.partials.plan.show')
                    @include('app.partner.partials.company.show')
                    @include('app.partner.partials.socials.show')
                </div>
            </div>
        </x-app.section>

    </x-card.panel>
@endsection
