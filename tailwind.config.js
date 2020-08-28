module.exports = {
  important: true,
  purge: [
    './modules/**/includes/frontend.php'
  ],
  theme: {
    fontFamily: {
      body: ["Tahoma", "Helvetica", "Helvetica", "Arial", "sans-serif"],
    },
    extend: {
      colors: {
        'isic-light-blue': '#9DABC8',
        'isic-dark-blue': '#132266'
      }
    }
  },
  variants: {},
  plugins: [],
}
