// import preset from './vendor/filament/support/tailwind.config.preset'


export default {
    // presets: [preset],
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
            colors: {
                'ff4343': '#FF4343',
                'ff9999': '#FF9999',
                '16A4E1': '#16A4E1',
                '0499D9': '#0499D9',
                'FF9649': '#FF9649',
                'FF9D43': '#FF9D43',
                '67249B': '#67249B',
                '1CBB6F': '#1CBB6F',
                '1E1E1E': '#1E1E1E',
            },
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
            'burbank': ['Burbank', 'sans-serif'],
            'josefin': ['Josefin Sans', 'sans-serif'],
        },

    },
    plugins: [],
}
