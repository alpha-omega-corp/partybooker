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
        let stickyTop = item.offset().top;

        $(window).scroll(function () {
            let windowTop = $(window).scrollTop();
            let content = $(".app-card-panel")

            if (stickyTop < windowTop && content.height() + content.offset().top - item.height() > windowTop) {
                let topHeight = window.innerWidth > 1100 ? 130 : 130

                item.css('position', 'fixed')
                    .css('padding-top', `${topHeight}px`)
                    .css('padding-bottom', '40px')
                    .css('top', 0)
                    .css('z-index', 10)
                    .css('width', `${relative.width()}px`);
            } else {
                item.css('position', 'relative')
                    .css('padding-top', '20px')
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
