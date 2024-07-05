@extends('main')

@section('content')
    <x-card.panel :title="__('nav.partner')" class="app-advert">

        <div class="app-advert-container">

            <div class="row">
                <div class="col-xl-4 col-lg-12">
                    <div class="app-advert-details">
                        <div class="app-advert-request">
                            @include('app.listing.partials.advert.actions')


                        </div>
                        <div class="app-advert-thumbnail">

                            @include('app.listing.partials.advert.contacts')
                            @include('app.listing.partials.advert.other', [
                                'advert' => $advert,
                                'company' => $advert->company,
                                'showAll' => false,
                                'center' => true,
                                'radius' => false,
                                'otherTitle' => 'services',
                            ])


                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-12">
                    <div class="app-advert-content">
                        <div class="advert-content-container">
                            <div class="advert-content-description">
                                @include('app.listing.partials.advert.description', [
                                    'content' => $advert->locale->description,
                                    'center' => false,

                                    'title' => $advert->company->name
                                ])
                            </div>

                            @include('app.listing.partials.advert.gallery')
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </x-card.panel>
@endsection
