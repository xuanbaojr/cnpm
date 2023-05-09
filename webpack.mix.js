const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .vue() // Add this line to enable Vue.js support
   .postCss('resources/css/app.css', 'public/css', [
      //
   ]);
