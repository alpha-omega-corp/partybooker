import axios from 'axios';
import * as Popper from '@popperjs/core'
import 'bootstrap'
import '../sass/app.scss';

import './tooltip.js';
import select2 from 'select2';

select2()

window.Popper = Popper
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
