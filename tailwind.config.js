import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Work Sans', 'sans-serif'],
                inter: ["Inter", "sans-serif"],
              },
              colors: {
                'primary-purple': '#948ea7',
                'cream': '#f8f5f0',
                'accent-green': '#c4df16',
                'card-bg': 'rgba(255, 255, 255, 0.1)',
                'card-border': '#948ea7',
                'pill-bg': 'rgba(83, 76, 110, 0.15)',
            },
            backdropBlur: {
                'xs': '2px',
                'sm': '4px',
                'md': '8px',
                'lg': '16px',
                'xl': '24px',
                '2xl': '32px',
                '3xl': '48px',
            }
        },
    },
    plugins: [],
};
