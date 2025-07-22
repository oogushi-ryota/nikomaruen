// === 外部ライブラリ読み込み ===
import $ from "jquery";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

// === ユーティリティライブラリ読み込み ===
import { initSmoothScroll, initAnchorSmoothScroll } from "./utils/scrollUtils.js";
import { initSwiper01, initSwiper02 } from "./utils/swiperUtils.js";
import { initScrollFadeIn, initClipPathAnimation, initStaggerFadein } from "./utils/scrollEffects.js";
import { initHamburgerMenu } from "./utils/hamburgerUtils.js";
import { animateInitialTextSplit, animateSplitTextOnScroll } from "./utils/splitTextUtils.js";

// ▼GSAP に ScrollTrigger を登録
gsap.registerPlugin(ScrollTrigger);
// ▲GSAP に ScrollTrigger を登録

// HTMLの構造がすべて解析されて、DOM操作が安全に行える状態になったタイミングで実行
window.addEventListener('DOMContentLoaded', () => {
  // initSwiper01();                // ← スワイパー
  // initSwiper02();                // ← スワイパー
  // animateSplitTextOnScroll();   // ← スクロール連動のテキストアニメーション

  // initAnchorSmoothScroll();     // ← スムーススクロール
  // initScrollFadeIn();           // ← フェードイン
  // initClipPathAnimation();      // ← クリップパスアニメーション
  // initStaggerFadein();          // ← 順番にフェードイン

  // initHamburgerMenu({           // ← ハンバーガーメニュー
  //   navSelector: ".nav",
  //   btnSelector: ".nav-btn",
  //   closeTargetSelector: ".nav__list__item a",
  //   // extraTargets: [".company-name", ".contact-btn"],   // メニューの開閉に連動して .js_active クラスを付けたい要素が複数ある場合に使う
  // });
});