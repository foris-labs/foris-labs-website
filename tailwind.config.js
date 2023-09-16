/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            animation: {
                'float-3': 'float 3s ease-in-out infinite',
                'float-4': 'float 4s ease-in-out infinite',
                'float-5': 'float 5s ease-in-out infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': {transform: 'translateY(0px)'},
                    '50%': {transform: 'translateY(-10px)'},
                }
            }
        },
    },
    plugins: [],
}
