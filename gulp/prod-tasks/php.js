gulp.task('php', function() {
  return gulp.src(
    [source+'**/*.php', '!'+source+'tpl-*/*.php'] // Ignore tpls
  )
  .pipe(gulp.dest( build ));
});
