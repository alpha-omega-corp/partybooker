<div>

    <div class="col-md-12">
        <label for="map_address" class="form-label">{{ __('become_partner.address') }}</label>
        <input type="text" class="form-control mb-4" id="map_address" name="map[address]"
               placeholder="{{__('become_partner.location')}}" autocomplete="off">
    </div>
    <input type="hidden" id="map_lat" name="map[lat]"/>
    <input type="hidden" id="map_lon" name="map[lon]"/>
    <input type="hidden" id="map_city" name="map[city]"/>
    <input type="hidden" id="map_country" name="map[country]"/>
    <input type="hidden" id="map_state" name="map[state]"/>
    <input type="hidden" id="map_zip" name="map[zip]" placeholder="zip code"/>
</div>

<div id="map" style="width: 100%; height: 400px;"></div>


<script type="text/javascript">
    async function initMap() {

    }
</script>
<script
    src="https:///maps.google.com/maps/api/js?libraries=places&language=en&key={{config('key.map')}}&callback=initMap"></script>
<script src="{{asset('/js/locationpicker.jquery.js')}}"></script>


<script type="module">
    function updateControls(addressComponents, location) {
        $("#map_city").val(addressComponents.city);
        $("#map_street").val(addressComponents.streetName);
        $("#map_zip").val(addressComponents.postalCode);
        $("#map_country").val(addressComponents.country);
        $("#map_state").val(addressComponents.stateOrProvince);
        $("#map_building").val(addressComponents.streetNumber);
        //$("#address_full").val(location.formattedAddress);
        $("#location").val(addressComponents.stateOrProvince);
    }

    $("#map").locationpicker({
        location: {latitude: 46.94849282709854, longitude: 7.449180204995168},
        radius: 0,
        zoom: 8,
        scrollwheel: true,
        inputBinding: {
            latitudeInput: $("#map_lat"),
            longitudeInput: $("#map_lon"),
            locationNameInput: $("#map_address")
        },
        enableAutocomplete: true,
        enableAutocompleteBlur: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            //	var mapContext = $(this).locationpicker("map");
            //	mapContext.map.setZoom(14);

            var location = $(this).locationpicker("map").location;
            var addressComponents = location.addressComponents;

            updateControls(addressComponents, location);
        },
        oninitialized: function (component) {
            var location = $(component).locationpicker("map").location;
            var addressComponents = location.addressComponents;
            updateControls(addressComponents, location);
        }
    });

</script>

