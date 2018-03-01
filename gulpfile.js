
// Gulp.js configuration
var gulp = require('gulp');

gulp.task('hello', function(){
  console.log('Hello World');

});

var sass = require('gulp-sass');

gulp.task('sass', function(){
	return gulp.src('./sass/**/*.scss')
	.pipe(sass())
	.pipe(gulp.dest('./css'))
});

gulp.task('watch', function(){
	gulp.watch('./sass/**/*.scss', ['sass']);
	
})