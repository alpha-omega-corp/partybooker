
const configs = {
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
