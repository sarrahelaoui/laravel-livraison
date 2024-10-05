const mix = require('laravel-mix');

mix
  .sass('resources/scss/bootstrap.scss', 'public/css')
  .styles([
      'resources/css/bootstrap.min.css',
      'resources/css/style.css',
  ], 'public/css/app.css')
  .version(); // Optional: This is for versioning your assets.
