import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    safelist: ["bg-purple", "bg-yellow", "bg-green", "bg-red"],
    theme: {
        extend: {
            colors: {
                background: "#f7f8fc",
                blue: "#328af1",
                bluehover: "#2879bd",
                yellow: "#ffc73c",
                red: "#ec454f",
                redhover: "#b8131d",
                green: {
                    DEFAULT: "#1aab8b",
                    50: "#f0fdf4",
                },

                purple: "#8b60ed",
            },
            maxWidth: {
                custom: "68.5rem",
            },
            spacing: {
                22: "5.5rem",
                44: "11rem",
                70: "17.5rem",
                76: "19rem",
                104: "26rem",
                175: "43.75rem",
            },
            boxShadow: {
                card: "4px 4px 15px 0 rgba(36, 37, 38, 0.08)",
                dialog: "3px 4px 15px 0 rgba(36, 37, 38, 0.22)",
            },
            fontFamily: {
                sans: ["Open Sans", ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                xxs: "0.625rem",
            },
        },
    },

    plugins: [forms],
};
