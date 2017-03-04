module.exports = {
  convertPagesToHTML: {
    cwd: 'source',
        command: [
      'php html-converter.php -p404',
      'php html-converter.php -pabout-us',
      'php html-converter.php -pblog-single-post',
      'php html-converter.php -pblog',
      'php html-converter.php -pcontact-us',
      'php html-converter.php -phome',
      'php html-converter.php -pproduct',
      'php html-converter.php -pproducts-list',
      'php html-converter.php -pshopping-cart'
    ].join('&')
  },
  renamePageToIndex: {
    cwd: 'build',
        command: [
      'mv  home.html  index.html'
    ].join('&')
  }
};