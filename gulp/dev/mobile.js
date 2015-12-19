var mobile      = 'mobile/'
  , mobile_css  = mobile + 'css/'
  , mobile_lang = mobile + 'languages/';


mobile_sass = lazypipe()
  .pipe(sass, {includePaths: [bower, source+'scss', source+mobile_css], errLogToConsole: true})
  .pipe(autoprefixer, 'last 2 versions', 'ie 9', 'ios 6', 'android 4');

gulp.task('mobile', ['mobile-js', 'mobile-style-css', 'mobile-css' ]);

gulp.task('mobile-css',  function() {
  return gulp.src([source+mobile_css+'*.scss', '!'+source+mobile_css+'_*.scss'])
    .pipe(mobile_sass().on('error', on_error))
    .pipe(gulp.dest(build+mobile_css))
    .pipe(browserSync.stream());
});

gulp.task('mobile-style-css', function() {
  return gulp.src(source+mobile+'*.css')
  .pipe(gulp.dest(build+mobile))
  .pipe(browserSync.stream());
});


gulp.task('mobile-js', function() {
  return gulp.src(source+mobile+'**/*.js')
  .pipe(gulp.dest(build+mobile))
  .pipe(browserSync.stream());
});

gulp.task('mobile-languages', function() {
  return gulp.src(source+mobile_lang+'**/*')
  .pipe(gulp.dest(build+mobile_lang));
});

