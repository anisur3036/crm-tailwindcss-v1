module.exports = {
  future: {},
  purge: [
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.vue"
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Nunito", "Sans-serif"]
      },
      spacing: {
        "80": "20rem",
        "62": "15.625rem",
      }
    },
    textIndent: theme => theme('spacing'),
  },

  variants: {
    opacity: ["responsive", "hover", "focus", "disabled"]
  },
  plugins: []
};
