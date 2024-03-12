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
                            <div class="d-flex align-items-center gap-4">
                                @if($company->logo)
                                    <div class="advert-logo">
                                        <img src="{{ asset($company->logo) }}" alt="{{$company->slogan}}"
                                             class="rounded">
                                    </div>
                                @endif
                                <div>
                                    <h1>
                                        {{ $advert->company->name }}
                                    </h1>
                                    <p>{{$advert->company->locale->first()->slogan}}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between">
                                <div class="advert-contacts">
                                    <x-partner.advert-contact
                                        :icon="$phoneIcon"
                                        tooltip="phone"
                                        content="{{$advert->company->contact->phone}}"
                                        type="tel"/>

                                    <x-partner.advert-contact
                                        :icon="$emailIcon"
                                        tooltip="email"
                                        content="{{$advert->company->contact->email}}"
                                        type="email"/>

                                    <x-partner.advert-contact
                                        :icon="$linkIcon"
                                        tooltip="website"
                                        content="{{$advert->company->social->www}}"
                                        type="web"/>

                                    <x-partner.advert-contact
                                        :icon="$pinIcon"
                                        tooltip="address"
                                        content="{{$advert->company->address->address}}"
                                        type="loc"/>
                                </div>

                                <div>
                                    <div class="d-flex gap-2">
                                        @include('app.listing.partials.request', [
                                            'advert' => $advert,
                                        ])

                                        @if(Auth::user() && Auth::user()->isAdmin())
                                            <a class="btn btn-admin"
                                               href="{{route('partner.dashboard', ['partner' => $advert->company->partner])}}">
                                                {{__('partner.dashboard')}}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="advert-description">
                            <div class="advert-text">
                                <p>
                                    {{$advert->company->locale->first()->description}}
                                </p>
                            </div>

                            <div class="advert-socials">
                                @foreach (NetworkType::values() as $network)
                                    <div class="tippy" data-tippy-content="{{ucfirst($network)}}">
                                        <a href="{{ $advert->company->social[$network] }}" target="_blank">
                                            <img src="{{Vite::social($network)}}"
                                                 alt="{{ $network }}"
                                                 width="24" height="24" class="star-img">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @include('app.listing.partials.company-adverts')
                        @include('app.listing.partials.advert')
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="row d-flex advert-gallery">
                            @foreach($advert->images()->get() as $image)
                                <div class="col-12 mb-4 gallery-image gal-img">
                                    <img src="{{$image->path}}" alt="...">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
