module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          "../css/main.css": "main.less" // destination file and source file
        }
      }
    },
    watch: {
        html: {
            files: ['index.html','**/*.css'],
            options: {
                livereload:true,
                nospawn: true
            }
        },
      styles: {
        files: ['*.less'], // which files to watch
        tasks: ['less'],
        options: {
            livereload:true,
            nospawn: true
        }
      }
    }
  });

  grunt.registerTask('default', ['less', 'watch']);
};
