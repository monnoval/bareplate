var proxy = require('../config').proxy;


gulp.task('browser-sync', ['build'], function() {

  browserSync.init({
    proxy: proxy,
    online: true,
    open: false,
    browser: ["google chrome"]
  });

  gulp.watch(source+'scss/*.scss', ['core-css']);
  gulp.watch(source+"**/*.php").on("change", browserSync.reload);
  gulp.watch(source+'**/*(*.png|*.jpg|*.jpeg|*.gif|*.ico|*.svg)', ['images']).on("change", browserSync.reload);
  gulp.watch(source+'mobile/**/*.scss', ['mobile-css']);
  gulp.watch(source+'mobile/**/*.js', ['mobile-js']);

  for(var index in tpl) {
    var dir = tpl[index];
    tpl_scripts( dir );
    console.log( '-[scripts] ' + dir );
  }

});