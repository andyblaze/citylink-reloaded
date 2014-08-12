module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),


    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> • <%= grunt.template.today("yyyy-mm-dd") %> • A Blaze Communications Project • http://blazecommunications.com • - DO NOT EDIT - please use citylink-rl.js or create another */\n'
      },
      build: {
        src: ['js/bootstrap.min.js', 'js/cufon.js', 'js/*.font.js', 'js/citylink-rl.js'],
        dest: 'js/citylink-rl.min.js'
      }
    },

      sass: {
    dist: {
      options: {
        style: 'compressed',
        banner: '/*! <%= pkg.name %> • <%= grunt.template.today("yyyy-mm-dd") %> • A Blaze Communications Project • http://blazecommunications.com • - DO NOT EDIT - please use citylink-rl.js or create another */\n'
      },
      files: {
        'css/citylink-rl.min.css': 'css/citylink-rl.scss',
      }
    }
  },

  watch: {
      files: ['css/*.scss'],
      tasks: ['jshint', 'qunit']
    }

  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  // Default task(s).
  grunt.registerTask('default', ['uglify','sass']);

};
