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

function stickyScroll(relative, name, stop) {
    $(document).ready(function () {
        let item = $(`.sticky-${name}`)
        let stickyTop = item.offset().top;

        $(window).scroll(function () {
            let windowTop = $(window).scrollTop();
            let content = $(".app-card-panel")

            if (stickyTop < windowTop && content.height() + content.offset().top - item.height() > windowTop) {
                let topHeight = window.innerWidth > 1100 ? '82px' : '61px'

                console.log(window.screen.width)
                item.css('position', 'fixed')
                    .css('top', topHeight)
                    .css('z-index', 10)
                    .css('width', `${relative.width()}px`);
            } else {
                item.css('position', 'relative')
                    .css('top', 0)
                    .css('z-index', 0)
            }
        });
    });
}

let listingContent = $(".app-listing-content")
let listingFilter = $(".app-listing-filters")

stickyScroll(listingFilter, 'listing-filters', listingContent)
stickyScroll(listingContent, 'listing-pagination')

import.meta.glob([
    '../images/**',
]);
