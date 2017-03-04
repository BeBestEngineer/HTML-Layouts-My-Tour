module.exports = {
  options: {
    config: '.prettifyrc'
  },
  all: {
    expand: true,
    cwd: 'build/',
    ext: '.html',
    src: ['*.html'],
    dest: 'build/'
  }
};