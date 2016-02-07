var path = require('path');
var glob = require('glob');


tpl_folders = glob.sync(source+'tpl-*').forEach(function( dir ) {
  dir_base = path.basename( dir );
  console.log( dir_base );

  add_dir = [ dir_base ]
  tpl.push.apply(tpl, add_dir);
});

run_tpl_task = function() {

  for(var index in tpl) {
    var dir = tpl[index];

    run_css_task(
        dir+'-css'
      , [source+dir+'/'+dir+'.scss', '!'+source+dir+'/_*.scss'] // Ignore partials
      , prod+ dir
    );

    run_js_min_task(
        dir+'-js-min'
      , [dir+'-js']
      , [prod+ dir +'/*.js', '!'+prod+ dir +'/*.min.js']
      , prod+ dir +'/'
    );

    run_js_task(
        dir+'-js'
      , source+ dir +'/'+ dir +'.js'
      , prod+ dir
    );

    run_php_task(
        dir+'-php'
      , source+dir+'/'+dir
      , prod+ dir
    );

  }

};
run_tpl_task();