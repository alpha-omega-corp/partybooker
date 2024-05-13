import tippy, {animateFill} from "tippy.js";
import 'tippy.js/animations/scale.css';

tippy('.tippy', {
    placement: 'top',
    inertia: true,
    animation: 'scale',
    theme: 'tippy',
});

tippy('.tippy-down', {
    placement: 'bottom',
    inertia: true,
    theme: 'tippy',
});

tippy.setDefaultProps({
    delay: 0,
    plugins: [
        animateFill
    ]
});
