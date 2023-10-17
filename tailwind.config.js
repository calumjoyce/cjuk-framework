/** @type {import('tailwindcss').Config} */
module.exports = {
  content: require('fast-glob').sync([
    './*.php'
  ],{ dot: true }),
  theme: {
    extend: {
      fontFamily: {
        'soleil': ['"Soleil"', 'sans-serif']
      },
      colors: {
        'white': '#fff',
        'black': '#000',
        'salix': '#c2d3c0' 
      }
    },
  },
  plugins: [],
}

