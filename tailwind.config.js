/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            height: {
                header: "10%",
                footer: "10%",
            },
        },
    },
    plugins: [],
};
