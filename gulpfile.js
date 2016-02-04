//GULP & PLUGINS
var gulp    = require('gulp'),
    plumber = require('gulp-plumber'),
    concat  = require('gulp-concat'),
    rename  = require('gulp-rename'),
    sass    = require('gulp-sass'),
    prefix  = require('gulp-autoprefixer'),
    mincss  = require('gulp-minify-css'),
    jshint  = require('gulp-jshint'),
    uglify  = require('gulp-uglify'),
    clean   = require('gulp-clean'),
    notify  = require('gulp-notify');






//PATHS
var paths = {
    css : {
        dev : 'src/scss/',
        dist: 'dist/css'
    },
    fonts: {
        dev:  'src/fonts/',
        dist: 'dist/css/fonts/'
    },
    js: {
        dev:  'src/js/',
        dist: 'dist/js/'
    },
    img: {
        dev:  'src/images/',
        dist: 'dist/images/'
    }
};






//TASKS

//css
gulp.task('css', function () {
    return gulp.src(paths.css.dev + 'main.scss')
        .pipe(plumber())
        .pipe(sass({ style: 'expanded' }))
        .pipe(prefix('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest(paths.css.dist))
        
        .pipe(rename({suffix: '.min'}))
        .pipe(mincss())
        .pipe(gulp.dest(paths.css.dist))

        .pipe(notify({ message: 'Css task complete, yo!' }));
});


//js
gulp.task('js', function () {
    return gulp.src([paths.js.dev + 'plugins/*.js',paths.js.dev + '*.js'])
        .pipe(plumber())
        .pipe(jshint())
        //.pipe(jshint.reporter('default'))
        .pipe(concat('main.js'))
        .pipe(gulp.dest(paths.js.dist))

        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest(paths.js.dist))

        .pipe(notify({ message: 'Js task complete, yo!' }));
});


//img
gulp.task('img', function() {
  return gulp.src(paths.img.dev + '*')
    .pipe(plumber())
    .pipe(gulp.dest(paths.img.dist))
    .pipe(notify({ message: 'Img task complete, yo!' }));
});


//fonts
gulp.task('fonts', function() {
  return gulp.src(paths.fonts.dev + '**/*')
    .pipe(plumber())
    .pipe(gulp.dest(paths.fonts.dist));
});






//clean
gulp.task('clean', function() {
  return gulp.src( [ paths.css.dist, paths.fonts.dist, paths.js.dist, paths.img.dist ], {read: false})
    .pipe(clean())
    .pipe(notify({ message: 'Clean task complete, yo!' }));
});


//gulpfile
gulp.task('gulpfile', function(){
  return gulp.src('gulpfile.js')
    .pipe(plumber())
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(notify({ message: 'Gulpfile task complete, yo!' }));
});


//watch
gulp.task('watch', function() {

  gulp.watch('gulpfile.js', ['gulpfile']);

  gulp.watch(paths.css.dev + '**/*.scss', ['css']);
  gulp.watch(paths.js.dev + '**/*.js', ['js']);
  gulp.watch(paths.img.dev + '*', ['img']);
  gulp.watch(paths.fonts.dev + '*', ['fonts']); 

});








//default
gulp.task('default', ['clean'], function() {
    gulp.start('css', 'js', 'img', 'fonts' , 'gulpfile', 'watch');
});
