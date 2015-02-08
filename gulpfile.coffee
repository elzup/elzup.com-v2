gulp = require 'gulp'
gutil = require 'gulp-util'

$ = require('gulp-load-plugins')()

# config
src_dir = './src'
public_dir = './public'

$config =
  src:
    jade_dir:   src_dir + '/jade'
    coffee_dir: src_dir + '/coffee'
    stylus_dir: src_dir + '/stylus'
  public:
    html_dir: public_dir + '/html'
    css_dir:  public_dir + '/css'
    js_dir:   public_dir + '/js'
    img_dir:  public_dir + '/img'

$config.src.jade_files   = [$config.src.jade_dir + '/*.jade', $config.src.jade_dir + '/*/*.jade']
$config.src.coffee_files = $config.src.coffee_dir + '/*.coffee'
$config.src.stylus_files = $config.src.stylus_dir + '/*.styl'

# error handle
handleError = (err) ->
  gutil.log err
  gutil.beep()
  this.emit 'end'

# tasks
gulp.task 'html', ->
#   console.log $config.src.jade_files
#   console.log $config.src.jade_dir
  gulp
    .src $config.src.jade_files
    .pipe $.jade()
    .on 'error', handleError
    .pipe gulp.dest $config.public.html_dir

gulp.task 'js', ->
  gulp
    .src $config.src.coffee_files
    .pipe $.coffee
      bare: true
    .on 'error', handleError
    .pipe gulp.dest $config.public.js_dir

gulp.task "style", ->
  gulp
    .src "stylus/*.styl"
    .pipe $.stylus()
    .on 'error', handleError
    .pipe gulp.dest "css/"

# watch
gulp.task 'watch', ->
  gulp.watch $config.src.jade_dir, ['html', "js", "style"]

#load
gulp.task 'default', ['html', "js", "style"]
