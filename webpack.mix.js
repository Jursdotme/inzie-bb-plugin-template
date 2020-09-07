const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const PrefixWrap = require("postcss-prefixwrap");

mix.postCss('./tailwind.css', './build/style.css',
  [
    tailwindcss('./tailwind.config.js'),
    PrefixWrap(".inzite-module")
  ]
);