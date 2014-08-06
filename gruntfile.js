module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),


    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: ['js/*.js', 'js/*.min.js', 'js/citylink-rl.js'],
        dest: 'js/citylink-rl.min.js'
      }
    },

      sass: {
    dist: {
      files: {
        'css/citylink-rl.css': 'css/citylink-rl.scss',
      }
    }
  }

  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  // Default task(s).
  grunt.registerTask('default', ['uglify','sass']);

};
