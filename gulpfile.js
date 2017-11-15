var gulp = require('gulp');
var sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
    gulp.src('sass/*.sass')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false}))
        .pipe(gulp.dest('bitrix/templates/vrk'))});


gulp.task('prefixer'), function () {
    gulp.src('./css/1/styles.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('bitrix/templates/vrk'))
};
gulp.task('sass:watch', function () {
    gulp.watch('sass/*.sass', ['sass']);
});