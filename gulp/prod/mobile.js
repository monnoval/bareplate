var mobile      = 'mobile/'
  , mobile_css  = mobile + 'css/'
  , mobile_lang = mobile + 'languages/';

gulp.task('mobile', ['mobile-js', 'mobile-style-css', 'mobile-css', 'mobile-languages' ]);

gulp.task('mobile-css',  function() {
  // var minifyCss = require('gulp-minify-css');
  // var css_min = lazypipe()
  //   .pipe(rename, {suffix: '.min'})
  //   .pipe(minifyCss, { keepSpecialComments: 1 });

  return gulp.src([source+mobile_css+'*.scss', '!'+source+mobile_css+'_*.scss'])
    .pipe(css_sass().on('error', on_error))
    .pipe(gulp.dest(build+mobile_css))
    // .pipe(css_min().on('error', on_error))
    // .pipe(gulp.dest(build+mobile_css));
});

gulp.task('mobile-style-css', function() {
  return gulp.src(source+mobile+'*.css')
  .pipe(gulp.dest(build+mobile))
});


gulp.task('mobile-js', function() {
  return gulp.src(source+mobile+'**/*.js')
  .pipe(gulp.dest(build+mobile))
});


gulp.task('mobile-languages', function() {
  return gulp.src(source+mobile_lang+'**/*')
  .pipe(gulp.dest(build+mobile_lang));
});
