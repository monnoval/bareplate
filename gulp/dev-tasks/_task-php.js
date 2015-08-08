run_php_task = function( name, src, dest ) {
  gulp.task(name, function() {
    return gulp.src( src + '*.php' )
    .pipe(changed( dest ))
    .pipe(gulp.dest( dest ));
  });
};