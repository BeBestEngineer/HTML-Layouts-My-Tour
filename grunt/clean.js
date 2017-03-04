module.exports = {
  build:         ['build'],

  sourceLayoutStyles:  ['source/components/components-styles/collected-styles/css/layout.css', 'source/components/components-styles/collected-styles/scss/layout.scss'],
  sourceVendorStyles:  ['source/components/components-styles/collected-styles/css/vendor.css'],
  sourceLayoutScripts: ['source/components/components-scripts/collected-scripts/layout.js'],
  sourceVendorScripts: ['source/components/components-scripts/collected-scripts/vendor.js'],

  buildLayoutStyles:   ['build/css/layout.css', 'build/css/layout.min.css'],
  buildVendorStyles:   ['build/css/vendor.css', 'build/css/vendor.min.css'],
  buildLayoutScripts:  ['build/js/layout.js', 'build/js/layout.min.js'],
  buildVendorScripts:  ['build/js/vendor.js', 'build/js/vendor.min.js']
};