<div>
    <input type="text" maxlength="128" id="map_address" name="map[address]"
        placeholder="{{ __('become_partner.location') }}" value="A" autocomplete="off" />
    <input type="hidden" id="map_lat" name="map[lat]" />
    <input type="hidden" id="map_lon" name="map[lon]" />
    <input type="hidden" id="map_city" name="map[city]" />
    <input type="hidden" id="map_country" name="map[country]" />
    <input type="hidden" id="map_state" name="map[state]" />
    <input type="hidden" id="map_zip" name="map[zip]" placeholder="zip code" />
</div>
<div id="map" style="width: 100%; height: 400px;"></div>

@push('footer')
    <script
        src="https:///maps.google.com/maps/api/js?libraries=places&language=en&key=AIzaSyCDpzw9SH97G5L9Af-dR5TeixK8OEPqocY&language={{ App\Http\Middleware\LocaleMiddleware::getLocale() }}">
    </script>
    <script src="/js/locationpicker.jquery.js"></script>
    <script type="text/javascript">
        function updateControls(addressComponents, location) {
            $("#map_city").val(addressComponents.city);
            $("#map_street").val(addressComponents.streetName);
            $("#map_zip").val(addressComponents.postalCode);
            $("#map_country").val(addressComponents.country);
            $("#map_state").val(addressComponents.stateOrProvince);
            $("#map_building").val(addressComponents.streetNumber);
            //$("#address_full").val(location.formattedAddress);
            $("#location").val(addressComponents.stateOrProvince);
            console.log(addressComponents)
        }

        $("#map").locationpicker({

            location: {
                latitude: 46.80940691277643,
                longitude: 7.9247161203607845
            },
            radius: 0,
            zoom: 8,
            scrollwheel: true,
            inputBinding: {
                latitudeInput: $("#map_lat"),
                longitudeInput: $("#map_lon"),
                locationNameInput: $("#map_address")
            },
            enableAutocomplete: true,
            enableAutocompleteBlur: false,
            onchanged: function(currentLocation, radius, isMarkerDropped) {
                //	var mapContext = $(this).locationpicker("map");
                //	mapContext.map.setZoom(14);

                var location = $(this).locationpicker("map").location;
                var addressComponents = location.addressComponents;

                updateControls(addressComponents, location);
            },
            oninitialized: function(component) {
                var location = $(component).locationpicker("map").location;
                var addressComponents = location.addressComponents;
                updateControls(addressComponents, location);
            }
        });
    </script>
@endpush
