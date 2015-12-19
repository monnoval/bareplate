run_php_task = function( name, src, dest ) {
  gulp.task(name, function() {
    return gulp.src( src + '*.php' )
    .pipe(gulp.dest( dest ));
  });
};