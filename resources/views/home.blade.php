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
    <div class="wrapper">
        <div class="parallax__group hero-container hero">
            <div class="parallax__layer blob"></div>

            <div class="parallax__layer hero-text">
                <section>
                    <div class="welcome">
                        <div class="container">
                            <h1 class="text-white display-1 fw-bold">
                                {{ __('main.title_home_h1') }}
                            </h1>

                            <div class="accordion" id="welcomeAccordion">
                                <div class="card-group">

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-uppercase fw-bold" id="headingTwo">
                                                        {{ __('main.info-block-title-1') }}
                                                    </h2>
                                                    <button class="accordion-button text-uppercase" id="controlOne"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="false"
                                                        aria-controls="collapseOne">

                                                        <img src="{{ asset('images/ape.svg') }}" class="my-auto d-block"
                                                            alt="...">

                                                    </button>

                                                    <div id="collapseOne" class="accordion-collapse collapse"
                                                        aria-labelledby="headingOne" data-bs-parent="#welcomeAccordion">
                                                        <div class="accordion-body body-one">
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
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-uppercase fw-bold" id="headingTwo">
                                                        {{ __('main.info-block-title-2') }}
                                                    </h2>
                                                    <button class="accordion-button text-uppercase" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <img src="{{ asset('images/party-popper.svg') }}"
                                                            class="my-auto d-block" alt="...">

                                                    </button>

                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#welcomeAccordion">
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
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-uppercase fw-bold" id="headingThree">
                                                        {{ __('main.info-block-title-3') }}
                                                    </h2>

                                                    <button
                                                        class="accordion-button accordion-button-register collapsed text-uppercase"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        <img src="{{ asset('images/heart.svg') }}" class="my-auto d-block"
                                                            alt="...">
                                                    </button>

                                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingThree" data-bs-parent="#welcomeAccordion">
                                                        <div class="accordion-body">
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
            </div>
        </div>


        <div class="parallax__group hero-container hero">
            <div class="parallax__layer grid"></div>
            <div class="parallax__layer box-top"></div>
            <div class="parallax__layer box"></div>

            <div class="parallax__layer hero-text-two">
                <section class="top-services">
                    @include('common.top-services')
                </section>
            </div>
        </div>

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

                        <!-- Tabs -->
                        @foreach ($menuCats as $key => $category)
                            @php
                                $listKey = 'list-category-' . $key;
                                $listId = $listKey . '-list';
                            @endphp

                            <!-- Content -->
                            <div class="tab-pane fade show  {{ $key === 0 ? 'active' : '' }}" id="{{ $listKey }}"
                                role="tabpanel" aria-labelledby="{{ $listId }}">

                                @switch($listKey)
                                    @case('list-category-1')
                                        <img src="{{ asset('images/flip2.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                    @break

                                    @case('list-category-2')
                                        <img src="{{ asset('images/flip3.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                    @break

                                    @case('list-category-3')
                                        <img src="{{ asset('images/flip4.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                    @break

                                    @case('list-category-4')
                                        <img src="{{ asset('images/flip5.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                    @break

                                    @case('list-category-5')
                                        <img src="{{ asset('images/flip6.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                    @break

                                    @default
                                        <img src="{{ asset('images/flip1.jpg') }}" class="img-showcase mx-auto d-block"
                                            alt="...">
                                @endswitch


                                <p class="category-description">
                                    @if ($category->lang->description)
                                        {{ $category->lang->description }}
                                    @else
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis
                                        dolor ligula,
                                        quis commodo arcu sollicitudin eu. Phasellus feugiat nisl non ex iaculis
                                        dictum. Aliquam
                                        ultricies ultrices placerat. Sed augue nunc, malesuada id orci vitae,
                                        aliquet sodales
                                        ipsum. Integer congue, purus feugiat varius scelerisque, dolor diam eleifend
                                        ante, ut
                                        cursus urna sem vitae velit. Suspendisse potenti.
                                    @endif
                                </p>

                                <div class="btn-group" role="group" aria-label="Basic outlined example">

                                    <button type="button" class="btn btn-labeled btn-secondary text-uppercase"
                                        data-bs-toggle="offcanvas" data-bs-target="{{ '#category-' . $category->id }}"
                                        aria-controls="offcanvasScrolling">
                                        <span class="btn-label">
                                            <i class="bi bi-door-open"></i>
                                        </span>
                                        {{ __('main.see-items') }}
                                    </button>
                                    <button type="button" class="btn btn-labeled btn-secondary text-uppercase">
                                        <span class="btn-label">
                                            <i class="bi bi-eye"></i>
                                        </span>
                                        {{ __('main.see-all') }}
                                    </button>

                                </div>

                                <!-- Offcanvas -->
                                <div class="offcanvas offcanvas-end h-100" data-bs-scroll="true" data-bs-backdrop="true"
                                    tabindex="-1" id="{{ 'category-' . $category->id }}"
                                    aria-labelledby="{{ $category->lang->name }}">

                                    <img class="py-4 mx-auto d-block" src="{{ asset('images/logoPB.png') }}"
                                        alt="logo">
                                    <h5 class="offcanvas-title text-uppercase text-center fs-2 p-2 lh-1 text-white bg-secondary"
                                        id="offcanvasScrollingLabel">
                                        {{ $category->lang->name }}
                                    </h5>
                                    <div class="offcanvas-body">
                                        <ul class="list-group list-group-flush">
                                            @foreach ($category->subCategories as $subCategory)
                                                <li class="list-group-item">
                                                    <a
                                                        href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $category->lang->slug . '/' . $subCategory->lang->slug) }}">
                                                        {{ $subCategory->lang->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>


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
