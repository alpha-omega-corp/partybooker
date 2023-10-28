@php use App\Http\Middleware\LocaleMiddleware; @endphp
@extends('web.main')
@section('page')
    page="cp"
@endsection

@section('title')
    <title>Advert | {{ __('partybooker-cp.www')}}</title>
@endsection


@push('header')
    <link rel="stylesheet" href="{{ asset('/plugins/kendo/kendo.common.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/kendo/kendo.default.min.css') }}">
@endpush

@push('footer')
    <script src="{{ asset('/plugins/kendo/kendo.all.min.js') }}"></script>
@endpush

@section('content')
    <div class="profile-info">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <x-dashboard.card :title="__('partner.status')">
                    @include('web.partner.partials.dashboard.advert-status')
                </x-dashboard.card>
            </div>

            <div class="col-lg-8 col-md-12">
                <x-dashboard.card :title="__('partner.image')">
                    <div class="serviceDetails">
                        @include('web.partner.profile.category-images')
                    </div>
                </x-dashboard.card>
            </div>
        </div>

        @if ($user->partnerInfo->currentPlan &&
         $user->partnerInfo->categories->count() > 0 &&
          !in_array(strtolower($user->partnerInfo->currentPlan->name), ['basic', 'commission']))
            <x-dashboard.card :title="__('partner.service_details')">
                @include('web.partner.profile.service-details')
            </x-dashboard.card>
        @endif


        <x-dashboard.card title="Options">
            <x-slot:badge>
                <span class="badge text-bg-accent text-white">Active</span>
            </x-slot:badge>

            @include('web.partner.profile.plan-options')
        </x-dashboard.card>
    </div>

@endsection
