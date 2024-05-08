@php
    use App\Models\Category;
    use App\Models\AppPost;
    use Illuminate\Support\Facades\Auth;
@endphp

@extends('main')

@section('content')
    <x-card.panel :title="__('listing.advert')" class="app-advert">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('advert', $advert)}}
        </x-slot:breadcrumbs>

        <x-app.section>
            <div class="app-advert-container">
                <div class="app-advert-details">

                    <div class="app-advert-thumbnail">
                        @include('app.listing.partials.advert.actions')

                        <img src="{{asset($advert->images()->thumbnail()->first()->path)}}"
                             alt="{{$advert->locale->title}}" class="thumbnail">

                        @include('app.listing.partials.advert.contacts')
                    </div>

                    @include('app.listing.partials.advert.service')

                    @include('app.listing.partials.service.partials.schedule', [
                       'center' => true,
                       'canOpen' => true,
                    ])

                    @include('app.listing.partials.service.partials.payments', [
                        'center' => true,
                        'canOpen' => true,
                    ])
                </div>

                <div class="app-advert-content">
                    <div class="advert-content-container">
                        @include('app.listing.partials.advert.description')
                        @include('app.listing.partials.service.partials.rates')
                        @include('app.listing.partials.advert.gallery')

                        @include('app.listing.partials.advert.other', [
                           'showAll' => false,
                           'otherTitle' => __('advert.others'),
                           'center' => false,
                           'radius' => true
                       ])
                        @include('app.listing.partials.advert.socials')

                    </div>
                </div>
            </div>


        </x-app.section>
    </x-card.panel>
@endsection
