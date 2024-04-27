import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        // "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        // "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/js/**/*.vue",
    ],

    theme: {
        screens: {
            sm: "576",
            md: "768px",
            lg: "1024px",
            xl: "1440px",
        },
        colors: {
            transparent: "transparent",
            black: "#292929",
            white: "#ffffff",
            pink: "#ED0474",
            grey: "#868686",
            danger: "#aa0000",
        },
        fontFamily: {
            sans: ["Inter", "sans-serif"],
            serif: ["Merriweather", "serif"],
        },
        extend: {
            spacing: {
                "8xl": "96rem",
                "9xl": "128rem",
            },
            borderRadius: {
                none: "0",
                sm: ".125rem",
                DEFAULT: ".25rem",
                "4xl": "2rem",
            },
        },
    },
    corePlugins: {
        container: false,
    },

    plugins: [forms],
};
