var proxy = require('../config').proxy;


gulp.task('browser-sync', ['build'], function() {

  browserSync.init({
    proxy: proxy,
    online: true,
    // browser: ["firefox"]
    browser: ["google chrome"]
  });

  gulp.watch(source+'scss/*.scss', ['core-css']);
  gulp.watch(source+"**/*.php").on("change", browserSync.reload);

  for(var index in tpl) {
    var dir = tpl[index];
    tpl_scripts( dir );
    console.log( '-[scripts] ' + dir );
  }

});