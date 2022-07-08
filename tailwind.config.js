module.exports = {
  content: require('fast-glob').sync([
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ]),
  theme: {
    extend: {},
  },
  plugins: [],
};
