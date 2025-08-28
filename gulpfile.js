const gulp = require('gulp');
const dartSass = require('sass');
const gulpSass = require('gulp-sass')(dartSass);
const browserSync = require('browser-sync').create();

// ✅ 設定 PHP 伺服器的 Proxy（請確認 WAMP 的網址，如 `http://localhost/your_project/`）
const proxyURL = 'http://localhost:8888/damingtea/'; // MAMP 預設端口為 8888

// **SCSS 轉換並自動更新**
gulp.task('sass', () => {
    return gulp.src('./public/scss/*.scss')
        .pipe(gulpSass({outputStyle: 'expanded'}).on('error', gulpSass.logError))
        .pipe(gulp.dest('./public/css'))
        .pipe(browserSync.reload({stream: true})); // 使用 reload 而不是 stream
});

// **啟動 WAMP 伺服器並監聽變更**
gulp.task('watch', () => {
    browserSync.init({
        proxy: proxyURL,
        port: 8888,
        open: true,
        notify: false,
        files: ['./public/css/*.css', './public/scss/*.scss'],
        reloadDelay: 0 // 立即重新載入
    });

    gulp.watch('./public/scss/**/*.scss', gulp.series('sass')); // 監聽 SCSS
    gulp.watch(['./public/*.php', './components/*.php']).on('change', browserSync.reload); // 監聽 PHP 變更
});

// **預設任務：編譯 SCSS + 監聽變更**
gulp.task('default', gulp.series('sass', 'watch'));