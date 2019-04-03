var gulp = require('gulp'), 
concatenar = require('gulp-concat'),
imagemin = require('gulp-imagemin'),
    clean = require('gulp-clean');
    
gulp.task('copy', ['clean'], function() {
    return gulp.src('img/**/*')
        .pipe(gulp.dest('dist/img'));
});

gulp.task('clean', function() {
    return gulp.src('dist')
        .pipe(clean());
    
});

gulp.task('build-img', ['copy'], function() {
    gulp.src('dist/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/img'));
});


