let gulp = require('gulp'),
	sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require("gulp-autoprefixer"),
    wait = require('gulp-wait'),
    notify = require("gulp-notify"),
    plumber = require("gulp-plumber"),
	 browserSync = require('browser-sync').create();

gulp.task('default', function(done) {

    browserSync.init({
		proxy: "http://wp-sura.loc/"
    });

    gulp.watch("./**/*.php").on('change', () => {
      browserSync.reload();
      done();
    });

    done();
});


