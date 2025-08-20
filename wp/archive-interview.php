<?php
/*
Template Name: 職員インタビュー
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <div class="c-breadcrumb">
      <nav class="c-breadcrumb__nav"> 
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-breadcrumb__link">ホーム</a>
          </li>
          <li class="c-breadcrumb__item">
            <span class="c-breadcrumb__link">職員インタビュー</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-interview-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">INTERVIEW</span>
              <h2 class="c-under-fv__ja">
                <span class="p-interview-fv__txt-obj u-fs-28">職員インタビュー</span>
              </h2>
            </hgroup>
          </div>
        </div>
      </div>
    </section>

    <section class="p-interview-archive">
      <div class="c-inner">
        <ul class="p-interview-archive__list">
          <li class="p-interview-archive__item">
            <a href="/nikomaruen/single" class="p-interview-archive__link">
              <div class="p-interview-archive__img-wrap">
                <picture class="p-interview-archive__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.jpg" alt="インタビューのサムネイル">
                </picture>
                <span class="p-interview-archive__name" style="background-color: #852A17;">3年目 : M先生</span>
              </div>
              <p class="p-interview-archive__txt">このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。</p>
            </a>
          </li>
          <li class="p-interview-archive__item">
            <a href="/nikomaruen/single" class="p-interview-archive__link">
              <div class="p-interview-archive__img-wrap">
                <picture class="p-interview-archive__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.jpg" alt="インタビューのサムネイル">
                </picture>
                <span class="p-interview-archive__name" style="background-color: #852A17;">3年目 : M先生</span>
              </div>
              <p class="p-interview-archive__txt">このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。</p>
            </a>
          </li>
          <li class="p-interview-archive__item">
            <a href="/nikomaruen/single" class="p-interview-archive__link">
              <div class="p-interview-archive__img-wrap">
                <picture class="p-interview-archive__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.jpg" alt="インタビューのサムネイル">
                </picture>
                <span class="p-interview-archive__name" style="background-color: #852A17;">3年目 : M先生</span>
              </div>
              <p class="p-interview-archive__txt">このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。</p>
            </a>
          </li>
          <li class="p-interview-archive__item">
            <a href="/nikomaruen/single" class="p-interview-archive__link">
              <div class="p-interview-archive__img-wrap">
                <picture class="p-interview-archive__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.jpg" alt="インタビューのサムネイル">
                </picture>
                <span class="p-interview-archive__name" style="background-color: #852A17;">3年目 : M先生</span>
              </div>
              <p class="p-interview-archive__txt">このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。</p>
            </a>
          </li>
        </ul>
        <div class="p-interview-archive__pager">
          <a class="prev page-numbers" href=""></a>
          <a class="page-numbers" href="">1</a>
          <a class="page-numbers" href="">2</a>
          <span aria-current="page" class="page-numbers current">3</span>
          <a class="page-numbers" href="">4</a>
          <a class="page-numbers" href="">5</a>
          <span class="page-numbers dots">…</span>
          <a class="page-numbers" href="">32</a>
          <a class="next page-numbers" href=""></a>     
        </div>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>