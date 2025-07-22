import $ from "jquery"; // ← 忘れずに！

// ▼ハンバーガーメニュー
export function initHamburgerMenu({
  navSelector = ".nav",
  btnSelector = ".nav-btn",
  closeTargetSelector = ".nav__list__item a",
  extraTargets = [],
  lenisInstance = null,
} = {}) {
  const $nav = $(navSelector);
  const $btn = $(btnSelector);
  const $body = $("body");
  const $closeTargets = $(closeTargetSelector);
  const $extraEls = extraTargets.map(sel => $(sel));

  function toggleMenu(isOpen) {
    const method = isOpen ? "addClass" : "removeClass";

    $nav[method]("js_active");
    $btn[method]("js_active");
    $body[method]("js_active");
    $extraEls.forEach($el => $el[method]("js_active"));

    if (lenisInstance) {
      isOpen ? lenisInstance.stop() : lenisInstance.start();
    }
  }

  // ハンバーガークリック
  $btn.on("click", () => {
    const isOpening = !$nav.hasClass("js_active");
    toggleMenu(isOpening);
  });

  // メニュー内リンククリック時に閉じる
  $closeTargets.on("click", () => {
    toggleMenu(false);
  });
}
// ▲ハンバーガーメニュー