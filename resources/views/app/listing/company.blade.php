@extends('main')

@section('content')
    <x-card.panel :title="$company->name">
        <x-slot:breadcrumbs>
            {{Breadcrumbs::render('company', $company)}}
        </x-slot:breadcrumbs>

        <x-app.section>
            <div class="app-company">
                <div class="d-flex justify-content-center">
                    <div class="app-company-logo">
                        <img src="{{asset($company->logo)}}" alt="{{$company->name}}">
                    </div>
                </div>

                <div class="container">
                    <p class="app-company-slogan">{{$company->locale->slogan}}</p>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="app-company-container">
                        <div class="app-company-adverts">
                            <div>
                                @include('app.listing.partials.advert.other', [
                                    'advert' => $company->adverts->first(),
                                    'company' => $company,
                                    'showAll' => true,
                                    'center' => true,
                                    'otherTitle' => __('advert.others'),
                                    'radius' => true
                                ])
                            </div>
                        </div>

                        <div class="app-company-description">
                            <div class="d-flex align-items-end">
                                @include('app.listing.partials.advert.description', [
                                    'content' => $company->locale->description,
                                    'center' => true,
                                    'title' => 'description'
                                ])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-app.section>
    </x-card.panel>
@endsection
