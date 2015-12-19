gulp.task('images', function() {
  return gulp.src(source+'**/*(*.png|*.jpg|*.jpeg|*.gif|*.ico|*.svg)')
  .pipe(gulp.dest(build));
});