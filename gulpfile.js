const gulp = require('gulp')
const sass = require('gulp-sass')
const browserSync = require('browser-sync').create()


function style(cb) {
  gulp.src('*.scss')
    .pipe(sass().on('error', sass.logError)) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream())

  cb()
}

function watch() {
  browserSync.init({
    server: {
      baseDir: './',
      index: "index.php"
    },
  })
  gulp.watch('*.scss', style)
  gulp.watch('*.html').on("change", browserSync.reload)
  gulp.watch('*.js').on("change", browserSync.reload)
}

exports.style = style
exports.watch = watch
