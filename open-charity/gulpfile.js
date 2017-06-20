var gulp = require('gulp');
var wait = require('gulp-wait');
var sass = require('gulp-sass');

gulp.task('styles', function() {
    gulp.src('sass/style.scss')
    	.pipe(wait(1500))
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest('css/'))
});

//Watch task
gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['styles']);
});