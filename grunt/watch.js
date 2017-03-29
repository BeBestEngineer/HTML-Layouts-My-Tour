module.exports = {
  options: {
    livereload: true
  },
  gruntModulesSettings: {
    files: ['grunt/*.js'],
    tasks: []
  },
  markup: {
    files: ['source/modules/**/*.php'],
    tasks: []
  },
  styles: {
    files: [
      'source/**/*.scss'
    ],
    tasks: [
      'clean:sourceLayoutStyles', 'clean:buildLayoutStyles', 'clean:sourcePikADayStyles', 
      'concat:sourceLayoutStyles',
      'concat:sourcePikADayStyles',
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
    files: [
      'source/**/*.js',
      '!source/components/components-scripts/collected-scripts/layout.js',

      '!source/components/components-frameworks/**/*.css',
      '!source/components/components-libs/**/*.css',
      '!source/components/components-frameworks/**/*.js',
      '!source/components/components-libs/**/*.js'
    ],
    tasks: [
      'clean:sourceLayoutScripts', 'clean:buildLayoutScripts',
      'concat:sourceLayoutScripts',
      // 'copy:buildScripts',
      // 'uglify:buildLayoutScripts'
    ]
  }
};