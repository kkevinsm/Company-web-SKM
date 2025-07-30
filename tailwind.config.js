import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'fill-progress': 'fill-progress 7s linear infinite',
            },
            keyframes: {
                'fill-progress': {
                    '0%': { width: '0%' },
                    '100%': { width: '100%' },
                }
            },
            colors: {
                youngorange: '#FFF0EA',
            },
        },
    },

    plugins: [
        forms, require('@tailwindcss/aspect-ratio'),
    ],
};
