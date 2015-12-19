// Create task to enable minification in enqueue.php
gulp.task('replace-enqueue', function(){

  var replace = require('gulp-replace');
  gulp.src(source+'inc/enqueue.php')
    .pipe(replace(/\$bareplate_minify \= false/g, '$bareplate_minify = true'))
    .pipe(gulp.dest(build+'inc'));

});