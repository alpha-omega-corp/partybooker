/** @type {DefaultColors} */
const colors = require("tailwindcss/colors");
import preset from './vendor/filament/support/tailwind.config.preset'

module.exports = {
    content: ["./resources/**/*.blade.php", "./vendor/filament/**/*.blade.php"],
    theme: {
        darkMode: 'class',
        preset: [preset],
        extend: {
            colors: {
                danger: colors.red,
                primary: colors.purple,
                success: colors.green,
                warning: colors.yellow,
                info: colors.cyan,
                gray: colors.gray,
                custom: colors.amber,
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};


