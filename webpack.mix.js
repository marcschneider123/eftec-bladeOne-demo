let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.setPublicPath('public');

mix.js('src/js/app.js', 'public/js')
    .extract(['jquery', 'bootstrap',  'popper.js', 'parsleyjs', 'imagesloaded'])
    //specify load order
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery', 'jquery']
    });

mix.sass('src/sass/app.scss', 'public/css')
    .options({
        // processCssUrls: false   //if true copies all device-mockup images to public dir (slow)
        // purifyCss: true
    });

if (mix.inProduction()) {
    mix.version();
} else {
	// temporary Sourcemap fix
	mix.webpackConfig({ devtool: "inline-source-map" });
	mix.sourceMaps(false); //disable sourceMaps on prod
}

mix.browserSync({
    proxy: process.env.MIX_BS_PROXY,
    files: [
        "public/css/app.css",
        "public/js/app.js",
        "src/views/**/*.php"
    ],
    ghostmode: false,
    open : false
});