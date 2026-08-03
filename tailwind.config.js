/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                navy: '#16233D',
                blueMedium: '#2E5C9A',
                blueLight: '#4A7FC7',
                orange: '#F5A623',
                lightGray: '#F4F6F9',
            },
            fontFamily: {
                sora: ['Sora', 'sans-serif'],
            },
        },
    },
    plugins: [],
}