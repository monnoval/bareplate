gulp.task('php', function() {
  return gulp.src(
    [source+'**/*.php', '!'+source+'tpl-*/*.php'] // Ignore tpls
  )
  .pipe(changed( build ))
  .pipe(gulp.dest( build ));
});
