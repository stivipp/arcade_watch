const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'light-blue': colors.lightBlue,
        cyan: colors.cyan,
      },
      outline: {
        gray: '1rem solid #c7c7c7',        
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
