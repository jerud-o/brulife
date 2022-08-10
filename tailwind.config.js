/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/**/*.{html,js,php,css}",
    "./assets/**/*.{html,js,php,css}"
    
  ],
  theme: {

    extend: {
      colors: {
        "primary-green": "	hsl(135, 100%, 27%)",
        "primary-green-darker": "hsl(137, 98% , 21%)" ,
        "primary-red": "#E00A22",
        "primary-gray": "#e0e0e0"
      },
    },
  },
  plugins: [],
}
