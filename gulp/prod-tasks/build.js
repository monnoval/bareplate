setup_tasks_for_prod = function() {

  for(var index in tpl) {
    var dir = tpl[index];
    var tpl_tasks = [
      dir+'-css-min'
    , dir+'-js-min'
    , dir+'-php'
    ];
    tasks.push.apply(tasks, tpl_tasks)
  }
  // console.log( tasks );

};
setup_tasks_for_prod();

// gulp.task('build', tasks);

gulp.task('build', function(callback) {
  run(tasks, 'replace-enqueue', callback);
});
