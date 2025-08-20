<?php
/*
Template Name: 職員インタビュー詳細
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

    <section class="p-interview-details">
      <div class="p-interview-details__inner">
        <div class="p-interview-details__thumb">
          <picture class="p-interview-details__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.jpg" width="1080" height="608" alt="インタビューのサムネイル">
          </picture>
          <div class="p-interview-details__ttlarea">
            <span class="p-interview-details__name" style="color: #852A17;">3年目 : M先生</span>
            <h2 class="p-interview-details__ttl">大変な仕事も先輩方と一緒に乗り越えられる</h2>
          </div>
        </div>
        <div class="p-interview-details__cont">
          <h2>h2タイトルが入ります。h2タイトルが入ります。</h2>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <h3>h3タイトルが入ります。h3タイトルが入ります。</h3>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <h4>h4タイトルが入ります。h4タイトルが入ります。</h4>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sample.jpg" alt="インタビューのサムネイル">
          </figure>
        </div>
        <div class="p-interview-details__btn-wrap">
          <a href="/nikomaruen/interview" class="p-interview-details__btn c-btn">
            <span class="c-btn__txt">職員インタビュー一覧へ</span>
            <svg class="p-interview-details__svg c-btn__svg" width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.2324 5.68066L0.704101 11.1807L0.704102 0.180664L10.2324 5.68066Z" fill="white"/>
            </svg>                  
          </a>
        </div>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>