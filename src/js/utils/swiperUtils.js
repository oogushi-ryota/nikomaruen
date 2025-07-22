import Swiper from "swiper/bundle";
import "swiper/css/bundle";

// ▼メインビジュアルのスワイパー
export function initSwiper01() {
  const rootFontSize = parseFloat(
    getComputedStyle(document.documentElement).fontSize
  );

  const isMobile = window.matchMedia('(max-width: 767px)').matches;
  const gapInRem = isMobile ? 0 : 0;
  const gapInPx = gapInRem * rootFontSize;

  const swiper = new Swiper(".swiper01", {
    loop: true,
    spaceBetween: gapInPx,

    autoplay: {
      delay: 3000,        // ← 3秒ごとにスライド
      disableOnInteraction: false, // ユーザー操作後も再開
    },

    speed: 800, // ← 追加：スライドの切り替え時間（ms）

    on: {
      init() {
        this.slideToLoop(0, 0, false);
      }
    },
  });

  return swiper;
}
// ▼メインビジュアルのスワイパー

// ▼PIICK UPのスワイパー
export function initSwiper02() {
  const rootFontSize = parseFloat(
    getComputedStyle(document.documentElement).fontSize
  );

  const isMobile = window.matchMedia('(max-width: 767px)').matches;
  const gapInRem = isMobile ? 0 : 3.2;
  const gapInPx = gapInRem * rootFontSize;

  const swiper = new Swiper(".swiper02", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: gapInPx,
    autoplay: {
      delay: 300,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    speed: 1500,
    on: {
      init() {
        this.slideToLoop(0, 0, false);
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // 再開用のタイマーID（複数クリック対策）
  let resumeTimer = null;

  const resumeAutoplay = () => {
    clearTimeout(resumeTimer);
    resumeTimer = setTimeout(() => {
      swiper.autoplay.start();
    }, 3000); // ← 2秒後に再開（お好みで調整）
  };

  document.querySelector(".swiper-button-next")?.addEventListener("click", () => {
    swiper.autoplay.stop();
    swiper.slideNext();
    resumeAutoplay();
  });

  document.querySelector(".swiper-button-prev")?.addEventListener("click", () => {
    swiper.autoplay.stop();
    swiper.slidePrev();
    resumeAutoplay();
  });

  return swiper;
}

// ▼PIICK UPのスワイパー