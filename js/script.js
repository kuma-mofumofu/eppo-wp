jQuery(function () {
  /* ===============================================
  # 幅375px未満はviewportを固定する
  =============================================== */
  const switchViewport = () => {
    let viewport = document.querySelector('meta[name="viewport"]');
    if (viewport === null) {
      return;
    }
    const value =
      window.outerWidth > 375
        ? 'width=device-width,initial-scale=1'
        : 'width=375';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  };
  window.addEventListener('resize', switchViewport);
  switchViewport();

  /* ===============================================
  # ハンバーガーメニュー
  =============================================== */
  $('.menu').on('click',function () {
    $(this).toggleClass('is-open');
    $('#header').toggleClass('is-active');
    $('#main').toggleClass('is-active');
    $('#footer').toggleClass('is-active');
  });

  /* ===============================================
  # ウィンドウ幅に応じてfont-size変更
  =============================================== */
  // 「えっぽについて」の丸の中
  

});