import './bootstrap';
import '../sass/app.scss';
import Alpine from 'alpinejs';
import tippy, {animateFill} from 'tippy.js';
import 'tippy.js/animations/scale.css';
import Glide, {Autoplay, Breakpoints, Controls} from '@glidejs/glide/dist/glide.modular.esm'
import focus from '@alpinejs/focus';

import.meta.glob([
    '../images/**',
    '../../public/storage/**',
]);


window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.start();

tippy('.nav-item', {
    placement: 'right',
    animation: 'scale',
    inertia: true,
    theme: 'navigation'
});

tippy('.glide__bullet', {
    placement: 'bottom',
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

tippy('.back-page', {
    placement: 'top-start',
    animation: 'scale',
    inertia: true,
    theme: 'back-page'
});

tippy('.partner-socials', {
    placement: 'right-start',
    animation: 'scale',
    inertia: true,
    theme: 'partner-socials'
});

tippy('.tab-cat-btn', {
    placement: 'left',
    animation: 'scale',
    inertia: true,
    theme: 'tab-cat-tippy'
});

tippy('.flag', {
    placement: 'bottom',
    animation: 'scale',
    inertia: true,
    theme: 'flag'
});

tippy('.partner-advert-card', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'partner-advert'
});

tippy('.dashboard-stat-card', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'stats'
});

tippy('.cp-nav-item', {
    placement: 'left',
    animation: 'scale',
    inertia: true,
    theme: 'stats'
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
        perView: 3,
        focusAt: "center",
        breakpoints: {
            1500: {
                perView: 2,
            },
            767: {
                perView: 1,
            },
        },
    }).mount({Controls, Breakpoints});
}


if (document.getElementsByClassName('glide-comments').length > 0) {
    const glide = new Glide('.glide-comments', {
        type: 'carousel',
        autoplay: 8000
    }).mount({Controls, Autoplay});
    glide.play()
}
