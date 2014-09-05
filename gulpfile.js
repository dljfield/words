var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var sass_dir = 'app/assets/scss';
var target_css_dir = 'public/css';

gulp.task('css', function() {
    return gulp.src(sass_dir + '/**/*.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 10 version'))
        .pipe(gulp.dest(target_css_dir));
});

gulp.task('watch', function() {
    gulp.watch(sass_dir + '/**/*.scss', ['css']);
});

gulp.task('default', ['watch']);