module.exports = {
  options: {
    livereload: true
  },
  markup: {
    files: ['source/modules/**/*.php'],
    tasks: []
  },
  styles: {
    files: ['source/**/*.scss'],
    tasks: [
      'clean:sourceLayoutStyles', 'clean:buildLayoutStyles',
      'concat:sourceLayoutStyles',
      'sass',
      // 'postcss',
      // 'cmq',
      // 'csscomb',
      // 'copy:buildStyles',
      // 'replace:pathBackgroundIcons', 'replace:pathBackgroundImages', 'replace:pathFonts',
      // 'cssmin:buildLayoutStyles'
    ]
  },
  scripts: {
    files: ['source/**/*.js'],
        tasks: [
      'clean:sourceLayoutScripts', 'clean:buildLayoutScripts',
      'concat:sourceLayoutScripts',
      // 'copy:buildScripts',
      // 'uglify:buildLayoutScripts'
    ]
  }
};