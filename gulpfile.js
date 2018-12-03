var gulp = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
	cleanCSS = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
	sass = require('gulp-sass'),
    terser = require('gulp-terser');

// Set the browser that you want to support
const AUTOPREFIXER_BROWSERS = [
	'ie >= 10',
	'ie_mob >= 10',
	'ff >= 30',
	'chrome >= 34',
	'safari >= 7',
	'opera >= 23',
	'ios >= 7',
	'android >= 4.4',
	'bb >= 10'
];

var styles_input = './assets/src/scss/**/*.scss',
    styles_output = './assets/dist/css/';

// Gulp task to compile SASS, combine & minify CSS files
gulp.task('styles', function () {
	return gulp.src(styles_input)
	.pipe(sass({
		outputStyle: 'expanded',
		precision: 10,
		includePaths: ['.'],
		onError: console.error.bind(console, 'Sass error:')
    }))
	.pipe(autoprefixer({browsers: AUTOPREFIXER_BROWSERS}))
	.pipe(concat('app.css'))
    .pipe(cleanCSS({compatibility: 'ie8'}))
	.pipe(gulp.dest(styles_output))
});

// Gulp task to combine JS & minify JS files
var js_input = './assets/src/js/',
	js_input_npm = './node_modules/',
    js_output = './assets/dist/js/';

gulp.task('scripts', function() {
  	return gulp.src([
	    js_input_npm + 'tiny-slider/dist/tiny-slider.js',
	    js_input_npm + 'wowjs/dist/wow.js',
	    js_input + 'custom.js'
  	])
	.pipe(concat('app.js'))
	.pipe(terser())
	.pipe(gulp.dest(js_output));
});

gulp.task('watch', function() {
	gulp.watch(styles_input, gulp.parallel(['styles']));
  	gulp.watch([
	    js_input_npm + 'tiny-slider/src/tiny-slider.js',
	    js_input_npm + 'wowjs/dist/wow.js',
	    js_input + 'custom.js'
    ],gulp.parallel(['scripts']));
});

gulp.task('default', gulp.series(['watch']));
