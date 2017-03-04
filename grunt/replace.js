module.exports = {
  pathBackgroundIcons: {
    options: {
      patterns: [
        {
          match: /\/tea-shop\/source\/icons/g,
          replacement: '../icons'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/css/layout.css',
        ]
      }
    ]
  },
  pathBackgroundImages: {
    options: {
      patterns: [
        {
          match: /\/tea-shop\/source\/images/g,
          replacement: '../images'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/css/layout.css',
        ]
      }
    ]
  },
  pathFonts: {
    options: {
      patterns: [
        {
          match: /\/tea-shop\/source\/global_third_components\//g,
          replacement: '../'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/css/layout.css'
        ]
      }
    ]
  },
  linkTags: {
    options: {
      patterns: [
        {
          match: /\s{2}<link[^>]+>\n/g,
          replacement: ''
        },
        {
          match: /<\/head>/,
          replacement: '\t\<link rel="stylesheet" href='+ 'css/vendor.min.css' +'>\n\t\<link rel="stylesheet" href=' + 'css/layout.min.css' + '>\n<\/head>'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  scriptTags: {
    options: {
      patterns: [
        {
          match: /\s{4}<script[^>]+><\/script>\n/g,
          replacement: ''
        },
        {
          match: /<\/body>/,
          replacement: '\t\<script src='+ 'js/vendor.min.js' + '></script>\n\t\t\<script src='+ 'js/layout.min.js' +'></script>\n\t<\/body>'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  comments: {
    options: {
      patterns: [
        {
          match: /\s{2}<!--[\d\s\w-]+-->\n/g,
          replacement: ''
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  htmlLinks_toHome: {
    options: {
      patterns: [
        {
          match: /\?page=home/g,
          replacement: 'home.html'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  htmlLinks_toProductsList: {
    options: {
      patterns: [
        {
          match: /\?page=products-list/g,
          replacement: 'products-list.html'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  htmlLinks_toProduct: {
    options: {
      patterns: [
        {
          match: /\?page=product/g,
          replacement: 'product.html'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  htmlLinks_toShoppingCart: {
    options: {
      patterns: [
        {
          match: /\?page=shopping-cart/g,
          replacement: 'shopping-cart.html'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  htmlLinks_toAboutUs: {
    options: {
      patterns: [
        {
          match: /\?page=about-us/g,
          replacement: 'about-us.html'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  htmlLinks_toContactUs: {
    options: {
      patterns: [
        {
          match: /\?page=contact-us/g,
          replacement: 'contact-us.html'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  htmlLinks_toBlog: {
    options: {
      patterns: [
        {
          match: /\?page=blog"/g,
          replacement: 'blog.html"'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  htmlLinks_toSinglePost: {
    options: {
      patterns: [
        {
          match: /\?page=blog-single-post/g,
          replacement: 'blog-single-post.html'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  htmlLinks_to404: {
    options: {
      patterns: [
        {
          match: /\?page=404/g,
          replacement: '404.html'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  },
  htmlLinks_toIndex: {
    options: {
      patterns: [
        {
          match: /home.html/g,
          replacement: 'index.html'
        }
      ]
    },
    files: [
      {
        expand: true,
        src: [
          'build/*.html'
        ]
      }
    ]
  }
};