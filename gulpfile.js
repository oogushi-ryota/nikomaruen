import gulp from "gulp";
import gulpSass from "gulp-sass";
import * as dartSass from "sass";
import cleanCSS from "gulp-clean-css";
import terser from "gulp-terser";
import imagemin from "gulp-imagemin";
import rename from "gulp-rename";
import concat from "gulp-concat";
import browserSyncLib from "browser-sync";
import esbuild from "gulp-esbuild"; // ✅ `esbuild` を追加
import webp from "gulp-webp"; // ✅ WebP変換用

const browserSync = browserSyncLib.create();
const sass = gulpSass(dartSass);
const { src, dest, watch, series, parallel } = gulp;

// **SCSSコンパイル**
function styles() {
  return src("src/scss/style.scss", { allowEmpty: true })
    .pipe(sass({ includePaths: ["node_modules"] }).on("error", sass.logError)) // ← ★ ここ追加！
    .pipe(cleanCSS())
    .pipe(rename({ suffix: ".min" }))
    .pipe(dest("dist/assets/css"))
    .pipe(browserSync.stream());
}

// **JSをバンドルして `main.min.js` に出力**
function scripts() {
  return src("src/js/main.js") // ✅ `main.js` をエントリーポイントにする
    .pipe(
      esbuild({
        bundle: true, // ✅ 依存関係をバンドル
        minify: true, // ✅ 圧縮
        sourcemap: true, // ✅ ソースマップを有効化
        target: "es6",
        outfile: "main.min.js",
        loader: { ".css": "text" }
      })
    )
    .pipe(dest("dist/assets/js")) // ✅ `dist/assets/js/` に出力
    .pipe(browserSync.stream());
}

// **画像圧縮**
function images() {
  return src("src/img/**/*")
    .pipe(imagemin())
    .pipe(dest("dist/assets/img"));
}

// **WebPに変換**
function convertWebp() {
  return src("src/img/**/*.{jpg,jpeg,png}")
    .pipe(webp())
    .pipe(dest("dist/assets/img"));
}

// **HTMLコピー**
function html() {
  return src("src/html/**/*.html") // ✅ html/配下だけに限定
    .pipe(dest("dist"))            // ✅ html/を基点にそのままdistへ
    .pipe(browserSync.stream())
    .on("end", browserSync.reload);
}

// audio コピー
function audio() {
  return src("src/audio/**/*")
    .pipe(dest("dist/assets/audio"));
}


// **サーバー起動**
function serve() {
  browserSync.init({ server: { baseDir: "dist" } });

  watch("src/scss/**/*.scss", styles);
  watch("src/js/**/*.js", scripts);
  watch("src/img/**/*", series(images, convertWebp));
  watch("src/html/**/*.html", html); // ←ここを限定
}

// **タスクのエクスポート**
// 既存のエクスポートに追加
export { styles, scripts, images, convertWebp, html, audio, serve };

// default（開発用）タスク
export default series(parallel(styles, scripts, images, convertWebp, html, audio), serve);

// build（本番用）タスク
export const build = series(styles, scripts, images, convertWebp, html, audio);