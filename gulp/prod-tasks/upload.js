gulp.task('upload', function () {
  var sftp = require('gulp-sftp');
  var dist = require('../config').dist;
  var site = require('../config').site;

  return gulp.src(dist+'**/*')
    .pipe(sftp(site));
});