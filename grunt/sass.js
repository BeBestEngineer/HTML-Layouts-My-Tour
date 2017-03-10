module.exports = {
  build: {
    //todo сделать отдельную задачу для watch и build
    files: {
      'source/components/components-styles/collected-styles/css/layout.css': 'source/components/components-styles/collected-styles/scss/layout.scss',
      'source/components/components-libs/pikaday/pikaday.css': 'source/components/components-libs/pikaday/pikaday-with-variables.scss'
    }
  }
}; 