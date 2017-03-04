module.exports = {
  buildFonts: {
    files: [
      {
        expand: true,
        cwd: "source/global_third_components",
        src: [
          "fonts/**"
        ],
        dest: "build"
      }
    ]
  },
  buildIcons: {
    files: [
      {
        expand: true,
        cwd: "source",
        src: [
          "icons/**"
        ],
        dest: "build"
      }
    ]
  },
  buildImages: {
    files: [
      {
        expand: true,
        cwd: "source",
        src: [
          "images/**"
        ],
        dest: "build"
      }
    ]
  },
  buildStyles: {
    files: [
      {
        expand: true,
        cwd: "source/global_styles_components/collected_styles/css",
        src: [
          "**/*.css"
        ],
        dest: "build/css"
      }
    ]
  },
  buildScripts: {
    files: [
      {
        expand: true,
        cwd: "source/global_js_components/collected_scripts/js",
        src: [
          "**/*.js"
        ],
        dest: "build/js"
      }
    ]
  }
};