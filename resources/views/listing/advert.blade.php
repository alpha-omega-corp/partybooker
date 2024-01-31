@extends('main-listings')

@section('page')
    page="listing"
@endsection

@section('content')
    <div class="partner">
        <div class="container">
            <div class="service-header">
                <div class="d-flex flex-column">
                    <div class="d-flex partner-contacts">
                        <x-partner-info
                            icon="heroicon-o-phone"
                            tooltip="phone"
                            content="{{$advert->company->phone}}"
                            type="tel"/>

                        <x-partner-info
                            icon="heroicon-o-envelope"
                            tooltip="email"
                            content="{{$advert->company->email}}"
                            type="email"/>

                        <x-partner-info
                            icon="heroicon-o-globe-alt"
                            tooltip="website"
                            content="{{$advert->company->media->www}}"
                            type="web"/>

                        <x-partner-info
                            icon="heroicon-o-map-pin"
                            tooltip="address"
                            content="{{$advert->company->address}}"
                            type="loc"/>
                    </div>

                    <h1 class="display-3 fw-bold text-uppercase">
                        {{ $advert->company->name }}
                    </h1>

                    @if(\Illuminate\Support\Facades\Auth::user())
                        @if(\Illuminate\Support\Facades\Auth::user()->type === 'admin')
                            <a href="{{route('profile-advert-admin', ['id_partner' => $partner->id_partner])}}">
                                {{__('partner.dashboard')}}
                            </a>
                        @elseif(\Illuminate\Support\Facades\Auth::user()->id_partner === $partner->id_partner)
                            <a href="{{route('profile-advert', ['id_partner' => $partner->id_partner])}}">
                                {{__('partner.dashboard')}}
                            </a>
                        @endif
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="tab-index">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            @if($partner->logo)
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('/storage/logos/'.$partner->logo)}}" width="100"
                                         class="cp-company-logo">
                                </div>
                            @endif
                            <a class="btn btn-primary w-100 book-btn text-uppercase" data-bs-toggle="modal"
                               href="#contactModalToggle"
                               role="button">
                                {{ __('service.book_now')}}
                            </a>
                            <div class="d-flex">
                                <div class="partner-info-text">
                                    <blockquote class="fw-bold text-uppercase m-0 mt-2">
                                        {{$advert->company->locale->first()->slogan}}
                                    </blockquote>

                                    <div class="partner-description p-3">
                                        {{$advert->company->locale->first()->description}}
                                    </div>
                                </div>

                                <div class="d-flex flex-column m-2">
                                    @foreach (NetworkType::values() as $network)
                                        <div class="partner-socials" data-tippy-content="{{ucfirst($network)}}">
                                            <a href="{{ $advert->company->media[$network] }}" target="_blank">
                                                <img src="{{Vite::image($network . '.svg')}}"
                                                     alt="{{ $network }}"
                                                     width="24" height="24" class="star-img">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="row d-flex gallery">
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

            @if(false)
                @if(in_array('cat4_1', $subCategories) || in_array('cat4_2', $subCategories) || in_array('cat2_5', $subCategories))
                    <x-service.contact-modal
                        :partnerId="$partner->id"
                        :action="route('request.caterer')">

                        <x-slot:form>
                            @include('partial.service.caterer-form')
                        </x-slot:form>
                    </x-service.contact-modal>
                @else
                    <x-service.contact-modal
                        :partnerId="$partner->id"
                        :action="route('request.general')">

                        <x-slot:form>
                            @include('partial.service.form')
                        </x-slot:form>
                    </x-service.contact-modal>
                @endif
            @endif
        </div>
    </div>
    @include('common.footer')
@endsection
