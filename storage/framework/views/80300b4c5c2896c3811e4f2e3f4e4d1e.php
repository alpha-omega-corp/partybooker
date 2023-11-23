<div>
    <div class="col-md-12">
        <div class="d-flex flex-column">
            <div class="edit-location" data-tippy-content="<?php echo e(__('become_partner.location')); ?>">
                <div class="d-flex align-items-center">
                    <?php echo e(svg('heroicon-o-map-pin')); ?>
                    <input type="text" class="form-control" id="map_address" name="map[address]"
                           placeholder="<?php echo e(__('become_partner.location')); ?>" value="<?php echo e($location['address']); ?>"
                           autocomplete="off">
                </div>
            </div>
            <button type="submit"
                    class="btn btn-accent">
                <?php echo e(__('partner.save')); ?>

            </button>
        </div>
    </div>
    <input type="hidden" id="map_lat" name="map[lat]"/>
    <input type="hidden" id="map_lon" name="map[lon]"/>
    <input type="hidden" id="map_city" name="map[city]"/>
    <input type="hidden" id="map_country" name="map[country]"/>
    <input type="hidden" id="map_state" name="map[state]"/>
    <input type="hidden" id="map_zip" name="map[zip]" placeholder="zip code"/>

    <input type="hidden" id="partner_lat" value="<?php echo e($location['lat']); ?>" hidden/>
    <input type="hidden" id="partner_lon" value="<?php echo e($location['lon']); ?>" hidden/>

</div>

<div id="map" style="width: 100%; height: 200px;"></div>

<?php $__env->startPush('footer'); ?>

    <script type="text/javascript">
        async function initMap() {

        }
    </script>
    <script
        src="https:///maps.google.com/maps/api/js?libraries=places&language=en&key=AIzaSyBPleD5xW_3gBLeUfgdw-QIwP--2VzWSt8&language=<?php echo e(App\Http\Middleware\LocaleMiddleware::getLocale()); ?>&callback=initMap"></script>
    <script src="<?php echo e(asset('/js/locationpicker.jquery.js')); ?>"></script>


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
        }

        $("#map").locationpicker({
            location: {
                latitude: document.getElementById('partner_lat').value,
                longitude: document.getElementById('partner_lon').value
            },
            radius: 0,
            zoom: 14,
            scrollwheel: true,
            inputBinding: {
                latitudeInput: $("#map_lat"),
                longitudeInput: $("#map_lon"),
                locationNameInput: $("#map_address")
            },
            enableAutocomplete: true,
            enableAutocompleteBlur: false,
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

<?php $__env->stopPush(); ?>
<?php /**PATH /home/nanstis/PhpstormProjects/pb-live/resources/views/partial/map_company.blade.php ENDPATH**/ ?>