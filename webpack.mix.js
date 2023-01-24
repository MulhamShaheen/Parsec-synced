
const path = require("path");
const mix = require("laravel-mix");


mix.alias({
    ziggy: path.resolve("vendor/tightenco/ziggy/dist/vue"),
});

mix.setPublicPath('public/')
    .js('resources/js/app.js', 'js/')
    .vue()
    .webpackConfig({
        resolve: {
            alias: {
                "@": path.resolve(__dirname, "resources/js"),
            },
        },
    })
    .extract()
    .postCss('resources/css/app.css',
        'public/css/',
        [require("tailwindcss"),require("autoprefixer"),]
    ).version();
