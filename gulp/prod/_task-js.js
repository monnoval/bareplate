run_js_min_task = function( name, deps, src, dest ) {
  gulp.task(name, deps, function() {
    var uglify = require('gulp-uglify');
    var js_min = lazypipe()
      .pipe(rename, {suffix: '.min'})
      .pipe(uglify);

    return gulp.src(src)
      .pipe(js_min().on('error', on_error))
      .pipe(gulp.dest(dest));
  });
};

run_js_task = function( name, src, dest ) {
  var include = require('gulp-include');
  gulp.task(name, function(){
    return gulp.src(src)
      .pipe( include({ extensions: 'js' }) )
      .pipe(gulp.dest( dest ));
  });
};