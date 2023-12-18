import './bootstrap';
import '../sass/app.scss'

import tippy, {animateFill} from 'tippy.js';
import 'tippy.js/animations/scale.css';
import Glide, {Autoplay, Breakpoints, Controls} from '@glidejs/glide/dist/glide.modular.esm'


import.meta.glob([
    '../images/**',
]);

tippy('.dashboard-modal-button', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'tab-cat-tippy'
});

tippy('.edit-service', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'tab-cat-tippy'
});

tippy('.plan-option-item', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'tab-cat-tippy'
});

tippy('.edit-gallery-button', {
    placement: 'left',
    animation: 'scale',
    inertia: true,
    theme: 'tab-cat-tippy'
});

tippy('.credit-card', {
    placement: 'left',
    animation: 'scale',
    inertia: true,
    theme: 'tab-cat-tippy'
});

tippy('.edit-location', {
    placement: 'right',
    animation: 'scale',
    inertia: true,
    theme: 'tab-cat-tippy'
});


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


tippy('.dashboard-stat-card', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'cp-nav-theme'
});

tippy('.cp-nav-item', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'cp-nav-theme'
});

tippy('.company-info-item', {
    placement: 'right',
    animation: 'scale',
    inertia: true,
    theme: 'tab-cat-tippy'
});

tippy('.user-info-item', {
    placement: 'right',
    animation: 'scale',
    inertia: true,
    theme: 'tab-cat-tippy'
});

tippy.setDefaultProps({
    delay: 50,
    plugins: [
        animateFill
    ]
});

document.addEventListener('DOMContentLoaded', () => {
    const elems = document.querySelectorAll('[data-bs-toggle="popover"]');

    const popovers = [...elems].map(el => new bootstrap.Popover(el, {
        trigger: 'focus',
        html: true,
        content: document.getElementById(el.dataset.contentId)?.innerHTML || ''
    }));
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
        perView: 5,
        focusAt: "center",
        // autoplay: 2000,
        breakpoints: {
            1900: {
                perView: 4,
            },
            1600: {
                perView: 3,
            },
            1100: {
                perView: 2,
            },
            700: {
                perView: 1,
            },
        },
    }).mount({Controls, Breakpoints, Autoplay});
}


if (document.getElementsByClassName('glide-comments').length > 0) {
    const glide = new Glide('.glide-comments', {
        type: 'carousel',
        perView: 3,
        breakpoints: {
            1500: {
                perView: 2,
            },
            1000: {
                perView: 1,
            },

        },

    }).mount({Controls, Autoplay, Breakpoints});
    glide.play()
}
