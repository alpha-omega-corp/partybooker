@extends('main-listings')

@section('page')
    page="listing"
@endsection

@section('content')
    <div class="partner">


        <div class="container">
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
                <hr>

                <div class="partner-languages d-flex justify-content-start">
                    <p>
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

                <hr>


                <div class="row">
                    @php
                        $cats = $partner->services->map(function ($item) {
                            return __('service.' . $item->view_name);
                        });
                    @endphp

                    <div class="tab-index">
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <a class="btn btn-primary w-100" data-bs-toggle="modal" href="#contactModalToggle"
                                   role="button">
                                    {{ __('service.book_now')}}
                                </a>

                                <br>
                                <div class="p-2">
                                    <blockquote class="fw-bold text-uppercase m-0">
                                        @if (app()->getLocale() == 'en')
                                            {{ $partner->en_slogan }}
                                        @else
                                            {{ $partner->fr_slogan }}
                                        @endif
                                    </blockquote>

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


                                    <p class="partner-description">
                                        @if (app()->getLocale() == 'en')
                                            {!! $partner->en_full_descr !!}
                                        @else
                                            {!! $partner->fr_full_descr !!}
                                        @endif
                                    </p>


                                </div>


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

                            <div class="col-lg-4 col-md-12">
                                <div>
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
                                </div>
                                <br>
                                <div class="row d-flex gallery">
                                    <?php $locale = app()->getLocale(); ?>
                                    @if(config('app.url') == 'http://localhost')
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


                @if (strtolower($partner->currentPlan->name) == 'commission')
                    <x-modal
                        name="contactModalToggle"
                        :action="url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/request/partner')"
                        :title="__('service.contact_us')"
                        :submit="__('service.send')">
                        <p class="book-text">{{ __('service.contact_us_description') }}</p>
                        <hr>
                        @csrf

                        <input type="hidden" name="partner_id" value="{{ $partner->id }}">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon1">
                                @svg('heroicon-o-user-circle')
                            </span>
                            <input
                                type="text"
                                name="name"
                                required
                                class="form-control"
                                placeholder="{{ __('service.name') }}"
                                aria-label="__('service.name')"
                                aria-describedby="contact-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon2">
                                @svg('heroicon-o-envelope')
                            </span>
                            <input
                                type="email"
                                required
                                name="email"
                                placeholder="{{ __('service.email') }}"
                                class="form-control"
                                aria-label="{{ __('service.email') }}"
                                aria-describedby="contact-addon2">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon3">
                                @svg('heroicon-m-device-phone-mobile')
                            </span>
                            <input
                                type="text"
                                required
                                placeholder="{{ __('service.phone') }}"
                                class="form-control"
                                name="phone"
                                aria-label="{{ __('service.phone') }}"
                                aria-describedby="contact-addon3">
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon4">
                                @svg('heroicon-o-clipboard-document-list')
                            </span>
                            <input
                                type="text"
                                class="form-control"
                                name="event"
                                required
                                placeholder="{{ __('service.type_of_event') }}"
                                aria-label="{{ __('service.type_of_event') }}"
                                aria-describedby="contact-addon4">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon5">
                                @svg('heroicon-o-calendar-days')
                            </span>
                            <input
                                type="text"
                                class="form-control"
                                name="event_date"
                                required
                                placeholder="{{ __('service.date_of_event') }}"
                                aria-label="{{ __('service.date_of_event') }}"
                                onfocus="(this.type='date')" onblur="(this.type='text')"
                                aria-describedby="contact-addon5">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon6">
                                @svg('heroicon-s-calendar')
                            </span>
                            <input
                                type="text"
                                class="form-control"
                                name="alternative_date"
                                required
                                placeholder="{{ __('service.alternative_date') }}"
                                aria-label="{{  __('service.alternative_date') }}"
                                onfocus="(this.type='date')" onblur="(this.type='text')"
                                aria-describedby="contact-addon6">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon7">
                                @svg('heroicon-o-user-group')
                            </span>
                            <input
                                type="text"
                                class="form-control"
                                name="participant"
                                required
                                placeholder="{{ __('service.amount_of_participants') }}"
                                aria-label="{{ __('service.amount_of_participants') }}"
                                aria-describedby="contact-addon7">
                        </div>
                    </x-modal>

                @elseif(in_array('cat4_1', $subCategories) || in_array('cat4_2', $subCategories) || in_array('cat2_5', $subCategories))

                    <x-modal
                        name="contactModalToggle"
                        :action="url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/request/caterer')"
                        :title="__('service.contact_us')"
                        :submit="__('service.send')">


                        <p>{{ __('service.contact_us_description') }}</p>
                        @csrf
                        <input type="hidden" name="partner_id" value="{{ $partner->id }}">
                        <input type="text" placeholder="{{ __('service.name') }}*" require
                               name="name"
                               required>
                        <input type="email" placeholder="{{ __('service.email') }}*" require
                               name="email"
                               required>
                        <input type="text" placeholder="{{ __('service.phone') }}*" require
                               name="phone"
                               required>
                        <input type="text" placeholder="{{ __('service.type_of_event') }}*" require
                               name="event" required>
                        <input placeholder="{{ __('service.date_of_event') }}*" name="event_date"
                               require
                               type="text" onfocus="(this.type='date')" onblur="(this.type='text')"
                               required>
                        <input placeholder="{{ __('service.alternative_date') }}?"
                               name="alternative_date"
                               type="text" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <input type="text" placeholder="{{ __('service.amount_of_participants') }}*"
                               require
                               name="participant" required>
                        <input type="text" placeholder="{{ __('service.guests_profile') }}"
                               name="guests">
                        <input type="text" placeholder="{{ __('service.language') }}*" require
                               name="language"
                               required>
                        <input type="text" placeholder="{{ __('service.geographic_zone') }}"
                               name="zone">
                        <input type="text" placeholder="{{ __('service.approximate_budget') }}"
                               name="budget">
                        <span class="description">{{ __('service.want_book_catering') }}*</span>
                        <div class="radio-block">
                            <input class="radio" type="radio" name="caterer" value="yes"
                                   id="caterer-yes"
                                   required> <label
                                for="caterer-yes">{{ __('service.yes') }}</label>
                            <input class="radio" type="radio" name="caterer" value="no"
                                   id="caterer-no"><label
                                for="caterer-no">{{ __('service.no') }}</label>
                            <input class="radio" type="radio" name="caterer" value="maybe"
                                   id="caterer-maybe">
                            <label for="caterer-maybe">{{ __('service.maybe') }}</label>
                        </div>

                    </x-modal>
                @else
                    <x-modal
                        name="contactModalToggle"
                        :action="url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/request/general')"
                        :title="__('service.book_now')"
                        :submit="__('service.send')">

                        <h3>{{ __('service.contact_us') }}</h3>
                        <p>{{ __('service.contact_us_description') }}</p>
                        @csrf
                        <input type="hidden" name="partner_id" value="{{ $partner->id }}">
                        <input type="text" placeholder="{{ __('service.name') }}*"
                               name="name"
                               required>
                        <input type="email" placeholder="{{ __('service.email') }}*"
                               name="email"
                               required>
                        <input type="text" placeholder="{{ __('service.phone') }}*"
                               name="phone"
                               required>
                        <input placeholder="{{ __('service.date_of_event') }}" type="text"
                               name="event_date"
                               onfocus="(this.type='date')" onblur="(this.type='text')">
                        <input placeholder="{{ __('service.alternative_date') }}?"
                               type="text"
                               name="alternative_date" onfocus="(this.type='date')"
                               onblur="(this.type='text')">
                        <input type="text"
                               placeholder="{{ __('service.amount_of_participants') }}*"
                               require
                               name="participant" required>
                        <textarea placeholder="{{ __('service.message') }}"
                                  name="message"></textarea>

                    </x-modal>
                @endif
            </section>
        </div>
    </div>
@endsection
