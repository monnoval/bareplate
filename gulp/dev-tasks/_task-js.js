run_js_task = function( name, src, dest ) {
  var include = require('gulp-include');
  gulp.task(name, function(){
    return gulp.src(src)
      .pipe(changed(dest))
      .pipe( include({ extensions: 'js' }) )
      .pipe(gulp.dest( dest ))
      .pipe(browserSync.stream());
  });
};