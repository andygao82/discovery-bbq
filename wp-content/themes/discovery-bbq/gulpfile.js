var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
// CSS task
function css() {
    return gulp
        .src([
            'sass/style.scss',
            'sass/*.scss'
        ])
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(concat('styles.css'))
        .pipe(gulp.dest('./css'))
        .pipe(sourcemaps.write())
        .pipe(browserSync.stream());
}


// Watch files
function watch() {
    browserSync.init({
        //browsersync with a php server
        proxy: "http://localhost/discovery-bbq/",
        notify: true
    });
    gulp.watch("./sass/**/*", css);
    gulp.watch('./*.php').on('change',browserSync.reload);
}


exports.css = css;
exports.watch = watch;
