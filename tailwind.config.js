/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "ista-pm-color": "#14A077",
                "ista-sd-color": "#123841",
                "ista-h2": "#23262F",
                "ista-h4": "#121212",
                "ista-grey": "#F5F5F5",
                "ista-grey-light": "#F5F5F2",
            },
            backgroundImage: {
                'hero-banner': "url('/images/hero-banner.webp')",
                }
        },
    },
    plugins: [require("flowbite/plugin")],
};
