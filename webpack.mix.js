const mix = require("laravel-mix");
// const tailwindcss = require('tailwindcss');
const path = require("path");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js("resources/js/app.js", "public/js")
  // .postCss("resources/css/app.css", "public/css", [require("tailwindcss")])
  .webpackConfig({
    output: { chunkFilename: "js/[name].js?id=[chunkhash]" },
    resolve: {
      alias: {
        vue$: "vue/dist/vue.runtime.esm.js",
        "@": path.resolve("resources/js")
      }
    }
  })
  .disableNotifications()
  // .browserSync({
  //   notify: false,
  //   proxy: "127.0.0.1:8000"
  // })
  .version()
  .sourceMaps();
