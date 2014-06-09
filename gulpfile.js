var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var minifyCSS = require("gulp-minify-css");
var rename = require("gulp-rename");
var concat = require('gulp-concat');


gulp.task('sass', function () {
    gulp.src('src/sass/main.scss')
        .pipe(plumber())
        .pipe(sass({
            //sourceComments: 'map'
        }))
        .pipe(gulp.dest('/css/'))
        .pipe(minifyCSS({
            keepSpecialComments: 0
        }))
        .pipe(rename({ extname: '.min.css' }))
        .pipe(gulp.dest('./css/'));
});

gulp.task('default' , function(){
    gulp.watch('**/*.scss', ['sass']);
});