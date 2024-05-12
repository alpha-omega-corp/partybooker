import axios from 'axios';
import * as Popper from '@popperjs/core'
import 'bootstrap'
import './tooltip.js';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import Glide, {Autoplay, Breakpoints, Controls} from '@glidejs/glide/dist/glide.modular.esm'
import tinymce from 'tinymce';
import $ from 'jquery';

import 'tinymce/icons/default/icons.min.js';
import 'tinymce/models/dom/model.min.js';
import 'tinymce/plugins/advlist';
import 'tinymce/themes/silver/theme.min.js';
import 'tinymce/skins/ui/oxide/skin.js';
import 'tinymce/plugins/code';
import 'tinymce/plugins/emoticons';
import 'tinymce/plugins/emoticons/js/emojis';
import 'tinymce/plugins/link';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/table';

window.$ = $;

window.tinyPlugins = 'advlist code emoticons link lists table'
window.tinyOptions = 'bold italic | bullist numlist | link emoticons'
window.tinySkin = 'default'
window.tinyCss = 'default'

window.Glide = Glide;
window.GlideControls = {Controls, Autoplay, Breakpoints};
window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.start();

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Popper = Popper
window.tinymce = tinymce;


window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}

gtag('js', new Date());
gtag('config', 'G-09C5215HQL');


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
