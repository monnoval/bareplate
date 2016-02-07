// var fname = require('../config').core.js.filename;
// var js  = require('../config').core.js.js;

run_js_min_task(
    'core-js-min'
  , ['core-js']
  , [prod+'js/**/*.js', '!'+prod+'js/**/*.min.js']
  , prod+'js/'
);

run_js_task(
    'core-js'
  , source+'js/core.js'
  , prod+'js'
  // , fname
  // , js
);
