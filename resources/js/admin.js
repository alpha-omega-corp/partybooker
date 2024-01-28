import './bootstrap';
import '../sass/admin/admin.scss';
import 'tippy.js/animations/scale.css';

import tippy, {animateFill} from "tippy.js";

tippy('.tippy', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'tippy',
});

tippy.setDefaultProps({
    delay: 50,
    plugins: [
        animateFill
    ]
});
