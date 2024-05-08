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
            <div class="d-flex flex-column gap-4">
                @include('app.partner.partials.company.show')
                @include('app.partner.partials.adverts.show')
                @include('app.partner.partials.plan.show')
            </div>

        </x-app.section>

    </x-card.panel>
@endsection
