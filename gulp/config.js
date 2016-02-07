var proxy   = 'project.dev/';

module.exports = {
  source:  './src/',
  bower:   './bower/',
  dev:     './build-dev/',
  prod:    './build-prod/',
  proxy:   proxy,
  site: {
    host: "your.host.name",
    user: "yourUsername",
    key: "/path/to/your/.ssh/key",
    remotePath: "/remote/path/wp-content/theme/project"
  }
};
