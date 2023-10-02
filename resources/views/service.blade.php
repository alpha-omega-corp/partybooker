@extends('main-listings')

@section('page')
    page="listing"
@endsection

@section('content')
    <div class="partner">
        <div class="row">
            <div class="col-md-4">
                <div class="container">

                    @include('web.partial.back')
                    <hr>
                    <h3 class="text-uppercase fw-bold">Annonces similaire</h3>

                    <div class="adverts">
                        @foreach($adverts as $partner)
                                <x-partner-adverts :partner="$partner"/>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <section data-id="{{ $partner->id_partner }}">
                    <div class="partner-logo">
                        @if ($partner->logo)
                            <img src="{{ '/storage/logos/' . $partner->logo }}"
                                 alt="Rejoindre notre sélection pour augmenter votre chiffre d'affaire"
                                 class="logo"/>
                        @else
                            <img src="{{Vite::image('logoPB.png')}}" alt="logo" class="logo"/>
                        @endif
                    </div>
                    <div class="d-flex">
                        <h1 class="display-3 fw-bold text-uppercase mt-5">
                            @if (app()->getLocale() == 'en')
                                {{ $partner->en_company_name }}
                            @else
                                {{ $partner->fr_company_name }}
                            @endif
                        </h1>



                    </div>

                    <div class="d-flex stars">

                        @if (Auth::user() && Auth::user()->type != 'partner')
                            <span class="rating" data-service="{{ $partner->id_partner }}"
                                  data-user="{{ Auth::user()->email }}">
                            </span>
                        @else
                            <span class="rating-login">{{ __('service.leave_rating') }}</span>
                        @endif

                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $partner->average_rate)
                                <img src="{{Vite::image('star.svg')}}" alt="star" width="24" height="24"
                                     class="star-img">
                            @else
                                    <img src="{{Vite::image('star-outline-yellow.svg')}}" alt="star" width="24" height="24"
                                         class="star-img">
                            @endif
                        @endfor
                    </div>


                    <hr>

                    @if ($partner->is_commission)
                        <div class="details">
                            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/contacts') }}"
                               class="btn btn-orange">{{ __('service.contact') }}</a>
                        </div>
                    @else
                        <div class="d-flex">
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


                            <div class="d-flex justify-content-end w-100">
                                    <?php $networks = ['Facebook', 'Twitter', 'Instagram', 'Linkedin', 'Vimeo', 'Youtube']; ?>
                                @foreach ($networks as $network)
                                        <?php $lc = strtolower($network); ?>
                                    @if ($partner->$lc)
                                        <a class="m-2"
                                           style="text-decoration: underline; cursor: pointer; color:#007bc2; display: block"
                                           href="{{ $partner->$lc }}" target="_blank">
                                            <img src="{{Vite::image(strtolower($network) . '.svg')}}"
                                                 alt="{{ $network }}"
                                                 width="24" height="24" class="star-img">
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            @endif
                        </div>




                        <x-tab.index :tabs="[
            __('service.description'),
            __('service.general_info'),
            __('service.schedule'),
            __('service.rates'),
            __('service.video'),
        ]">
                            <!-- Description -->
                            <x-tab.item :title="$partner->slogan">

                                <div class="tab" id="description">
                    <span class="slogan">
                        @if (app()->getLocale() == 'en')
                            “ {{ $partner->en_slogan }} ”
                        @else
                            “ {{ $partner->fr_slogan }} ”
                        @endif
                    </span>
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

                                <div class="tab" id="general">
                                    @foreach ($partner->services as $advert)
                                        @include('service-tabs.' . $advert->view_name . '.general', [
                                            'details' => $advert->service,
                                        ])
                                    @endforeach
                                </div>

                            </x-tab.item>

                            <!-- Schedules -->
                            <x-tab.item>
                                <div class="tab" id="schedule">
                                    @foreach ($partner->services as $advert)
                                        @include('service-tabs.' . $advert->view_name . '.schedule', [
                                            'details' => $advert->service,
                                        ])
                                    @endforeach

                                </div>
                            </x-tab.item>

                            <!-- Rates -->
                            <x-tab.item>
                                <div class="tab" id="rates">
                                    @foreach ($partner->services as $advert)
                                        @include('service-tabs.' . $advert->view_name . '.rates', [
                                            'details' => $advert->service,
                                        ])
                                    @endforeach
                                </div>
                            </x-tab.item>

                            <!-- Video -->
                            <x-tab.item>
                                <div class="tab" id="video">
                                    @if ($partner->youtube)
                                            <?php
                                            $youtube = preg_replace('/watch\?v=/', 'embed/', $partner->youtube);
                                            $youtube = str_replace('https://youtu.be/', 'https://www.youtube.com/embed/', $youtube);
                                            ?>
                                        <iframe width="420" height="315" src="{{ $youtube }}" frameborder="0"
                                                allowfullscreen></iframe>
                                    @endif
                                    @if ($partner->vimeo)
                                        <iframe width="420" height="315"
                                                src="{{ str_replace('https://vimeo.com/', 'https://player.vimeo.com/video/', $partner->vimeo) }}"
                                                frameborder="0" allow="fullscreen"/>
                                    @endif
                                </div>
                            </x-tab.item>
                        </x-tab.index>
                </section>
            </div>


            <div class="row justify-content-center mt-30">
                <div class="col-md-3">
                    <div class="contact-block">


                    </div>
                </div>

                <div class="col-md-9">


                    @if (strtolower($partner->currentPlan->name) == 'basic')
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        <!-- Button trigger modal -->
                        <div class="d-flex">
                            <button type="button" data-type="claim" class="button claim-request btn-orange mr-2"
                                    data-toggle="modal" data-target="#claim">
                                {{ __('service.claim') }}
                            </button>

                            <button type="button" data-type="delete" class="button claim-request btn-orange"
                                    data-toggle="modal" data-target="#claim">{{ __('service.delete') }}</button>
                        </div>

                        <!-- Modal -->
                        <div class="standart-modal modal fade" id="claim" tabindex="-1" role="dialog"
                             aria-labelledby="claimLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">


                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <form id="claim-request-form" method="post"
                                              action="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/contacts/claim-requests') }}">
                                            @csrf
                                            <h3>{{ __('service.claim_account') }}</h3>
                                            <p>{{ __('service.claim_account_expl') }}</p>
                                            <input type="hidden" id="request-type" name="request_type">
                                            <input type="hidden" name="partner_id" value="{{ $partner->id }}">
                                            <input type="email" name="email" placeholder="{{ __('service.email') }}">
                                            <input type="text" name="phone" placeholder="{{ __('service.phone') }}">
                                            <button type="submit" id="fs"
                                                    class="button btn-orange">{{ __('service.submit_request') }}</button>
                                            <div style="color: black;" class="messages-list">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-12 gallery">
                    <?php $locale = app()->getLocale(); ?>
                    @foreach ($images as $img)
                        <div class="gal-img">
                            <img src="{{ asset('storage/images/thumbnails/' . $img->image_name) }}"
                                 alt="{{ $img['image_alt_' . $locale] }}" img-id="{{ $img->id }}"/>
                        </div>
                    @endforeach
                </div>
            </div>
            </section>
        </div>

    </div>
    </div>

    <section id="service" class="location location-form-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-7 ml-auto pl-md-5" id="request-form">
                    @if (strtolower($partner->currentPlan->name) == 'commission')
                        <form method="post"
                              action="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/request/partner') }}">
                            <h3>{{ __('service.contact_us') }}</h3>
                            <p>{{ __('service.contact_us_description') }}</p>
                            @csrf
                            <input type="hidden" name="partner_id" value="{{ $partner->id }}">
                            <input type="text" placeholder="{{ __('service.name') }}*" require name="name"
                                   required>
                            <input type="email" placeholder="{{ __('service.email') }}*" require name="email"
                                   required>
                            <input type="text" placeholder="{{ __('service.phone') }}*" require name="phone"
                                   required>
                            <input type="text" placeholder="{{ __('service.type_of_event') }}*" require
                                   name="event" required>
                            <input placeholder="{{ __('service.date_of_event') }}*" require name="event_date"
                                   type="text" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input placeholder="{{ __('service.alternative_date') }}?" name="alternative_date"
                                   type="text" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input type="text" placeholder="{{ __('service.amount_of_participants') }}*" require
                                   name="participant" required>
                            <button type="submit" class="btn-submit btn-transparent">{{ __('service.send') }}</button>
                        </form>
                    @elseif(\in_array('cat4_1', $subCategories) || \in_array('cat4_2', $subCategories) || \in_array('cat2_5', $subCategories))
                        <form class="form-contact" method="post"
                              action="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/request/caterer') }}">
                            <h3>{{ __('service.contact_us') }}</h3>
                            <p>{{ __('service.contact_us_description') }}</p>
                            @csrf
                            <input type="hidden" name="partner_id" value="{{ $partner->id }}">
                            <input type="text" placeholder="{{ __('service.name') }}*" require name="name"
                                   required>
                            <input type="email" placeholder="{{ __('service.email') }}*" require name="email"
                                   required>
                            <input type="text" placeholder="{{ __('service.phone') }}*" require name="phone"
                                   required>
                            <input type="text" placeholder="{{ __('service.type_of_event') }}*" require
                                   name="event" required>
                            <input placeholder="{{ __('service.date_of_event') }}*" name="event_date" require
                                   type="text" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                            <input placeholder="{{ __('service.alternative_date') }}?" name="alternative_date"
                                   type="text" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input type="text" placeholder="{{ __('service.amount_of_participants') }}*" require
                                   name="participant" required>
                            <input type="text" placeholder="{{ __('service.guests_profile') }}" name="guests">
                            <input type="text" placeholder="{{ __('service.language') }}*" require name="language"
                                   required>
                            <input type="text" placeholder="{{ __('service.geographic_zone') }}" name="zone">
                            <input type="text" placeholder="{{ __('service.approximate_budget') }}" name="budget">
                            <span class="description">{{ __('service.want_book_catering') }}*</span>
                            <div class="radio-block">
                                <input class="radio" type="radio" name="caterer" value="yes" id="caterer-yes"
                                       required> <label for="caterer-yes">{{ __('service.yes') }}</label>
                                <input class="radio" type="radio" name="caterer" value="no"
                                       id="caterer-no"><label for="caterer-no">{{ __('service.no') }}</label>
                                <input class="radio" type="radio" name="caterer" value="maybe" id="caterer-maybe">
                                <label for="caterer-maybe">{{ __('service.maybe') }}</label>
                            </div>
                            <button type="submit" class="btn-submit btn-transparent">{{ __('service.send') }}</button>
                        </form>
                    @else
                        <form class="form-contact" method="post"
                              action="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/request/general') }}">
                            <h3>{{ __('service.contact_us') }}</h3>
                            <p>{{ __('service.contact_us_description') }}</p>
                            @csrf
                            <input type="hidden" name="partner_id" value="{{ $partner->id }}">
                            <input type="text" placeholder="{{ __('service.name') }}*" name="name" required>
                            <input type="email" placeholder="{{ __('service.email') }}*" name="email" required>
                            <input type="text" placeholder="{{ __('service.phone') }}*" name="phone" required>
                            <input placeholder="{{ __('service.date_of_event') }}" type="text" name="event_date"
                                   onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input placeholder="{{ __('service.alternative_date') }}?" type="text"
                                   name="alternative_date" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <input type="text" placeholder="{{ __('service.amount_of_participants') }}*" require
                                   name="participant" required>
                            <textarea placeholder="{{ __('service.message') }}" name="message"></textarea>
                            <button type="submit" class="btn-submit btn-transparent">{{ __('service.send') }}</button>
                        </form>
                    @endif

                    <div class="form-contact" style="display: none">
                        <br>
                        <h2>{{ __('service.thank_you') }}!</h2>
                        <p>
                            {{ __('service.contact_soon') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="map" class="abs" data-lat="{{ $partner->lat }}" data-lon="{{ $partner->lon }}"
             data-code="{{ __('cantons.' . strtolower($partner->location_code) . '_loc') }}"
             data-address="{{ $partner->address }}"
             data-icon="{{ isset($partner->categories->first()->primaryCategory) ? $partner->categories->first()->primaryCategory->code : 'cat1' }}"
             @if (app()->getLocale() == 'en') data-name="{{ $partner->en_company_name }}"
             @else
                 data-name="{{ $partner->fr_company_name }}" @endif
             data-cat="{{ isset($partner->categories->first()->primaryCategory) ? $partner->categories->first()->primaryCategory->lang->name : '' }}"
             data-image="{{ asset('storage/images/' . $partner->main_img) }}">
        </div>

    </section>
@endsection

@if (strtolower($partner->currentPlan->name) == 'basic')
    @push('footer')
        <script type="text/javascript">
            $('button.claim-request').click(function (e) {
                var $type = $(this).attr('data-type');
                $("form#claim-request-form input#request-type").val($type);
            });

            $('form#claim-request-form').on('submit', function (e) {
                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');
                $('#fs').attr('disabled', true);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function (data) {
                        $('.messages-list').text(data.message);
                        window.location = window.location;
                    },
                    error: function (r) {
                        var data = JSON.parse(r.responseText);
                        $('.messages-list').text(data.message);
                        $('#fs').attr('disabled', false)
                    }
                });

                return false;
            });
        </script>
    @endpush
@endif

@push('footer')
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDpzw9SH97G5L9Af-dR5TeixK8OEPqocY&callback=initMap"
            type="text/javascript"></script>

    <script>
        $('form.form-contact').on('submit', function (e) {
            e.preventDefault();
            var form = $(this);
            $('button.btn-submit').attr('disabled', 'disabled');
            $.ajax({
                method: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                success: function (data) {
                    $('form.form-contact').remove();
                    $('div.form-contact').show();
                },
                error: function (r) {
                    $('button.btn-submit').attr('disabled', false);
                }
            });
        });
        var OFFSET_TOP = 40;

        function scrollTo(target) {
            var targetOffset = typeof target === 'number' ? target : $(target).offset().top + parseInt($(target).css(
                'padding-top'));


            if (targetOffset !== undefined) {
                window.scroll({
                    top: targetOffset - $('.header').outerHeight() + 200,
                    left: 0,
                    behavior: 'smooth'
                });
            }
        }

        $('.js-scroll-to').click(function (e) {
            e.preventDefault();
            var target = $(this).data('target') || $(this).attr('href') || 0;
            if (target) {
                scrollTo(target);
            }
        });
    </script>
@endpush
