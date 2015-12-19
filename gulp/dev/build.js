setup_tasks_for_build = function() {

  for(var index in tpl) {
    var dir = tpl[index];
    var tpl_tasks = [
      dir+'-css'
    , dir+'-js'
    , dir+'-php'
    ];
    tasks.push.apply(tasks, tpl_tasks)
  }
  // console.log( tasks );

};
setup_tasks_for_build();

gulp.task('build', tasks);
