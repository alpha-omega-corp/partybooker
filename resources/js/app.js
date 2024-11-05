/**
 *  !!! Javascript imports order is important switching them might result in errors !!!
 */

import './bootstrap';
import $ from "jquery";
import Glide, {Autoplay, Breakpoints, Controls} from "@glidejs/glide/dist/glide.modular.esm.js";
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import {intersect} from "@alpinejs/intersect";

window.$ = $;
window.Glide = Glide;
window.GlideControls = {Controls, Autoplay, Breakpoints};

window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.plugin(intersect);
Alpine.start();

animation('animation-side');
animation('animation-grow');

function animation(name) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add(`${name}-active`);
            } else {
                entry.target.classList.remove(`${name}-active`);
            }
        });
    });

    document.querySelectorAll(`.${name}`).forEach((element) => observer.observe(element));
}

function stickyScroll(relative, name, stop) {
    $(document).ready(function () {
        let item = $(`.sticky-${name}`)
        let stickyTop = item.offset().top - 60;

        $(window).scroll(function () {
            let windowTop = $(window).scrollTop();
            let content = $(".app-card-panel")

            if (stickyTop < windowTop && content.height() + content.offset().top - item.height() > windowTop) {
                let topHeight = window.innerWidth > 1200 ? 130 : 60

                item.css('position', 'fixed')
                    .css('padding-top', `${topHeight}px`)
                    .css('top', 0)
                    .css('z-index', 10)
                    .css('width', `${relative.width()}px`);
            } else {
                item.css('position', 'relative')
                    .css('padding-top', 0)
                    .css('padding-bottom', 0)
                    .css('z-index', 0)
            }
        });
    });
}

let listingFilter = $(".app-listing-filters")
let listingSearch = $(".app-listing-search")

stickyScroll(listingFilter, 'listing-search', listingSearch)


import.meta.glob([
    '../images/**',
]);
