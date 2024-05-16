@extends('management')

@section('content')
    <x-card.panel
        :title="__('nav.profile')"
        :color="AppColor::PINK"
        class="partner-dashboard"
    >
        <x-slot:breadcrumbs>
            @if(Auth::user()->isAdmin())
                {{ Breadcrumbs::render('admin.profile', $partner->company) }}
            @endif
        </x-slot:breadcrumbs>
        <x-app.section>
            <div class="d-flex flex-column gap-4">
                @include('app.partner.partials.company.show')
                @include('app.partner.partials.adverts.show')
                @include('app.partner.partials.plan.show')
            </div>
        </x-app.section>
    </x-card.panel>
@endsection
