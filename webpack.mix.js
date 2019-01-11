const mix = require('laravel-mix');

mix.scripts([
   'resources/js/axios.js',
   'resources/js/materialize.js',
   'resources/js/fontawesome.js',
   'resources/js/function.js',
], 'public/js/app.js')
.styles([
  'resources/css/materialize.css',
  'resources/css/style.css',
  'resources/css/fontawesome.css',
], 'public/css/app.css');
