
require('./bootstrap');
import Alpine from 'alpinejs';
import tippy, { animateFill } from 'tippy.js';
import { tsParticles } from "tsparticles-engine";
import { loadFull } from "tsparticles";
import 'tippy.js/animations/scale.css';

window.Alpine = Alpine;
Alpine.start();

tippy('.nav-item', {
    placement: 'right',
    animation: 'scale',
    inertia: true,
    theme: 'navigation'
});

tippy('.open-offcanvas', {
    placement: 'top',
    animation: 'scale',
    inertia: true,
    theme: 'category-door'

});

tippy.setDefaultProps({
    delay: 50,
    plugins: [
        animateFill
    ]
});

async function loadParticles(options) {
    await loadFull(tsParticles);
    await tsParticles.load('tsparticles', options);
}

const configs = {
    fullScreen: {
        enable: true,
        zIndex: 100
    },
    fpsLimit: 60,
    particles: {
        number: {
            value: 0,
            density: {
                enable: true,
                value_area: 800
            }
        },
        color: {
            value: "#ff0000",
            animation: {
                enable: true,
                speed: 180,
                sync: true
            }
        },
        shape: {
            type: "circle",
            stroke: {
                width: 0,
                color: "#000000"
            },
            polygon: {
                nb_sides: 5
            },
            image: {
                src: "https://cdn.matteobruni.it/images/particles/github.svg",
                width: 100,
                height: 100
            }
        },
        opacity: {
            value: 0.5,
            random: false,
            anim: {
                enable: false,
                speed: 3,
                opacity_min: 0.1,
                sync: false
            }
        },
        size: {
            value: 15,
            random: {
                enable: true,
                minimumValue: 5
            },
            animation: {
                enable: true,
                speed: 5,
                minimumValue: 5,
                sync: true,
                startValue: "min",
                destroy: "max"
            }
        },
        links: {
            enable: true,
            color: "#fd7e14"
        },
        move: {
            enable: true,
            speed: 10,
            direction: "none",
            random: false,
            straight: false,
            outMode: "destroy",
            attract: {
                enable: false,
                rotateX: 600,
                rotateY: 1200
            }
        }
    },
    interactivity: {
        detectsOn: "window",
        events: {
            onhover: {
                enable: true,
                mode: "pull"
            },
            onclick: {
                enable: true,
                mode: "push"
            },
            resize: true
        },
        modes: {
            grab: {
                distance: 1000,
                line_linked: {
                    opacity: 1
                }
            },
            bubble: {
                distance: 400,
                size: 40,
                duration: 10,
                opacity: 0.8,
                speed: 3
            },
            repulse: {
                distance: 200
            },
            push: {
                particles_nb: 6
            },
            remove: {
                particles_nb: 2
            },
            trail: {
                delay: 0.005,
                quantity: 5,
                pauseOnStop: true
            }
        }
    },
    retina_detect: true
};


loadParticles(configs);
