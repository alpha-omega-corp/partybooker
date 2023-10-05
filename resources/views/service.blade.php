@extends('main-listings')

@section('page')
    page="listing"
@endsection

@section('content')
    <div class="partner">
        <div class="row m-4">
            <div class="col-md-2 order-md-first order-last">
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


                    <div class="d-flex flex-md-row flex-column">
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

                    <div class="row">

                        <div class="col-md-8 col-sm-12">
                            <x-tab.index :tabs="[
                                __('service.description'),
                                __('service.general_info'),
                                __('service.schedule'),
                                __('service.rates'),
                                __('service.video')]">
                                <!-- Description -->
                                <x-tab.item>
                                    <div>
                                        <h5 class="fw-bold text-uppercase">
                                            @if (app()->getLocale() == 'en')
                                                {{ $partner->en_slogan }}
                                            @else
                                                {{ $partner->fr_slogan }}
                                            @endif
                                        </h5>
                                        <p>
                                            @if (app()->getLocale() == 'en')
                                                {!! $partner->en_full_descr !!} ”
                                            @else
                                                {!! $partner->fr_full_descr !!} ”
                                            @endif
                                        </p>

                                        <p>
                                            @php
                                                $languages = [];
                                                if ($partner->language) {
                                                    foreach (json_decode($partner->language) ?? [] as $lang) {
                                                        if ($lang == 'other') {
                                                            continue;
                                                        }
                                                        $languages[] = __('partybooker-cp.' . trim($lang));
                                                    }
                                                }
                                            @endphp
                                            <span>{{ __('become_partner.languages') }}:</span>
                                            {{ implode(', ', $languages) }}{{ $partner->other_lang ? ', ' . $partner->other_lang : '' }}
                                        </p>
                                    </div>
                                </x-tab.item>

                                <!-- Information -->
                                <x-tab.item>
                                    <div>
                                        @foreach ($partner->services as $advert)
                                            @include('service-tabs.' . $advert->view_name . '.general', [
                                                'details' => $advert->service,
                                            ])
                                        @endforeach
                                    </div>
                                </x-tab.item>

                                <!-- Schedules -->
                                <x-tab.item>
                                    <div>
                                        @foreach ($partner->services as $advert)
                                            @include('service-tabs.' . $advert->view_name . '.schedule', [
                                                'details' => $advert->service,
                                            ])
                                        @endforeach
                                    </div>
                                </x-tab.item>

                                <!-- Rates -->
                                <x-tab.item>
                                    <div>
                                        @foreach ($partner->services as $advert)
                                            @include('service-tabs.' . $advert->view_name . '.rates', [
                                                'details' => $advert->service,
                                            ])
                                        @endforeach
                                    </div>
                                </x-tab.item>

                                <!-- Video -->
                                <x-tab.item>
                                    <div>
                                        @if ($partner->youtube)
                                                <?php
                                                $youtube = preg_replace('/watch\?v=/', 'embed/', $partner->youtube);
                                                $youtube = str_replace('https://youtu.be/', 'https://www.youtube.com/embed/', $youtube);
                                                ?>
                                            <iframe
                                                src="{{ $youtube }}"></iframe>
                                        @endif
                                        @if ($partner->vimeo)
                                            <iframe
                                                src="{{ str_replace('https://vimeo.com/', 'https://player.vimeo.com/video/', $partner->vimeo) }}"></iframe>
                                        @endif
                                    </div>

                                </x-tab.item>
                            </x-tab.index>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="row d-flex gallery">
                                <?php $locale = app()->getLocale(); ?>
                                @if(config('app.url') == 'http://localhost')
                                    @for ($i = 1; $i <= 20; $i++)
                                        <div class="col-6 mb-4 gallery-image gal-img">
                                            <img src="//via.placeholder.com/100x200/fc0?text=6" class="card-img" alt="...">
                                        </div>
                                    @endfor
                                @else
                                    @foreach ($images as $img)
                                        <div class="col-6 mb-4 gallery-image gal-img">
                                            <img src="{{ '/storage/images/thumbnails/' . $img->image_name }}"
                                                 alt="{{ $img['image_alt_' . $locale] }}" img-id="{{ $img->id }}"/>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </section>

                    <div class="d-flex stars">
                        @if (Auth::user() && Auth::user()->type != 'partner')
                            <span class="rating" data-service="{{ $partner->id_partner }}"
                                  data-user="{{ Auth::user()->email }}">
                            </span>
                        @else

                        @endif

                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $partner->average_rate)
                                <img src="{{Vite::image('star.svg')}}" alt="star" width="24" height="24"
                                     class="star-img">
                            @else
                                <img src="{{Vite::image('star.svg')}}" alt="star" width="24" height="24"
                                     class="star-img">
                            @endif
                        @endfor
                    </div>
            </div>
        </div>
    </div>


@endsection
