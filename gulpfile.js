/*
  gulpfile.js
  ===========
  Rather than manage one giant configuration file responsible
  for creating multiple tasks, each task has been broken out into
  its own file in gulp/tasks. Any files in that directory get
  automatically required below.
  To add a new task, simply add a new task file that directory.
  gulp/tasks/default.js specifies the default set of tasks to run
  when you run `gulp`.
*/

gulp = require('gulp');
argv = require('yargs').argv;

if (argv.clean) {

  var del   = require('del');
  var dist  = require('./gulp/config').dist;
  var build = require('./gulp/config').build;
  gulp.task('default', function(cb) {
    del([ build, dist ], cb);
  });

} else if (argv.dev) {

  browserSync = require('browser-sync').create();
  var requireDir = require('require-dir');
  requireDir('./gulp/dev-tasks', { recurse: true });

} else if (argv.prod) {

  var requireDir = require('require-dir');
  requireDir('./gulp/prod-tasks', { recurse: true });

  run = require('run-sequence');
  gulp.task('default', ['watch']);

} else if (argv.upload) {

  var requireDir = require('require-dir');
  requireDir('./gulp/prod-tasks', { recurse: true });

  run = require('run-sequence');
  gulp.task('default', function(callback) {
    run('clean', 'build', 'upload', callback);
  });

}