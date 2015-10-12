var gulp = require('gulp');
var rename = require('gulp-rename');
var elixir = require('laravel-elixir');


gulp.task("crudetask", function() {

  gulp.src("vendor/bower_downloads/jquery/dist/jquery.js")
      .pipe(gulp.dest("resources/assets/js/"));

  gulp.src("vendor/bower_downloads/bootstrap/less/**")
      .pipe(gulp.dest("resources/assets/less/bootstrap"));

  gulp.src("vendor/bower_downloads/bootstrap/dist/js/bootstrap.js")
      .pipe(gulp.dest("resources/assets/js/"));



  var temp = 'vendor/bower_downloads/datatables-plugins/integration/';

  gulp.src("vendor/bower_downloads/datatables/media/js/jquery.dataTables.js")
      .pipe(gulp.dest('resources/assets/js/'));

  gulp.src(temp + 'bootstrap/3/dataTables.bootstrap.css')
      .pipe(rename('dataTables.bootstrap.less'))
      .pipe(gulp.dest('resources/assets/less/others/'));

  gulp.src(temp + 'bootstrap/3/dataTables.bootstrap.js')
      .pipe(gulp.dest('resources/assets/js/'));

});


elixir(function(mix) {

  mix.scripts([
      'js/jquery.js',
      'js/bootstrap.js',
      'js/jquery.dataTables.js',
      'js/dataTables.bootstrap.js'
    ],
    'public/assets/js/frontend.js',
    'resources/assets'
);


  mix.less('frontend.less', 'public/assets/css/frontend.css');
});