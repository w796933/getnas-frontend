var gulp = require('gulp');
var less = require('gulp-less');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');

gulp.task('js', function() {
    return gulp.src([
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/vue/dist/vue.min.js',
            'node_modules/axios/dist/axios.min.js',
            'node_modules/html5shiv/dist/html5shiv.min.js',
            'node_modules/Respond.js/dest/respond.min.js',
            'node_modules/uikit/dist/js/uikit.min.js',
            'node_modules/uikit/dist/js/uikit-icons.min.js'
        ])
        .pipe(gulp.dest('js'))
});

gulp.task('css', function() {
    return gulp.src([
            'node_modules/uikit/dist/css/uikit.min.css',
            'node_modules/font-awesome/css/font-awesome.min.css'
        ])
        .pipe(gulp.dest('css'))
});

gulp.task('fonts', function() {
    return gulp.src([
            'node_modules/font-awesome/fonts/*'
        ])
        .pipe(gulp.dest('fonts'))
});

gulp.task('less', function() {
    return gulp.src(['less/style.less'])
        .pipe(less())
        .pipe(cleanCSS())
        .pipe(gulp.dest('./'))
});

gulp.task('watch-less', function() {
    gulp.watch('less/style.less', ['less'])
});

gulp.task('default', ['css', 'js', 'fonts', 'less']);