// Create task to enable minification in enqueue.php
gulp.task('replace-enqueue', function(){

  var replace = require('gulp-replace');
  gulp.src(source+'inc/bare-assets.php')
    .pipe(replace(/\$bare_minify \= false/g, '$bare_minify = true'))
    .pipe(gulp.dest(prod+'inc'));

});