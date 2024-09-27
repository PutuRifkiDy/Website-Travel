/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './src/**/*.{html,js,php}',
    './components/**/*.{html,js,php}',
    './index.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'], // Tambahkan font Poppins
      },
      colors: {
        'pink-gradient': '#F85E9F',
        'purple-gradient': '#5D50C6',
      },
    },
  },
  plugins: [],
}
