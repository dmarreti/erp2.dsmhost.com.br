const mix = require('laravel-mix');

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
/*|-- Assets Admin --------------------------------------------------------------------------------------*/
.copy('resources/views/admin/plugins/fontawesome-free/css/all.min.css', 'public/backend/plugins/fontawesome-free/css/all.css')

.styles([
    'resources/views/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
    'resources/views/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    'resources/views/admin/plugins/jqvmap/jqvmap.min.css'
], 'public/backend/plugins/libs.css')

.copy('resources/views/admin/dist/css/adminlte.min.css','public/backend/dist/css/adminlte.css')

.styles([
    'resources/views/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
    'resources/views/admin/plugins/daterangepicker/daterangepicker.css',
    'resources/views/admin/plugins/summernote/summernote-bs4.min.css'
], 'public/backend/plugins/libs2.css')

.copyDirectory('resources/views/admin/build', 'public/backend/build')
.copyDirectory('resources/views/admin/dist/css', 'public/backend/dist/css')
.copyDirectory('resources/views/admin/dist/css/alt', 'public/backend/dist/css/alt')
.copyDirectory('resources/views/admin/dist/img', 'public/backend/dist/img')
.copyDirectory('resources/views/admin/plugins', 'public/backend/plugins')

.copyDirectory('resources/views/admin/dist/js/pages', 'public/backend/dist/js/pages')

.scripts([
    'resources/views/admin/plugins/jquery/jquery.min.js'
], 'public/backend/plugins/jquery/jquery.js')

.scripts([
    'resources/views/admin/plugins/jquery-ui/jquery-ui.min.js'
], 'public/backend/plugins/jquery-ui/jquery-ui.js')

.scripts([
    'resources/views/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/views/admin/plugins/chart.js/Chart.min.js',
    'resources/views/admin/plugins/sparklines/sparkline.js',
    'resources/views/admin/plugins/jqvmap/jquery.vmap.min.js',
    'resources/views/admin/plugins/jqvmap/maps/jquery.vmap.usa.js',
    'resources/views/admin/plugins/jquery-knob/jquery.knob.min.js',
    'resources/views/admin/plugins/moment/moment.min.js',
    'resources/views/admin/plugins/daterangepicker/daterangepicker.js',
    'resources/views/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    'resources/views/admin/plugins/summernote/summernote-bs4.min.js',
    'resources/views/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'
], 'public/backend/plugins/libs.js')

.scripts(['resources/views/admin/dist/js/scripts.js'], 'public/backend/dist/js/scripts.js')

.copy('resources/views/admin/dist/js/adminlte.js','public/backend/dist/js/adminlte.js')

.scripts(['resources/views/admin/dist/js/demo.js'], 'public/backend/dist/js/demo.js')
.scripts(['resources/views/admin/dist/js/pages/dashboard.js'], 'public/backend/dist/js/pages/dashboard.js')
//*******************************************************************************************************//

.options({
    processCssUrls: false
})
.version()