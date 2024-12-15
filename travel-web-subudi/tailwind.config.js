import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js', // Pastikan JS tercakup
        './resources/css/**/*.css', // Pastikan CSS juga tercakup jika diperlukan
    ],
    safelist: [
        'bg-gradient-to-r',
        'from-blue-start',
        'to-pink-end',
      ],
      theme: {
        extend: {
          fontFamily: {
            poppins: ['Poppins', 'sans-serif'], 
            inter: ['Inter', 'sans-serif'],     
          },
          colors: {
            'blue': '#0083B0', 
            'pink': '#DB009E',
            'purple-gradient': '#5D50C6',
            'pink-gradient': '#F85E9F',
          },
        },
      },

    plugins: [require('@tailwindcss/forms')],
};
