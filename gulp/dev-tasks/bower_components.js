var rename = require('gulp-rename')
  , merge  = require('merge-stream')
;
var fonts = 'fonts/';

gulp.task('bower_components', function() {

  var ext_prefix  = '_external.';

  // PURE CSS Library http://purecss.io
  // var pure_prefix = 'pure.';
  // var pure_name = ext_prefix + pure_prefix;
  // var pure_grids = gulp.src(bower+'pure/grids.css')
  //   .pipe(rename(pure_name + 'grids.scss'))
  //   .pipe(gulp.dest(source+'scss/'));
  // var pure_grids_responsive = gulp.src(bower+'pure/grids-responsive.css')
  //   .pipe(rename(pure_name + 'grids-responsive.scss'))
  //   .pipe(gulp.dest(source+'scss/'));
  // var pure_menus_core = gulp.src(bower+'pure/menus-core.css')
  //   .pipe(rename(pure_name + 'menus-core.scss'))
  //   .pipe(gulp.dest(source+'scss/'));

  // FontAwesome http://fortawesome.github.io/Font-Awesome
  var fa_fonts = gulp.src(bower+'fontawesome/fonts/**/*.{ttf,woff,eot,otf,svg}')
    .pipe(gulp.dest(source + fonts));

  // slick http://kenwheeler.github.io/slick
  // var slick_fonts = gulp.src(bower+'slick.js/slick/fonts/**/*.{ttf,woff,eot,otf,svg}')
  //   .pipe(gulp.dest(source + fonts));

  return merge(
              //   pure_grids
              // , pure_grids_responsive
              // , pure_menus_core
                fa_fonts
              , slick_fonts
              );

});
