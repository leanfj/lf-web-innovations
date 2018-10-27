const gulp = require('gulp');
const sass = require('gulp-sass');

sass.compiler = require('node-sass');

gulp.task('sass', function() {
  return gulp
    .src('./sass/**/*.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'));
});

gulp.task('default', function() {
  gulp.watch('./sass/**/*.sass', gulp.series('sass'));
});
