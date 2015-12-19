source = require('../config').source;
build  = require('../config').build;
bower  = require('../config').bower;
tpl    = [];
tasks  = [ 'core-css'
         , 'core-js'
         , 'images'
         , 'languages'
         , 'fonts'
         , 'mobile'
         , 'php'
         ];

tpl_php = function( dir ) {
  gulp.watch(source+dir+'/'+dir+'*.php', [dir+'-php']);
};

tpl_scripts = function( dir ) {
  gulp.watch(source+dir+'/'+dir+'.scss', [dir+'-css']);
  gulp.watch(source+dir+'/'+dir+'.js',   [dir+'-js']);
};

changed 	 = require('gulp-changed');
lazypipe     = require('lazypipe');
sass         = require('gulp-sass');
autoprefixer = require('gulp-autoprefixer');
rename       = require('gulp-rename');

css_sass = lazypipe()
  .pipe(sass, {includePaths: [bower, source+'scss'], errLogToConsole: true})
  .pipe(autoprefixer, 'last 2 versions', 'ie 9', 'ios 6', 'android 4');
on_error = function(err) { console.log(err) }


