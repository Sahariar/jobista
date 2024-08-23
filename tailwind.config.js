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
                "ista-sd-color": "#123841", // Add your custom color here
                "ista-h2": "#23262F", // Add your custom color here
                "ista-h4": "#121212", // Add your custom color here
            },
            backgroundImage: {
                'hero-banner': "url('/images/hero-banner.webp')",
                }
        },
    },
    plugins: [require("flowbite/plugin")],
};
