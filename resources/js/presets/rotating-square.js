async function loadParticles(options) {
    await loadFull(tsParticles);
    await tsParticles.load('tsparticles', options);
}

const configSquare = {
    particles: {
        stroke: {
            width: 5,
            color: {
                value: [
                    "#5bc0eb",
                    "#fde74c",
                    "#9bc53d",
                    "#e55934",
                    "#fa7921",
                    "#2FF3E0",
                    "#F8D210",
                    "#FA26A0",
                    "#F51720"
                ]
            }
        },
        shape: {
            type: "square",
            options: {
                square: {
                    fill: false
                }
            }
        },
        rotate: {
            value: 0,
            direction: "counter-clockwise",
            animation: {
                enable: true,
                speed: 2,
                sync: true
            }
        },
        size: {
            value: { min: 1, max: 500 },
            animation: {
                enable: true,
                startValue: "min",
                speed: 60,
                sync: true,
                destroy: "max"
            }
        }
    },
    background: {
        color: "#fff"
    },
    emitters: {
        direction: "top",
        position: {
            y: 50,
            x: 50
        },
        rate: {
            delay: 1,
            quantity: 1
        }
    }
};

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
