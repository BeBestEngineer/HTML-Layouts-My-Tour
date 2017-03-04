module.exports = {
  options: {
    shorthandCompacting: false,
        roundingPrecision: -1
  },
  buildLayoutStyles: {
    files: {
      'build/css/layout.min.css': ['build/css/layout.css']
    }
  },
  buildVendorStyles: {
    files: {
      'build/css/vendor.min.css': ['build/css/vendor.css']
    }
  }
};