run_css_task = function( name, src, dest ) {
  gulp.task(name + '-min', function() {
    var minifyCss = require('gulp-minify-css');
  	var css_min = lazypipe()
      .pipe(rename, {suffix: '.min'})
      .pipe(minifyCss, { keepSpecialComments: 1 });

    return gulp.src(src) // Ignore partials
      .pipe(css_sass().on('error', on_error))
      .pipe(gulp.dest(dest))
      .pipe(css_min().on('error', on_error))
      .pipe(gulp.dest(dest));
  });
};
