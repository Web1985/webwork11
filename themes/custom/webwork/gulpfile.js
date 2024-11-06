const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');

const paths = {
    scss: './sass/*.scss',
    css: './css'
}

function compileSass(){
    return gulp.src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}))
        .on('error', sass.logError)
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.css));
}

function watchFiles(){
    gulp.watch(paths.scss, compileSass);
}
gulp.task('default', watchFiles);
gulp.task('watch', watchFiles);

