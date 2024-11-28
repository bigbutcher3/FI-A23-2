import gulp from 'gulp';
import changed from 'gulp-changed';
import *as dartSass from 'sass';
import gulpSass from 'gulp-sass';

const sass = gulpSass(dartSass);
import concat from 'gulp-concat';
import uglify from 'gulp-terser';
import cssmin from 'gulp-cssmin';
import rename from 'gulp-rename';
import imagemin from 'gulp-imagemin';
import imageminGifsicle from 'imagemin-gifsicle';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminOptipng from 'imagemin-optipng';
import imageminSvgo from 'imagemin-svgo';
import watch from 'gulp-watch';

let config = {
    defaultConfigDir: './resources/bootstrap',
    defaultCustomDir: './resources/custom',
    defaultJqueryDir: './resources/jquery',
    publicDir: './public'
};
gulp.task(
    'css',
    function () {
        let success = [false, false];
        success[0] = gulp.src([
            config.defaultCustomDir + '/scss/bootstrap/app.scss',
            config.defaultCustomDir + '/css/**/*.scss',
            config.defaultCustomDir + '/css/**/*.css'

        ])//macht aus der scss-Datei eine eigene names "app.css
            .pipe(sass.sync().on('error', sass.logError))
            .pipe(concat('app.css'))
            .pipe(gulp.dest(config.publicDir + '/css'));
        success[1] = gulp.src([
            config.defaultCustomDir + '/scss/bootstrap/app.scss',
            config.defaultCustomDir + '/css/**/*.scss',
            config.defaultCustomDir + '/css/**/*.css'
        ])
            .pipe(sass.sync().on('error', sass.logError))
            .pipe(concat('app.css'))
            .pipe(cssmin())
            .pipe(rename({suffix: '.min'}))
            .pipe(gulp.dest(config.publicDir + '/css'));
        return success[0] && success[1];
    }
);
gulp.task(
    'js', function () {
        return gulp.src([//Befehl laden alles aus dem Ordner
            config.defaultJqueryDir + '/jquery.min.js',
            config.defaultConfigDir + '/js/bootstrap.min.js',
            config.defaultConfigDir + '/js/bootstrap-filestyle.min.js',
            config.defaultCustomDir + '/js/**/*.js'
        ])
            .pipe(concat('app.min.js'))//fasst alle Javascript-Dateien zu einer Datei (app.min.js) zusammen
            .pipe(uglify())              //dann diese Datei minifizieren
            .pipe(gulp.dest(config.publicDir + '/js'));//speichert die Datei in den Ordner dist (config.publicDir + '/js')
    });
gulp.task(
    'fonts',
    function () {
        return gulp.src(config.defaultCustomDir + '/fonts/**/*')
            .pipe(gulp.dest(config.publicDir + '/fonts'));
    }
);
gulp.task(
    'plugins',
    function () {
        return gulp.src(config.defaultCustomDir + '/plugins/**/*')
            .pipe(gulp.dest(config.publicDir + '/plugins'));
    }
);
// Komprimiere Bilder
gulp.task(
    'images',
    function () {
        return gulp.src(config.defaultCustomDir + '/images/**/*')
            .pipe(changed(config.publicDir + '/images'))
            .pipe(imagemin([
                imageminGifsicle({interlaced: true}),
                imageminMozjpeg({quality: 90, progressive: true}),
                imageminOptipng({optimizationLevel: 5}),
                imageminSvgo({
                    plugins: [{
                        name: 'removeViewBox',
                        active: false
                    }]
                })
            ]))
            .pipe(gulp.dest(config.publicDir + '/images'));
    });
gulp.task('watch-all', function () {
    watch(config.defaultCustomDir + '/js/**/*.js', gulp.series('js'));
    watch(config.defaultCustomDir + '/css/**/*.css', gulp.series('css'));
    watch(config.defaultCustomDir + '/scss/**/*.scss', gulp.series('css'));
    watch(config.defaultCustomDir + '/images/**/*', gulp.series('images'));
    watch(config.defaultCustomDir + '/fonts/**/*', gulp.series('fonts'));
});

gulp.task('default', gulp.series('css', 'fonts', 'images', 'js', 'plugins'));
