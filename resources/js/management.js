import './bootstrap';
import $ from 'jquery';
import tinymce from 'tinymce';
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

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";

window.$ = $;
window.tinymce = tinymce;


window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.start();

