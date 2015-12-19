tpl_scripts = function( dir ) {
  gulp.watch(source+dir+'/'+dir+'.scss', [dir+'-css']);
  gulp.watch(source+dir+'/'+dir+'.js',   [dir+'-js']);
};

tpl_watch = function( dir ) {
  tpl_php( dir );
  tpl_scripts( dir );
};


gulp.task('watch', ['build'], function() {

  gulp.watch(source+'scss/**/*.scss', ['core-css', 'core-css-all']);
  gulp.watch([source+'js/**/*.js', bower+'**/*.js'], ['core-js-min']);
  gulp.watch(source+'**/*(*.png|*.jpg|*.jpeg|*.gif)', ['images']);
  gulp.watch([source+'**/*.php', '!'+source+'tpl-*/*.php'], ['watch-php']);
  gulp.watch(source+'languages/*.pot', ['languages']);
  gulp.watch(source+'mobile/**/*', ['mobile']);

  for(var index in tpl) {
    var dir = tpl[index];
    tpl_watch( dir );
    console.log( '-----[all] ' + dir );
  }

});
