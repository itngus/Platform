var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('./less/app.less', '../dist/css/orchid.css');
    mix.copy('./img/', '../dist/img');
    mix.copy('./vendor/bootstrap/dist/fonts/', '../dist/fonts');
    mix.copy('./vendor/font-awesome/fonts/', '../dist/fonts');
    mix.copy('./vendor/simple-line-icons/fonts/', '../dist/fonts');



    mix.scripts([
        "./vendor/jquery/dist/jquery.min.js",
        "./vendor/bootstrap/dist/js/bootstrap.min.js",
        "./vendor/vue/dist/vue.js",
        "./vendor/vue-resource/dist/vue-resource.js",
        "./vendor/chosen/chosen.jquery.js",
        "./vendor/froala-wysiwyg-editor/js/froala_editor.min.js",
        "./vendor/dropzone/dist/min/dropzone.min.js",
        './vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        "./js/app.js",
        "./js/modules/**",
        "./js/components/**",
        "./js/directives/**",
    ], '../dist/js/orchid.js');

});
