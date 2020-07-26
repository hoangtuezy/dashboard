const { watch,series,src, dest } = require('gulp');
const purgecss = require('gulp-purgecss');
const sass = require('gulp-sass');
var removeEmptyLines = require('gulp-remove-empty-lines');
function purgeTask(cb){
	return src('src/assets/**/*.css')
        .pipe(purgecss({
            content: ['src/index.html']
        }))
        .pipe(dest('build/css'));
        cb();
}
function defaultTask(cb) {
  // place code for your default task here
  cb();
}
function scssTask(cb){
  return src("src/**/*.scss")
  .pipe(sass({outputStyle: 'compact'}).on('error', sass.logError))
  .pipe(removeEmptyLines())
  .pipe(dest('../public/css'));
  cb();
}
function sassTask(cb){
  return src("src/**/*.sass")
  .pipe(sass({outputStyle: 'compact'}).on('error', sass.logError))
  .pipe(removeEmptyLines())
  .pipe(dest('../public/css'));
  cb();
}
function mini(cb) {
  // watch('src/**/*.scss', rpa);
  // watch('minitheme/miligram/**/*.sass', mini_default);
  // watch('minitheme/miligram/**/*.scss', mini_default);
  watch('src/**/*.scss', scssTask);
  watch('src/**/*.sass', sassTask);
  // watch('minitheme/default.scss', mini_default);
  cb();
}
exports.mini = series(defaultTask,mini);
exports.default = purgeTask;