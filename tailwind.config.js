/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './src/**/*.{html,js,php}',
    './components/**/*.{html,js,php}',
    './auth/**/*.{html,js,php}', // tambahkan folder lain jika diperlukan
    './admin/**/*.{html,js,php}', // tambahkan folder lain jika diperlukan
    './index.php',
    './detail-card-wisata.php',
    
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
  plugins: [],
};
