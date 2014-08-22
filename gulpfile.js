var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function(){
   gulp.src('app/assets/sass/main.scss')
       .pipe(sass())
       .pipe(autoprefixer('last 10 version'))
       .pipe(gulp.dest('public/css'))
});

gulp.task('watch',function(){
   gulp.watch('app/assets/sass/**/*.scss', ['sass']);
});

gulp.task('default', ['watch']);