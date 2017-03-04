module.exports = {
  options: {
    map: false,
        processors: [
      require('autoprefixer')({ browsers:
      'Chrome >= 52, ' +
      'Edge >= 13, ' +
      'ff >= 48, ' +
      'ie >= 10, ' +
      'Opera >= 38, ' +
      'Safari >= 9, ' +
      'iOS >=9, ' +
      'ChromeAndroid >= 50, ' +
      'UCAndroid >= 0, ' +
      'Android >= 4.4, ' +
      'ExplorerMobile >= 10, ' +
      'iOS >= 9, ' +
      'OperaMobile >= 0, ' +
      ''
      })
    ]
  },
  sourceLayoutStylesPrefixes: {
    src: 'source/global_styles_components/collected_styles/css/layout.css'
  }
};