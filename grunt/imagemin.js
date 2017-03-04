module.exports = {
  images: {
    options: {
      optimizationLevel: 3
    },
    files: [{
      expand: true,
      src: ['build/images/**/*.{png,jpg,gif,svg}']
    }]
  }
};