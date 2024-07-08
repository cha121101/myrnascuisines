/** @type {import('tailwindcss').Config} */
export default {

  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens:{
        'print': { 'raw': 'print' },
      },
      fontFamily: {
        nunito: "Nunito, sans-serif",
        bacasime: 'Bacasime Antique', 
        geologica: 'Geologica',
        script: 'Style Script',
        euphoria: 'Euphoria Script',
        tangerine: 'Tangerine',
      },
    },
  },
  plugins: [],
}

