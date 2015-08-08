var folders = require('gulp-folders')
    concat  = require('gulp-concat')
  , path    = require('path')
;


gulp.task('core-css-all', folders(source, function(folder){
  return gulp.src(path.join(source, folder, folder+'.scss'))
    .pipe(css_sass().on('error', on_error))
    .pipe(concat(folder + '.css'))
    .pipe(gulp.dest(build + folder))
    .pipe(browserSync.stream());
}));

