import './bootstrap';

import $ from "jquery";
import Glide, {Autoplay, Breakpoints, Controls} from "@glidejs/glide/dist/glide.modular.esm.js";
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

window.$ = $;
window.Glide = Glide;
window.GlideControls = {Controls, Autoplay, Breakpoints};

window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.start();

const sideObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animation-side-active');
        } else {
            entry.target.classList.remove('animation-side-active');
        }
    });
});

const sideAnimations = document.querySelectorAll('.animation-side')
sideAnimations.forEach((element) => sideObserver.observe(element));

const downObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animation-down-active');
        } else {
            entry.target.classList.remove('animation-down-active');
        }
    });
});

const downAnimations = document.querySelectorAll('.animation-down')
downAnimations.forEach((element) => downObserver.observe(element));

const growObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animation-grow-active');
        } else {
            entry.target.classList.remove('animation-grow-active');
        }
    });
});

const growAnimations = document.querySelectorAll('.animation-grow')
growAnimations.forEach((element) => growObserver.observe(element));


import.meta.glob([
    '../images/**',
]);
