module.exports = {
  options: {
    separator: '\n /*SeparatoR*/ \n'
  },
  sourceLayoutStyles: {
    src: [
      'source/components/components-styles/variables.scss',
      'source/components/components-styles/mixins.scss',
      'source/components/components-styles/*.scss',
      'source/modules/**/*.scss'
    ],
        dest: 'source/components/components-styles/collected-styles/scss/layout.scss'
  },
  sourceVendorStyles: {
    src: [
      'source/components/components-libs/normalize-css-5.0.0/normalize-5.0.0.css',
    ],
        dest: 'source/components/components-styles/collected-styles/css/vendor.css'
  },
  sourcePikADayStyles: {
    src: [
      'source/components/components-styles/variables.scss',
      'source/components/components-libs/pikaday/pikaday.scss'
    ],
    dest: 'source/components/components-libs/pikaday/pikaday-with-variables.scss'
  },
  sourceLayoutScripts: {
    src: [
      'source/components/components-scripts/layout_inception.js',
      'source/components/components-scripts/settings_moment.js',
      'source/components/components-scripts/*.js',
      'source/modules/**/*.js',
      'source/components/components-scripts/layout_completion.js'
    ],
    dest: 'source/components/components-scripts/collected-scripts/layout.js'
  },
  sourceVendorScripts: {
    src: [

    ],
        dest: 'source/components/components-scripts/collected-scripts/vendor.js'
  }
};