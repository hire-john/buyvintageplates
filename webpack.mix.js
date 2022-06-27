const mix = require('laravel-mix');

/* shared scripts and vendor libraries */
mix.js([
    'node_modules/lodash/lodash.min.js',
    'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    'node_modules/axios/dist/axios.min.js',
    'node_modules/vue/dist/vue.global.prod.js',
    'resources/js/shared/shared.js'
    ],'public/js/shared/shared.js');


/* public js scripts */
mix.js([
    'resources/js/public/vendor/startbootstrap-store-homepage.js',
    'resources/js/public/vendor/startbootstrap-store-item.js',
    'resources/js/public/raw/exit-intent-popup.js',
    'resources/js/public/public.js'
    ],'public/js/vintageplates.js');


/* private js scripts */
mix.js([
    
    'resources/js/private/raw/side-bar-toggle.js',
    'resources/js/private/private.js'
    ],'public/js/private/portal/portal.js');


/* public and private vue apps */
mix.js('resources/js/public/vue/vue-app.js', 'public/js/vue-app.js').vue();
mix.js('resources/js/private/vue/vue-app.js', 'public/js/private/portal/vue-app.js').vue();

/* shared SASS and CSS */
mix.sass('resources/sass/shared/shared.scss', 'public/css/shared/shared-sass.css');
mix.styles([
    'resources/css/shared/shared.css'
    ], 'public/css/shared/shared-css.css');
mix.combine(['public/css/shared/shared-sass.css', 'public/css/shared/shared-css.css'], 'public/css/shared/shared.css');



/* public SASS and CSS */
mix.sass('resources/sass/public/public.scss', 'public/css/public-sass.css');
mix.styles([
    'resources/css/public/vendor/startbootstrap-store-homepage.css',
    'resources/css/public/vendor/startbootstrap-store-item.css',
    'resources/css/public/public.css',
    ], 'public/css/public-css.css');
mix.combine(['public/css/public-sass.css', 'public/css/public-css.css'], 'public/css/vintageplates.css');


/* private SASS and CSS */
mix.styles([
    'resources/css/private/private.css'
    ], 'public/css/private/portal/private-css.css');
mix.sass('resources/sass/private/private.scss', 'public/css/private/portal/private-sass.css');
mix.combine([
    'public/css/private/portal/private-sass.css', 
    'public/css/private/portal/private-css.css'], 
    'public/css/private/portal/portal.css');


mix.version([
    'public/js/shared/shared.js',
    'public/js/vue-app.js',
    'public/js/private/portal/vue-app.js',
    'public/js/vintageplates.js',
    'public/js/private/portal/portal.js',
    'public/css/shared/shared.css',
    'public/css/vintageplates.css',
    'public/css/private/portal/portal.css'
    ]);

