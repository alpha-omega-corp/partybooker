@extends('main-listings')

@section('page')
    page="listing"
@endsection

@section('content')
    <div class="partner">
        <div class="container">
            <section data-id="{{ $partner->id_partner }}" class="partner-details">
                <div class="service-header">
                    <div class="d-flex flex-column">
                        <div class="d-flex partner-contacts">
                            <x-partner-info
                                icon="heroicon-o-phone"
                                tooltip="phone"
                                content="{{$partner->company_phone}}"
                                type="tel"/>

                            <x-partner-info
                                icon="heroicon-o-envelope"
                                tooltip="email"
                                content="{{$partner->user->email}}"
                                type="email"/>

                            <x-partner-info
                                icon="heroicon-o-globe-alt"
                                tooltip="website"
                                content="{{$partner->www}}"
                                type="web"/>

                            <x-partner-info
                                icon="heroicon-o-map-pin"
                                tooltip="address"
                                content="{{$partner->address}}"
                                type="loc"/>
                        </div>

                        <h1 class="display-3 fw-bold text-uppercase">
                            @if (app()->getLocale() == 'en')
                                {{ $partner->en_company_name }}
                            @else
                                {{ $partner->fr_company_name }}
                            @endif
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
                    @php
                        $cats = $partner->services->map(function ($item) {
                            return __('service.' . $item->view_name);
                        });
                    @endphp

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
                                            @if (app()->getLocale() == 'en')
                                                {{ $partner->en_slogan }}
                                            @else
                                                {{ $partner->fr_slogan }}
                                            @endif
                                        </blockquote>

                                        <div class="partner-description p-3">
                                            @if (app()->getLocale() == 'en')
                                                {!! $partner->en_full_descr !!}
                                            @else
                                                {!! $partner->fr_full_descr !!}
                                            @endif
                                        </div>
                                    </div>


                                    <div class="d-flex flex-column m-2">
                                        <?php $networks = ['Instagram', 'Facebook', 'Linkedin', 'Youtube', 'Twitter', 'Vimeo']; ?>
                                        @foreach ($networks as $network)
                                                <?php $lc = strtolower($network); ?>
                                            @if ($partner->$lc)
                                                <div class="partner-socials" data-tippy-content="{{ucfirst($network)}}">
                                                    <a
                                                        href="{{ $partner->$lc }}" target="_blank">
                                                        <img src="{{Vite::image(strtolower($network) . '.svg')}}"
                                                             alt="{{ $network }}"
                                                             width="24" height="24" class="star-img">
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="rating-card">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="rating-stars">
                                        <span
                                            class="rating-text text-uppercase">{{__('main.rating-based') . ' ' . $rates . ' ' . __('main.rating')}}</span>

                                            <ul class="stars service-page">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <=$partner->average_rate)
                                                        @include('common.star-selected')
                                                    @else
                                                        <li class="star">
                                                            @svg('heroicon-o-star')
                                                        </li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </div>

                                        <div class="d-none">
                                            @if (Auth::user())
                                                <button role="button" class="rating btn btn-primary"
                                                        data-service="{{$partner->id_partner}}"
                                                        data-user="{{Auth::user()->email}}">
                                                    Submit
                                                </button>
                                            @else
                                                <a data-bs-toggle="modal" class="text-white rating"
                                                   href="#loginModalToggle" role="button">
                                                    <button role="button" class=" btn btn-accent">
                                                        {{ __('main.login') }}
                                                    </button>
                                                </a>
                                            @endif
                                        </div>

                                        <span class="rating-message"></span>
                                    </div>
                                </div>

                                <x-partner-category-tab :tabs="$cats">
                                    <x-slot:title>
                                        <div class="partner-languages d-flex justify-content-end">

                                            @php
                                                $languages = [];
                                                $immutableLanguages = [];
                                                if ($partner->language) {
                                                    foreach (json_decode($partner->language) ?? [] as $lang) {
                                                        if ($lang == 'other') {
                                                            continue;
                                                        }
                                                        $languages[] = __('partybooker-cp.' . trim($lang));
                                                        $immutableLanguages[] = trim($lang);
                                                    }
                                                }
                                            @endphp

                                            @foreach($immutableLanguages as $key => $locale)
                                                <img src="{{Vite::image(strtolower($locale) . '.svg')}}"
                                                     alt="{{ strtolower($locale) }}"
                                                     width="24" height="24" class="flag"
                                                     data-tippy-content="{{strtolower(__('service.speaks_lang') . ' ' . $languages[$key])}}">
                                            @endforeach

                                            {{ $partner->other_lang ? ', ' . $partner->other_lang : '' }}
                                        </div>
                                    </x-slot:title>
                                    @foreach ($services as $iterator => $advert)
                                        <x-tab.item>
                                            <x-partner.service-details :advert="$advert" :partner="$partner"
                                                                       :iterator="$iterator"/>
                                        </x-tab.item>
                                    @endforeach
                                </x-partner-category-tab>
                            </div>

                            <div class="col-lg-4 col-md-12">

                                <!-- Rating -->
                                <div class="row d-flex gallery">
                                    <?php $locale = app()->getLocale(); ?>
                                    @if(!$images->count())
                                        @for ($i = 1; $i <= 10; $i++)
                                            <div class="col-12 mb-4 gallery-image gal-img">
                                                <img src="//via.placeholder.com/500x500/fc0?text=6" alt="...">
                                            </div>
                                        @endfor
                                    @else
                                        @foreach ($images as $img)
                                            <div class="col-md-4 col-md-12 mb-4 gallery-image gal-img">
                                                <img src="{{ '/storage/images/thumbnails/' . $img->image_name }}"
                                                     alt="{{ $img['image_alt_' . $locale] }}" img-id="{{ $img->id }}"/>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
            </section>
        </div>
    </div>
    @include('common.footer')
@endsection
