import preset from './vendor/filament/support/tailwind.config.preset'


export default {
    presets: [preset],
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
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
            },
        },
        fontFamily: {
            'sans': ['Josefin Sans', 'sans-serif'],
            'heading': ['Shantell Sans', 'cursive'],
        }
    },
    plugins: [],
}
