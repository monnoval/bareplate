var project = 'bareplate'
  , proxy   = 'localhost/' + project
;

module.exports = {
  project: project,
  source:  './src/',
  bower:   './bower_components/',
  build:   './build/',
  dist:    './dist/',
  proxy:   proxy,
  site: {
    host: "your.host.name",
    user: "yourUsername",
    key: "/path/to/your/.ssh/key.ppk",
    remotePath: "/remote/path/wp-content/theme/" + project
  }
};