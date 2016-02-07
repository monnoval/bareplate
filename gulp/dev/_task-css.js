run_css_task = function( name, src, dest ) {
  gulp.task(name, function() {
    return gulp.src(src) // Ignore partials
      .pipe(css_sass().on('error', on_error))
      .pipe(gulp.dest(dest))
      .pipe(browserSync.stream());
  });

};
