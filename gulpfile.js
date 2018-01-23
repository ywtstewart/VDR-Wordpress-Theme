'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    cleancss = require('gulp-clean-css'),
 pjson = require('./package.json'),
    proxy = pjson.proxy,
    browserSync = require('browser-sync').create();

var jsFiles = 'src/js/**/*.js',
    jsDest = 'build/js';


gulp.task('scripts', function () {
    return gulp.src(jsFiles)
        .pipe(concat('script.js'))
        .pipe(gulp.dest(jsDest));
});

gulp.task('sass', function () {
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cleancss())
        .pipe(gulp.dest('./build/css'));
});



gulp.task('browser-sync', function () {

    var files = [
        "./build/css/style.css",
        "./build/js/*.js",
        "./*.php",
        "./inc/*.php",
        "./js/*.js"
    ]
    browserSync.init(files, {
        proxy: proxy,
        notify: false,
        proxyReq: [
            function(proxyReq) {
                proxyReq.setHeader('pll_language', 'nl');
            }
        ]
    })
});


gulp.task('watch', function () {
    gulp.watch('./src/sass/**/*.scss', ['sass']);
    gulp.watch('./src/js/**/*.js', ['scripts']);
});

gulp.task('build', ['sass', 'scripts']);
gulp.task('dev', ['build', 'watch'])
gulp.task('default', ['dev', 'browser-sync'])