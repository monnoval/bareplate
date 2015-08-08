run_js_min_task(
    'core-js-min'
  , ['core-js']
  , [build+'js/**/*.js', '!'+build+'js/**/*.min.js']
  , build+'js/'
);

run_js_task(
    'core-js'
  , source+'js/core.js'
  , build+'js'
);
