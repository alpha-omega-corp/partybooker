<head>
    <title>Address Selection</title>
    <style>
        body {
            margin: 0;
        }

        .sb-title {
            position: relative;
            top: -12px;
            font-family: Roboto, sans-serif;
            font-weight: 500;
        }

        .sb-title-icon {
            position: relative;
            top: -5px;
        }

        .card-container {
            display: flex;
            height: 500px;
            width: 600px;
        }

        .panel {
            background: white;
            width: 300px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .half-input-container {
            display: flex;
            justify-content: space-between;
        }

        .half-input {
            max-width: 120px;
        }

        .map {
            width: 300px;
        }

        h2 {
            margin: 0;
            font-family: Roboto, sans-serif;
        }

        input {
            height: 30px;
        }

        input {
            border: 0;
            border-bottom: 1px solid black;
            font-size: 14px;
            font-family: Roboto, sans-serif;
            font-style: normal;
            font-weight: normal;
        }

        input:focus::placeholder {
            color: white;
        }
    </style>
    <script>
        "use strict";

        const CONFIGURATION = {
            "ctaTitle": "Checkout",
            "mapOptions": {
                "center": {"lat": 46.3423, "lng": 6.1955},
                "fullscreenControl": true,
                "mapTypeControl": false,
                "streetViewControl": true,
                "zoom": 9,
                "zoomControl": true,
                "maxZoom": 22,
                "mapId": ""
            },
            "mapsApiKey": '{{config('geocoder.key')}}',
            "capabilities": {"addressAutocompleteControl": true, "mapDisplayControl": true, "ctaControl": false}
        };

        const SHORT_NAME_ADDRESS_COMPONENT_TYPES =
            new Set(['street_number', 'administrative_area_level_1', 'postal_code']);

        const ADDRESS_COMPONENT_TYPES_IN_FORM = [
            'location',
            'locality',
            'administrative_area_level_1',
            'postal_code',
            'country',
        ];

        function getFormInputElement(componentType) {
            return document.getElementById(`${componentType}-input`);
        }

        function fillInAddress(place) {
            function getComponentName(componentType) {
                for (const component of place.address_components || []) {
                    if (component.types[0] === componentType) {
                        return SHORT_NAME_ADDRESS_COMPONENT_TYPES.has(componentType) ?
                            component.short_name :
                            component.long_name;
                    }
                }
                return '';
            }

            function getComponentText(componentType) {
                return (componentType === 'location') ?
                    `${getComponentName('street_number')} ${getComponentName('route')}` :
                    getComponentName(componentType);
            }

            for (const componentType of ADDRESS_COMPONENT_TYPES_IN_FORM) {
                getFormInputElement(componentType).value = getComponentText(componentType);
            }
        }

        function renderAddress(place, map, marker) {
            if (place.geometry && place.geometry.location) {
                map.setCenter(place.geometry.location);
                marker.position = place.geometry.location;
            } else {
                marker.position = null;
            }
        }

        async function initMap() {
            const {Map} = google.maps;
            const {AdvancedMarkerElement} = google.maps.marker;
            const {Autocomplete} = google.maps.places;

            const mapOptions = CONFIGURATION.mapOptions;
            mapOptions.mapId = mapOptions.mapId || 'DEMO_MAP_ID';
            mapOptions.center = mapOptions.center || {lat: 37.4221, lng: -122.0841};

            const map = new Map(document.getElementById('gmp-map'), mapOptions);
            const marker = new AdvancedMarkerElement({map});
            const autocomplete = new Autocomplete(getFormInputElement('location'), {
                fields: ['address_components', 'geometry', 'name'],
                types: ['address'],
            });

            autocomplete.addListener('place_changed', () => {
                const place = autocomplete.getPlace();
                if (!place.geometry) {
                    // User entered the name of a Place that was not suggested and
                    // pressed the Enter key, or the Place Details request failed.
                    window.alert(`No details available for input: '${place.name}'`);
                    return;
                }
                renderAddress(place, map, marker);
                fillInAddress(place);
            });
        }
    </script>
</head>

<div class="app-map">
    @php($location = $partner->company->location)
    <form method="POST" action="{{route('partner.company.location', ['company' => $partner->company])}}">
        @method('PUT')
        @csrf
        <div class="app-map-header">
            <x-forms.input
                type="text"
                name="address"
                :value="$location->address"
                id="location-input">
                @svg($pinIcon)
            </x-forms.input>
        </div>

        <div class="app-map-container">
            <div class="panel">
                <input type="text" name="city" placeholder="City" id="locality-input"
                       value="{{$location->city}}"/>
                <input type="text" name="state" placeholder="State/Province" id="administrative_area_level_1-input"
                       value="{{$location->state}}"/>
                <input type="text" name="zip" placeholder="Zip/Postal code" id="postal_code-input"
                       value="{{$location->zip}}"/>
                <input type="text" name="country" placeholder="Country" id="country-input"
                       value="{{$location->country}}"/>
            </div>

            <div class="map" id="gmp-map"></div>
        </div>

        <button type="submit" class="btn btn-blue rounded-0 w-100">
            {{__('app.save')}}
        </button>
    </form>
</div>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATiQepbzCMa56bHd_Ro1kJounTq1ECCBc&libraries=places,marker&callback=initMap&solution_channel=GMP_QB_addressselection_v2_cAB"
    async defer></script>


