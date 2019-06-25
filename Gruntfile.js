module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
      dist: {
        src: [
          'assets/style/sass/*.scss',
        ],
        dest: 'style.css',
      }
    },

    sass: {
      dist: {
        options:{
          sourcemap: 'compressed',
          sourcemap: 'none'
        },
        files: {
          'style.css' : 'style.css'
        }
      }
    },

    autoprefixer:{
      options: {
        browsers: ['last 100 versions']
      },
      dist:{
        files:{
          'style.css':'style.css'
        }
      }
    },

    cssmin: {
      options: {

      },
      target: {
        files: {
          'style.css':'style.css'
        }
      }
    },

    watch: {
      css: {
        files: 'assets/style/sass/*.scss',
        tasks: ['concat', 'sass', 'autoprefixer', 'cssmin']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-concat')
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.registerTask('default',['watch']);
}
