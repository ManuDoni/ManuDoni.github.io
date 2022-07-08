const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .copy('source/_assets/images/', 'source/assets/build/images/')
    .copy('source/_assets/fonts/', 'source/assets/build/fonts/')
    .options({
        processCssUrls: false,
    })
    .version();
