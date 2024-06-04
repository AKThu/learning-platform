import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            dropShadow: {
                'xl-green': '0 0 10px rgba(134, 239, 172, 0.25)',
                'xl-sky': '0 0 10px rgba(22, 136, 201, 0.5)',
            },
            colors: {
                'accent': '#1688C9',
            }
        },
    },

    plugins: [forms],
};
