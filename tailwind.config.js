module.exports = {
  future: {},
  purge: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue'
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Niramit', 'Sans-serif']
      }
    }
  },

  variants: {
    opacity: ['responsive', 'hover', 'focus', 'disabled']
  },
  plugins: []
};
