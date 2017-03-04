module.exports = {
  options: {
    livereload: true
  },
  styles: {
    files: ['source/**/*.less'],
        tasks: [
      'clean:sourceLayoutStyles', 'clean:buildLayoutStyles',
      'concat:sourceLayoutStyles',
      'less',
      'postcss',
      'cmq',
      'csscomb',
      'copy:buildStyles',
      'replace:pathBackgroundIcons', 'replace:pathBackgroundImages', 'replace:pathFonts',
      'cssmin:buildLayoutStyles'
    ]
  },
  scripts: {
    files: ['source/**/*.js'],
        tasks: [
      'clean:sourceLayoutScripts', 'clean:buildLayoutScripts',
      'concat:sourceLayoutScripts',
      'copy:buildScripts',
      'uglify:buildLayoutScripts'
    ]
  }
};