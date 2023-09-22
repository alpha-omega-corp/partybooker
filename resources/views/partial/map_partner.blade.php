<div>
    <input type="text" maxlength="128" id="pac-input" name="map" />
</div>


<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPleD5xW_3gBLeUfgdw-QIwP--2VzWSt8&libraries=places&callback=initMap">
</script>

<script async>
    async function initMap() {
        const center = {
            lat: 50.064192,
            lng: -130.605469
        };
        // Create a bounding box with sides ~10km away from the center point
        const defaultBounds = {
            north: center.lat + 0.1,
            south: center.lat - 0.1,
            east: center.lng + 0.1,
            west: center.lng - 0.1,
        };
        const input = document.getElementById("pac-input");
        const options = {
            bounds: defaultBounds,
            componentRestrictions: {
                country: "us"
            },
            fields: ["address_components", "geometry", "icon", "name"],
            strictBounds: false,
        };
        const autocomplete = new google.maps.places.Autocomplete(input, options);

    }
</script>

<div id="map" style="width: 100%; height: 400px;"></div>
