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
    <section>
        <div class="welcome">
            <div class="container">
                <h1 class="text-primary display-1 fw-bold">
                    {{ __('main.title_home_h1') }}
                </h1>

                <div class="accordion" id="accordionExample">
                    <div class="card-group">
                        <div class="card">
                            <img src="{{ asset('images/ape.svg') }}" class="card-img-top rounded mx-auto d-block py-4"
                                alt="...">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button text-uppercase" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                {{ __('main.info-block-title-1') }}
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    <span>{{ __('main.info-block-1') }}</span>

                                                    <br>
                                                    <hr>
                                                    <span>{{ __('main.info-block-1-1') }}</span>
                                                <p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <img src="{{ asset('images/party-popper.svg') }}"
                                class="card-img-top rounded mx-auto d-block py-4" alt="...">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button text-uppercase" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                {{ __('main.info-block-title-2') }}
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    <span>{{ __('main.info-block-2') }}</span>
                                                    <b>{{ __('main.info-block-2-1') }}</b>
                                                    <span>{{ __('main.info-block-2-2') }}</span>

                                                    <br>
                                                    <hr>
                                                    <span>{{ __('main.info-block-2-3') }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-focus">
                            <img src="{{ asset('images/work-team.svg') }}"
                                class="card-img-top rounded mx-auto d-block py-4" alt="...">
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button
                                                class="accordion-button accordion-button-register collapsed text-uppercase"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">

                                                <span>{{ __('main.info-block-title-3') }}</span>
                                            </button>
                                        </h2>

                                        <div id="collapseThree" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-3">
                                                <p>
                                                    <span>{{ __('main.info-block-at') }}</span>
                                                    <b>{{ __('main.info-block-pb') }}</b>
                                                    <span>{{ __('main.info-block-3') }}</span>

                                                    <br>
                                                    <hr>
                                                    <i>{{ __('main.info-block-3-1') }}</i>
                                                </p>
                                            </div>
                                        </div>
                                        <a
                                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner')) }}">
                                            <button type="button" class="btn btn-primary register">
                                                <i class="bi bi-arrow-right"></i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-services">
        @include('common.top-services')
    </section>



    <section class="categories">
        <div class="row">
            <div class="col-6">
                <div class="list-group" id="list-tab" role="tablist">
                    @foreach ($menuCats as $key => $category)
                        @php
                            $listKey = 'list-category-' . $key;
                            $listId = $listKey . '-list';
                        @endphp

                        <a class="list-group-item list-group-item-action fw-bold text-uppercase display-3 {{ $key === 0 ? 'active' : '' }}"
                            id="{{ $listId }}" data-bs-toggle="list" href="{{ '#' . $listKey }}" role="tab"
                            aria-controls="{{ $listKey }}">
                            {{ $category->lang->name }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-6">
                <div class="tab-content" id="nav-tabContent">


                    @foreach ($menuCats as $key => $category)
                        @php
                            $listKey = 'list-category-' . $key;
                            $listId = $listKey . '-list';
                        @endphp

                        <div class="tab-pane fade show {{ $key === 0 ? 'active' : '' }}" id="{{ $listKey }}"
                            role="tabpanel" aria-labelledby="{{ $listId }}">

                            Content :{{ $listId }}

                        </div>
                    @endforeach



                    <div class="tab-pane fade" id="list-category-1" role="tabpanel"
                        aria-labelledby="list-category-1-list">
                        Even
                    </div>

                    <div class="tab-pane fade" id="list-category-2" role="tabpanel"
                        aria-labelledby="list-category-2-list">
                        Traiteur
                    </div>

                    <div class="tab-pane fade" id="list-category-3" role="tabpanel"
                        aria-labelledby="list-category-3-list">
                        Amoureux
                    </div>

                    <div class="tab-pane fade" id="list-category-4" role="tabpanel"
                        aria-labelledby="list-category-4-list">
                        MatDeco
                    </div>

                    <div class="tab-pane fade" id="list-category-5" role="tabpanel"
                        aria-labelledby="list-category-5-list">
                        Anim
                    </div>

                </div>
            </div>
        </div>

    </section>


    <br>



    @include('common.swisswin')

    <script>
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 5
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
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
