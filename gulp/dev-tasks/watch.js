gulp.task('watch', ['browser-sync'], function() {

  gulp.watch(source+'scss/**/*.scss', ['core-css', 'core-css-all']);
  gulp.watch([source+'js/**/*.js', bower+'**/*.js'], ['core-js']);
  gulp.watch(source+'**/*(*.png|*.jpg|*.jpeg|*.gif)', ['images']);
  gulp.watch([source+'**/*.php', '!'+source+'tpl-*/*.php'], ['php']);
  gulp.watch(source+'languages/*.pot', ['languages']);

  tpl_watch = function( dir ) {
    tpl_php( dir );
    tpl_scripts( dir );
  };

  for(var index in tpl) {
    var dir = tpl[index];
    tpl_watch( dir );
    console.log( '-----[all] ' + dir );
  }

});
