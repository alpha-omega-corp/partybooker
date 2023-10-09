@extends('main-listings')

@section('page')
    page="listing"
@endsection

@section('content')
    <div class="partner">
        <div class="row m-4">
            <div class="col-md-2 order-md-first order-last">
                <div class="">
                    <div class="side">
                        <x-back-page :tooltip="__('service.back')"/>
                        <h3 class="text-uppercase text-center fw-bold text-nowrap mt-4">
                            Annonces similaire
                        </h3>

                        <hr>

                        <div class="adverts">
                            @foreach($adverts as $ad)
                                <x-partner-adverts :partner="$ad"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-sm-12 p-0">
                <section data-id="{{ $partner->id_partner }}" class="partner-details">

                    <div class="partner-logo">
                        @if ($partner->logo)
                            <img src="{{ '/storage/logos/' . $partner->logo }}"
                                 alt="Rejoindre notre sélection pour augmenter votre chiffre d'affaire"
                                 class="logo"/>
                        @else
                            <img src="{{Vite::image('logoPB.png')}}" alt="logo" class="logo"/>
                        @endif
                    </div>

                    <div>
                        <h1 class="display-3 fw-bold text-uppercase mt-5">
                            @if (app()->getLocale() == 'en')
                                {{ $partner->en_company_name }}
                            @else
                                {{ $partner->fr_company_name }}
                            @endif
                        </h1>
                    </div>

                    <div class="d-flex">
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
                    <br>


                    <div class="d-flex partner-contacts">
                        @if ($partner->is_commission)
                            <div class="details">
                                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/contacts') }}"
                                   class="btn btn-orange">{{ __('service.contact') }}</a>
                            </div>
                        @else
                            <x-partner-info
                                icon="heroicon-o-phone"
                                tooltip="Company Phone"
                                content="{{$partner->company_phone}}"
                                type="tel"/>

                            <x-partner-info
                                icon="heroicon-o-envelope"
                                tooltip="Company Email"
                                content="{{$partner->user->email}}"
                                type="email"/>

                            <x-partner-info
                                icon="heroicon-o-globe-alt"
                                tooltip="Company Website"
                                content="{{$partner->fr_company_name}}"
                                type="web"/>

                            <x-partner-info
                                icon="heroicon-o-map-pin"
                                tooltip="Company Location"
                                content="{{$partner->address}}"
                                type="loc"/>
                        @endif
                    </div>

                    <hr>

                    @if (Auth::user() && Auth::user()->type != 'partner')
                        <span class="rating" data-service="{{ $partner->id_partner }}"
                              data-user="{{ Auth::user()->email }}">
                                                    </span>
                    @else

                    @endif

                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $partner->average_rate)
                            <img src="{{Vite::image('star.svg')}}" alt="star" width="20" height="20"
                                 class="star-img">
                        @else
                            <img src="{{Vite::image('star.svg')}}" alt="star" width="20" height="20"
                                 class="star-img">
                        @endif
                    @endfor

                    <div class="row">


                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <blockquote class="fw-bold text-uppercase m-0">
                                            @if (app()->getLocale() == 'en')
                                                {{ $partner->en_slogan }}
                                            @else
                                                {{ $partner->fr_slogan }}
                                            @endif
                                        </blockquote>
                                    </h5>

                                    <p class="partner-description">
                                        @if (app()->getLocale() == 'en')
                                            {!! $partner->en_full_descr !!}
                                        @else
                                            {!! $partner->fr_full_descr !!}
                                        @endif
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <div class="partner-languages d-flex justify-content-start">
                                <p class="p-1">
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
                                </p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row">
                        @php
                            $cats = $partner->services->map(function ($item) {
                                return __('service.' . $item->view_name);
                            });
                        @endphp

                        <div class="tab-index">
                            <x-partner-category-tab :tabs="$cats">
                                @foreach ($partner->services as $advert)
                                    <x-tab.item>
                                        <div class="partner-advert">
                                            <x-tab.index :tabs="[
                                                    __('service.general_info'),
                                                    __('service.schedule'),
                                                    __('service.rates'),
                                                    __('service.video')]" :icons="[
                                                    'heroicon-o-information-circle',
                                                    'heroicon-o-clock',
                                                    'heroicon-o-currency-dollar',
                                                    'heroicon-o-video-camera',
                                                    ]">

                                                <!-- Information -->
                                                <x-tab.item>
                                                    @include('service-tabs.' . $advert->view_name . '.general', [
                                                        'details' => $advert->service,
                                                    ])
                                                </x-tab.item>

                                                <x-tab.item>

                                                    @include('service-tabs.' . $advert->view_name . '.schedule', [
                                                        'details' => $advert->service,
                                                    ])

                                                </x-tab.item>

                                                <x-tab.item>
                                                    @include('service-tabs.' . $advert->view_name . '.rates', [
                                                        'details' => $advert->service,
                                                    ])
                                                </x-tab.item>

                                                <x-tab.item>
                                                    <div class="d-flex flex-column">
                                                        @if ($partner->youtube)
                                                                <?php
                                                                $youtube = preg_replace('/watch\?v=/', 'embed/', $partner->youtube);
                                                                $youtube = str_replace('https://youtu.be/', 'https://www.youtube.com/embed/', $youtube);
                                                                ?>
                                                            <iframe src="{{ $youtube }}"></iframe>
                                                        @endif
                                                        @if ($partner->vimeo)
                                                            <iframe
                                                                src="{{ str_replace('https://vimeo.com/', 'https://player.vimeo.com/video/', $partner->vimeo) }}">
                                                            </iframe>
                                                        @endif
                                                    </div>

                                                </x-tab.item>
                                            </x-tab.index>
                                        </div>
                                    </x-tab.item>
                                @endforeach
                            </x-partner-category-tab>
                        </div>
                    </div>

                    <div class="row d-flex gallery">
                        <?php $locale = app()->getLocale(); ?>
                        @if(config('app.url') == 'http://localhost')
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="col-md-4 col-sm-6 mb-4 gallery-image gal-img">
                                    <img src="//via.placeholder.com/500x500/fc0?text=6" alt="...">
                                </div>
                            @endfor
                        @else
                            @foreach ($images as $img)
                                <div class="col-md-4 col-sm-6 mb-4 gallery-image gal-img">
                                    <img src="{{ '/storage/images/thumbnails/' . $img->image_name }}"
                                         alt="{{ $img['image_alt_' . $locale] }}" img-id="{{ $img->id }}"/>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </section>


            </div>
        </div>
    </div>

@endsection
