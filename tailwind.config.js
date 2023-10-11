/** @type {import('tailwindcss').Config} */
module.exports = {
  content: require('fast-glob').sync([
    './*.php'
  ],{ dot: true }),
  theme: {
    extend: {},
  },
  plugins: [],
}

