
const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');



gulp.task('sass', function(){
  return gulp.src('./sass/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
        outputStyle: 'expanded',
        sourceComments: 'map'
    }).on("error", sass.logError))
    .pipe(rename('style.css'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./'))

});

gulp.task('watch', function() {
    gulp.watch('./sass/*.scss', gulp.series("sass"));
});