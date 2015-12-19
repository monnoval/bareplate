run_css_task = function( name, src, dest ) {
  gulp.task(name, function() {
    return gulp.src(src) // Ignore partials
      // .pipe(changed(dest, {extension: '.css'}))
      // .pipe(changed(dest))
      .pipe(css_sass().on('error', on_error))
      .pipe(gulp.dest(dest))
      .pipe(browserSync.stream());
  });

};
