import './bootstrap';

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./src/**/*.{html,js}",
      "./node_modules/tw-elements/dist/js/**/*.js"
    ],
    theme: {
      extend: {
        fontFamily:{
          Bacasime: "'Bacasime Antique', serif",
          Geologica: "'Geologica', sans-serif",
        },
      },
    },
    variants:{
      extend:{
        display: ['group-focus']
      },
    },
    plugins: [require("tw-elements/dist/plugin.cjs")],
    darkMode: "class"
  }
