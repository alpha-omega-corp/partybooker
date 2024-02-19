import './bootstrap';
import '../sass/app.scss';
import tippy, {animateFill} from 'tippy.js';
import {Loader} from "@googlemaps/js-api-loader/src";

const loader = new Loader({
    apiKey: "AIzaSyBPleD5xW_3gBLeUfgdw-QIwP--2VzWSt8",
    version: "weekly",
    libraries: ["maps", "places"]
});
const mapOptions = {
    center: {
        lat: 0,
        lng: 0
    },
    zoom: 4
};

import.meta.glob([
    '../images/**',
]);

tippy('.tippy', {
    placement: 'top',
    inertia: true,
    theme: 'tippy',
});

tippy('.tippy-down', {
    placement: 'bottom',
    inertia: true,
    theme: 'tippy',
});

tippy.setDefaultProps({
    delay: 50,
    plugins: [
        animateFill
    ]
});


let flipCards = document.querySelectorAll('.flippy');

[...flipCards].forEach((card) => {
    card.addEventListener('click', function () {
        card.classList.toggle('is-flipped');
    });
});


/*
const map = new Map(mapDiv, {
  center: {lat: 37, lng: -122},
  zoom: 8,
  mapId: "MY_MAP_ID",
});
const marker = new AdvancedMarkerElement({
  map,
  position: {lat: 37, lng: -122},
});
 */

