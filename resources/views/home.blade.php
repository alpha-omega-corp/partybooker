@extends('main')

@section('page')
    page="home"
@endsection

@section('title')
    @if (app()->getLocale() == 'fr')
        <title>Partybooker - Les meilleures idéés d'événements</title>
        <meta name="description"
            content="Retrouvez notre sélection des meilleures idées d'événement à faire en Suisse romande. Pour les familles, les sorties entre amis ou entreprise et même les mariages. ">
        <meta name="keywords" content="événements, idées d'événements">
    @else
        <title>Partybooker - Best Event Ideas</title>
        <meta name="description"
            content="Find our selection of the best event ideas to do in French-speaking Switzerland. For families, outings with friends or business and even weddings.">
        <meta name="keywords" content="events, event ideas">
    @endif
@endsection

@section('content')
    <section class="header">
        @include('common.header-nav')
        <div class="cover abs">
            <img src="/images/home-header-bg.jpg" class="bg abs"
                alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
        </div>

        <div class="container">
            <h1>{{ __('main.title_home_h1') }}</h1>
            <h2>{{ __('main.title_home_h2') }}</h2>

            <br>
            <div class="row justify-content-center">
                <div class="col-md-6 text-justify left-info-block">{{ __('main.left-info-block') }}</div>
                <div class="col-md-6 text-justify right-info-block">{{ __('main.right-info-block') }}</div>
            </div>
        </div>

        @include('common.social')
    </section>

    @include('common.top-services')

    <section class="categories-cards">
        <label class="ctg-card card-one">
            <input type="checkbox">
            <div class="flip-card">
                <img src="/images/flip1.jpg"
                    alt="Les meilleures salles de réception pour mariage séléctionnées par Partybooker">
                <div class="front-flip">
                    <h5>{{ $menuCats[0]->lang->name }}</h5>
                </div>
                <div class="back-flip">
                    <ul>
                        @foreach ($menuCats[0]->subcategories as $sub)
                            <li>
                                <a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[0]->lang->slug . '/' . $sub->lang->slug) }}">{{ $sub->lang->name }}</a>
                            </li>
                        @endforeach
                        <li>
                            <a
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[0]->lang->slug) }}">{{ __('main.view_all') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </label>

        <label class="ctg-card card-two">
            <input type="checkbox">
            <div class="flip-card">
                <img src="/images/flip2.jpg"
                    alt="Les meilleurs Team Building de la région romande pour vous et vos collaborateurs.">
                <div class="front-flip">
                    <h5>{{ $menuCats[1]->lang->name }}</h5>
                </div>
                <div class="back-flip">
                    <ul>
                        @foreach ($menuCats[1]->subcategories as $sub)
                            <li>
                                <a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[1]->lang->slug . '/' . $sub->lang->slug) }}">{{ $sub->lang->name }}</a>
                            </li>
                        @endforeach
                        <li>
                            <a
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[1]->lang->slug) }}">{{ __('main.view_all') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </label>

        <label class="ctg-card card-three">
            <input type="checkbox">
            <div class="flip-card">
                <img src="/images/flip3.jpg"
                    alt="Annuaire des meilleurs traiteurs de Suisse romande pour tous vos événements">
                <div class="front-flip">
                    <h5>{{ $menuCats[2]->lang->name }}</h5>
                </div>
                <div class="back-flip">
                    <ul>
                        @foreach ($menuCats[2]->subcategories as $sub)
                            <li>
                                <a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[2]->lang->slug . '/' . $sub->lang->slug) }}">{{ $sub->lang->name }}</a>
                            </li>
                        @endforeach
                        <li>
                            <a
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[2]->lang->slug) }}">{{ __('main.view_all') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </label>

        <label class="ctg-card card-four">
            <input type="checkbox">
            <div class="flip-card">
                <img src="/images/flip4.jpg"
                    alt="Des caves ouvertes, foires au vin ou encore dégustation pour les amoureux du vin">
                <div class="front-flip">
                    <h5>{{ $menuCats[3]->lang->name }}</h5>
                </div>
                <div class="back-flip">
                    <ul>
                        @foreach ($menuCats[3]->subcategories as $sub)
                            <li>
                                <a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[3]->lang->slug . '/' . $sub->lang->slug) }}">{{ $sub->lang->name }}</a>
                            </li>
                        @endforeach
                        <li>
                            <a
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[3]->lang->slug) }}">{{ __('main.view_all') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </label>

        <label class="ctg-card card-five">
            <input type="checkbox">
            <div class="flip-card">
                <img src="/images/flip5.jpg"
                    alt="Les lieux pour trouver des décorations et équipements pour tous types d'événements">
                <div class="front-flip">
                    <h5>{{ $menuCats[4]->lang->name }}</h5>
                </div>
                <div class="back-flip">
                    <ul>
                        @foreach ($menuCats[4]->subcategories as $sub)
                            <li>
                                <a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[4]->lang->slug . '/' . $sub->lang->slug) }}">{{ $sub->lang->name }}</a>
                            </li>
                        @endforeach
                        <li>
                            <a
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[4]->lang->slug) }}">{{ __('main.view_all') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </label>

        <label class="ctg-card card-six">
            <input type="checkbox">
            <div class="flip-card">
                <img src="/images/flip6.jpg"
                    alt="Le top des activités originales ou d'une animations entre amis ou en entreprise">
                <div class="front-flip">
                    <h5>{{ $menuCats[5]->lang->name }}</h5>
                </div>
                <div class="back-flip">
                    <ul>
                        @foreach ($menuCats[5]->subcategories as $sub)
                            <li>
                                <a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[5]->lang->slug . '/' . $sub->lang->slug) }}">{{ $sub->lang->name }}</a>
                            </li>
                        @endforeach
                        <li>
                            <a
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $menuCats[5]->lang->slug) }}">{{ __('main.view_all') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </label>
    </section>
    <section class="location">
        <div id="map" class="abs"></div>
        <div class="container">
            <ul>
                @foreach ($menuCats as $cat)
                    <li>
                        <a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $cat->lang->slug) }}">{{ $cat->lang->name }}</a>
                    </li>
                @endforeach
                <li><a href="#">{{ __('categories.agency') }}</a></li>
                <li><a href="#">{{ __('main.all') }}</a></li>
            </ul>
        </div>

    </section>

    @include('common.swisswin')
@endsection

@push('footer')
    <script>
        function initMapMainPage() {
            if (place.length > 0) {
                places = place;
                sc = {
                    lat: places[0].position.lat,
                    lng: places[0].position.lng
                }

                console.log(sc);
            } else {
                places = {};
                sc = {
                    lat: 46.9615801,
                    lng: 7.4726237
                };
            }

            const position = {
                lat: 46.452978,
                lng: 6.552458
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                disableDefaultUI: true,
                center: position,
                zoom: 20,
                styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#444444"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#f2f2f2"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                                "color": "#f39200"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ]
            });

            var InfoWindows = new google.maps.InfoWindow({});
            bounds = new google.maps.LatLngBounds()
            places.forEach(function(location) {

                var position = location.position;
                if (position.lat == '' || position.lng == '') {
                    return;
                }
                var marker = new google.maps.Marker({
                    position: {
                        lat: location.position.lat,
                        lng: location.position.lng
                    },
                    map: map,
                    icon: icons[location.icon].icon,
                    title: location.title
                });

                bounds.extend(marker.position)

                marker.addListener('mouseover', function() {
                    InfoWindows.open(map, this);
                    InfoWindows.setContent(location.content);
                });
            });

            map.fitBounds(bounds);
        }
    </script>
    <script>
        var place = [
            @foreach ($services as $item)
                @if (!$item->lat || !$item->lon)
                    @continue
                @endif {
                    title: '{{ $item->categories->first() && $item->categories->first()->primaryCategory ? $item->categories->first()->primaryCategory->lang->name : 'cat1' }}',
                    position: {
                        lat: {{ $item->lat }},
                        lng: {{ $item->lon }}
                    },
                    icon: '{{ $item->categories->first() && $item->categories->first()->primaryCategory ? $item->categories->first()->primaryCategory->code : 'cat1' }}',
                    content: '<div class="pin"><img src="{{ asset('storage/images/' . $item->main_img) }}" alt=""><h6>@if (app()->getLocale() == 'en') {{ $item->en_company_name }} @else {{ $item->fr_company_name }}    @endif</h6><p class="place">{{ __('cantons.' . strtolower($item->location_code) . '_loc') }}, {{ $item->address }}</p></div>'
                },
            @endforeach
        ]
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDpzw9SH97G5L9Af-dR5TeixK8OEPqocY&callback=initMapMainPage&language={{ app()->getLocale() }}"
        type="text/javascript"></script>
@endpush
