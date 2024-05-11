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
                        @include('app.listing.partials.advert.socials')

                        <img src="{{asset($advert->images()->thumbnail()->first()->path)}}"
                             alt="{{$advert->locale->title}}" class="thumbnail">

                        @include('app.listing.partials.advert.contacts')
                        @include('app.listing.partials.advert.other', [
                            'advert' => $advert,
                            'company' => $advert->company,
                            'showAll' => false,
                            'center' => true,
                            'radius' => false,
                            'otherTitle' => __('advert.others'),
                        ])

                        @include('app.listing.partials.advert.actions')

                    </div>
                    @include('app.listing.partials.service.partials.schedule', [
                       'center' => true,
                       'canOpen' => false,
                    ])

                </div>

                <div class="app-advert-content">
                    <div class="advert-content-container">

                        <div class="advert-content-description">
                            @include('app.listing.partials.advert.description')
                        </div>

                        @include('app.listing.partials.advert.gallery')

                        <div class="advert-content-details">
                            @include('app.listing.partials.advert.service')

                            <div class="d-flex gap-4 flex-column">
                                @include('app.listing.partials.service.partials.rates')
                                @include('app.listing.partials.service.partials.payments', [
                                    'center' => true,
                                    'canOpen' => false,
                                ])
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </x-app.section>
    </x-card.panel>
@endsection
