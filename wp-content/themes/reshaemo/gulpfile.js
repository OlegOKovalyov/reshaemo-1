// Устанавливаем es6-promise для правильной работы gulp-tasks, e.g. gulp-autoprefixer
require('es6-promise').polyfill();
var gulp          = require('gulp');
var sass          = require('gulp-sass');
var autoprefixer  = require('gulp-autoprefixer');
// Переменные для обработки ошибок
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
// Объявление функции логирования ошибки и передачи звукового сигнала
var onError = function (err) {
  console.log('An error occurred:', gutil.colors.magenta(err.message));
  gutil.beep();
  this.emit('end');
};
// Переменные для обработки файлов JavaScript
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
// Переменные для обработки изображений
var imagemin = require('gulp-imagemin');
var tiny = require('gulp-tinypng-nokey');
// Переменные для BrowserSync и LiveReload
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;



// Создаем SASS-task: компиляция, автопрефикс, вывод файла style.css
gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss')
  .pipe(plumber({ errorHandler: onError }))
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest('./'))
});

// Обеспечиваем watching за scss-файлами
gulp.task('watch', function() {
  browserSync.init({
    files: ['./**/*.php'],
    proxy: 'http://wpreshaemo.loc/',
  });
  gulp.watch('./sass/**/*.scss', ['sass', reload]);
  gulp.watch('./js/*.js', ['js', reload]);
  gulp.watch('images/src/*', ['images', reload]);
});

// Создаем JS-task для обработки файлов JavaScript
gulp.task('js', function() {
  return gulp.src(['./js/*.js'])
    //.pipe(jshint())
    //.pipe(jshint.reporter('default'))
    .pipe(concat('app.js'))
    .pipe(rename({suffix: '.min'})) 
    .pipe(uglify())
    .pipe(gulp.dest('./js'))
});

// Создаем images-task для минимизации изображений
gulp.task('images', function() {
  return gulp.src('./images/src/*')
    .pipe(plumber({errorHandler: onError}))
    .pipe(imagemin({optimizationLevel: 7, progressive: false})) // очень плохо сжимает изображения
    .pipe(gulp.dest('./images'));
});

// Создаем tiny-task для минимизации изображений
gulp.task('tinypng', function(cb) {
    gulp.src('./images/src/*')
        .pipe(tiny())
        .pipe(gulp.dest('./images'));
});


gulp.task('default', ['sass', 'js', /*'tinypng',*/ 'watch']);


