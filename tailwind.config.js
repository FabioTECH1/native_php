/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "media", // This makes it follow OS settings automatically
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
