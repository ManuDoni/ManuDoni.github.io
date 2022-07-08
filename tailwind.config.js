module.exports = {
  content: require('fast-glob').sync([
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ]),
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Comfortaa', 'sans-serif']
      },
      screens: {
        '3xl': '1920px',
        '4xl': '2560px',
      }
    },
  },
  plugins: [],
};
