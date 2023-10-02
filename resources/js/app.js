import './bootstrap';
import '../sass/app.scss';
import Alpine from 'alpinejs';
import tippy, { animateFill } from 'tippy.js';
import 'tippy.js/animations/scale.css';
import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'

import { Loader } from "@googlemaps/js-api-loader"

const loader = new Loader({
    apiKey: "AIzaSyBPleD5xW_3gBLeUfgdw-QIwP--2VzWSt8",
    version: "weekly",
    libraries: ["maps", "places"],
});

const center = { lat: 46.8131873, lng:  8.22421 };
const mapOptions = {
    center: center,
    zoom: 7,
};


loader
    .importLibrary('maps')
    .then(({Map}) => {
        return new Map(document.getElementById("map"), mapOptions);
    })
    .catch((e) => {
        console.warn('map not loaded', e);
    });



import.meta.glob([
    '../images/**',
    '../../public/storage/**',
]);

window.Alpine = Alpine;
Alpine.start();

tippy('.nav-item', {
    placement: 'right',
    animation: 'scale',
    inertia: true,
    theme: 'navigation'
});

tippy('.glide__bullet', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'top-services'
});

tippy('.partner-info-tippy', {
    placement: 'bottom-start',
    animation: 'scale',
    inertia: true,
    theme: 'partner-info-tippy'
});

tippy.setDefaultProps({
    delay: 50,
    plugins: [
        animateFill
    ]
});

let cards = document.querySelectorAll('.card');
[...cards].forEach((card) => {
    card.addEventListener('click', function () {
        card.classList.toggle('is-flipped');
    });
});


if (document.getElementsByClassName('glide').length > 0) {
    new Glide('.glide', {
        type: 'carousel',
        keyboard: true,
        perView: 4,
        breakpoints: {
            1200: {
                perView: 3,
            },
            767: {
                perView: 1,
            },
        },
    }).mount({ Controls, Breakpoints });
}
