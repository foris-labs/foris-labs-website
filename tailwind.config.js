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
                'primary': '#16A4E1',
                'primary-light': '#56E1FF',
                'primary-dark': '#0499D9',
                'secondary': '#FF9649',

                'ff4343': '#FF4343',
                'ff9999': '#FF9999',
                '16A4E1': '#16A4E1',
                '0499D9': '#0499D9',
                'FF9649': '#FF9649',
                'FF9D43': '#FF9D43',
                '67249B': '#67249B',
                '1CBB6F': '#1CBB6F',
                '1E1E1E': '#1E1E1E',
                '262626': '#262626',
                '73D5FF': '#73D5FF',
                '56E1FF': '#56E1FF', 
                '06A3DA': '#06A3DA',
                'EEF9FF': '#EEF9FF', 
                '34AD54': '#34AD54',
                '0f5132': '#0f5132',
                'd1e7dd': '#d1e7dd',
                'fc0335': '#fc0335',
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
            'arlon': ['arlon'],
            'burbank2': ['BurBank2'],
        },

    },
    plugins: [],
}
