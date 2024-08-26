import axios from 'axios';
import select2 from 'select2';
import * as Popper from '@popperjs/core'
import 'bootstrap'
import '../sass/app.scss';
import './tooltip.js';
import $ from "jquery";

select2()
window.$ = $;
window.Popper = Popper
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

