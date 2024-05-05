import './bootstrap';
import '../sass/app.scss';

import.meta.glob([
    '../images/**',
]);

let dropdowns = document.querySelectorAll('.dropdown-toggle')
dropdowns.forEach((dd) => {
    dd.addEventListener('click', function (e) {
        let el = this.nextElementSibling
        el.style.display = el.style.display === 'block' ? 'none' : 'block'
    })
})
