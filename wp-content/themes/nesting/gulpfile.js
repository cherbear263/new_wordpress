var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function() {
	console.log('default gulp task...');
});

gulp.task('sass', function() {
	gulp.src('./sass/*.scss')
	.pipe(sass())
	.pipe(gulp.dest('./'));

});

gulp.task('watch', function() {
	gulp.watch('sass/*.scss', ['sass']);
});

gulp.task('default', ['sass']);
