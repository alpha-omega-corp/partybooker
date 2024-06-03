@extends('main')

@section('content')
    <x-card.panel :title="__('listing.advert')" class="app-advert">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('advert', $advert)}}
        </x-slot:breadcrumbs>

        <x-app.section>
            <div class="app-advert-container">
                <div class="app-advert-details">
                    <div class="app-advert-request">
                        <x-modal.open
                            :background="true"
                            :name="ModalName::PARTNER_ADVERT_REQUEST"
                            :custom-color="AppColor::BLUE"
                            :singleton="true"
                            :fit="true"
                            :center="true"
                            :text="__('advert.request')"
                        />

                        @include('app.listing.partials.request', [
                            'advert' => $advert,
                        ])
                    </div>
                    <div class="app-advert-thumbnail">
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
                            @include('app.listing.partials.advert.description', [
                                'content' => $advert->locale->description,
                                'center' => false,
                            ])
                        </div>

                        @include('app.listing.partials.advert.gallery')

                        <div class="advert-content-details">
                            @include('app.listing.partials.advert.service')

                            <div class="d-flex gap-4 flex-column w-100">
                                @include('app.listing.partials.service.partials.rates')
                                @include('app.listing.partials.service.partials.payments', [
                                    'center' => false,
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
