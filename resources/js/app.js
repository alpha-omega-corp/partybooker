import './bootstrap';
import '../sass/app.scss'

import tippy, {animateFill} from 'tippy.js';
import 'tippy.js/animations/scale.css';

import.meta.glob([
    '../images/**',
]);

tippy('.tippy', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'tippy',
});

tippy('.tippy-down', {
    placement: 'bottom',
    animation: 'scale',
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

