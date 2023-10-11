const mix = require('laravel-mix');

mix.postCss('./src/assets/css/tailwind.css', './dist/assets/css/tailwind.css', [
	require('tailwindcss'),
	require('postcss-nested')
])
.options({
	processCssUrls: false
});
