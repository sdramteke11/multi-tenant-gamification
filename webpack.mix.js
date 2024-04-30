const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .react(); // Add this line to compile React components
