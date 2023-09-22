
require('./bootstrap');
import Alpine from 'alpinejs';
import tippy, { animateFill } from 'tippy.js';
import { Loader } from "@googlemaps/js-api-loader"
import 'tippy.js/animations/scale.css';

window.Alpine = Alpine;
Alpine.start();

tippy('.nav-item', {
    placement: 'right',
    animation: 'scale',
    inertia: true,
    theme: 'navigation'
});

tippy.setDefaultProps({
    delay: 50,
    plugins: [
        animateFill
    ]
});
