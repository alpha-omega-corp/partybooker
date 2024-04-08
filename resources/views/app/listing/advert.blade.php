@php
    use App\Models\Category;
    use App\Models\AppPost;
    use Illuminate\Support\Facades\Auth;
@endphp

@extends('main')

@section('content')
    <div class="app-advert">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="advert-header">
                            <div class="d-flex gap-4">
                                @if($company->logo)
                                    <div class="advert-logo">
                                        <img src="{{ asset($company->logo) }}" alt="{{$company->slogan}}"
                                             class="rounded">
                                    </div>
                                @endif
                                <div>
                                    <h1 class="advert-title">
                                        {{ $advert->company->name }}
                                    </h1>
                                    <p>{{$advert->company->locale->first()->slogan}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between">
                                @include('app.listing.partials.advert.socials')
                                @include('app.listing.partials.advert.actions')
                            </div>
                        </div>


                        <div class="d-flex gap-4 mb-4">
                            @include('app.listing.partials.advert.contacts')
                            @include('app.listing.partials.advert.company-adverts')
                        </div>

                        @include('app.listing.partials.service')

                    </div>

                    <div class="col-lg-4 col-md-12">
                        @include('app.listing.partials.advert.gallery')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
