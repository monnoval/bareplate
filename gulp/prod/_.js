source = require('../config').source;
build  = require('../config').dist;
bower  = require('../config').bower;
tpl    = [];
tasks  = [ 'core-css'
         , 'core-js-min'
         , 'images'
         , 'languages'
         , 'fonts'
         , 'mobile'
         , 'php'
         ];

tpl_php = function( dir ) {
  gulp.watch(source+dir+'/'+dir+'*.php', [dir+'-php']);
};

lazypipe     = require('lazypipe');
sass         = require('gulp-sass');
autoprefixer = require('gulp-autoprefixer');
rename       = require('gulp-rename');

minifyCss = require('gulp-minify-css');
css_min = lazypipe()
  .pipe(rename, {suffix: '.min'})
  .pipe(minifyCss, { keepSpecialComments: 1 });

css_sass = lazypipe()
  .pipe(sass, {includePaths: [bower, source+'scss'], errLogToConsole: true})
  .pipe(autoprefixer, 'last 2 versions', 'ie 9', 'ios 6', 'android 4');
on_error = function(err) { console.log(err) }


