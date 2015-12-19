var project = 'bareplate'
  , proxy   = project + '.dev'
;

module.exports = {
  project: project,
  source:  './src/',
  bower:   './bower/',
  build:   './build/',
  dist:    './dist/',
  proxy:   proxy,
  site: {
    host: "your.host.name",
    user: "yourUsername",
    key: "/path/to/your/.ssh/key",
    remotePath: "/remote/path/wp-content/theme/" + project
  }
};
