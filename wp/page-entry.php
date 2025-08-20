<?php
/*
Template Name: エントリー
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
            <span class="c-breadcrumb__link">エントリー</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-entry-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">ENTRY</span>
              <h2 class="c-under-fv__ja">
                <span class="p-entry-fv__txt-obj u-fs-28">エントリー</span>
              </h2>
            </hgroup>
          </div>
        </div>
      </div>
    </section>

    <section class="p-entry-cont">
      <div class="p-entry-cont__inner">
        <p class="p-entry-cont__txt">
          にこまるえんにご興味をお持ちいただき、<br class="is-sp">ありがとうございます。<br>
          ご応募はもちろん、園の見学やご相談だけでも大歓迎です。<br>
          下記よりお気軽にお問い合わせください。
        </p>
        <div class="p-entry-cont__form">
          <div class="p-entry-cont__formblk">
            <label class="p-entry-cont__label" for="name">
              氏名
              <span class="p-entry-cont__required">必須</span>
            </label>
            <div class="p-entry-cont__inputarea">
              <input placeholder="例）日本 太郎" size="40" class="p-entry-cont__default" id="name" type="text" name="name" required aria-required="true">
            </div>
          </div>
          <div class="p-entry-cont__formblk">
            <label class="p-entry-cont__label" for="furigana">
              フリガナ
              <span class="p-entry-cont__required">必須</span>
            </label>
            <div class="p-entry-cont__inputarea">
              <input placeholder="例）ニホン タロウ" size="40" class="p-entry-cont__default" id="furigana" type="text" name="furigana" required aria-required="true">
            </div>
          </div>
          <div class="p-entry-cont__formblk">
            <fieldset class="p-entry-cont__fieldset">
              <legend class="p-entry-cont__legend">
                性別
                <span class="p-entry-cont__required">必須</span>
              </legend>
              <div class="p-entry-cont__radio">
                <label class="p-entry-cont__label">
                  <input type="radio" name="gender" value="male" required>
                  <span>男性</span>
                </label>
                <label class="p-entry-cont__label">
                  <input type="radio" name="gender" value="female" required>
                  <span>女性</span>
                </label>
              </div>
            </fieldset>
          </div>
          <div class="p-entry-cont__formblk">
            <label class="p-entry-cont__label" for="mail">
              メールアドレス
              <span class="p-entry-cont__required">必須</span>
            </label>
            <div class="p-entry-cont__inputarea">
              <input placeholder="xxxx@gmail.com" size="40" class="p-entry-cont__default" id="mail" type="email" name="mail" required aria-required="true">
            </div>
          </div>      
          <div class="p-entry-cont__formblk">
            <label class="p-entry-cont__label" for="tel">
              電話番号
              <span class="p-entry-cont__required">必須</span>
            </label>
            <div class="p-entry-cont__inputarea">
              <input placeholder="000-0000-0000" size="40" class="p-entry-cont__default" id="tel" type="text" name="tel" required aria-required="true">
            </div>
          </div>      
          <div class="p-entry-cont__formblk">
            <label class="p-entry-cont__label" for="resume">履歴書・職務経歴書</label>
            <div class="p-entry-cont__inputarea">
              <input class="p-entry-cont__file" type="file" name="resume" required aria-required="true">
            </div>
          </div>   
          <div class="p-entry-cont__formblk">
            <label class="p-entry-cont__label" for="details">ご相談、ご要望などあればご記入下さい</label>
            <div class="p-entry-cont__inputarea">
              <textarea name="details" class="p-entry-cont__default" id="details" cols="100" rows="10"></textarea>
            </div>
          </div>     
        </div>
        <div class="p-entry-cont__btn-wrap">
          <a href="" class="p-entry-cont__btn c-btn">
            <span class="c-btn__txt">送信内容を確認する</span>
            <!-- <svg class="p-entry-cont__svg c-btn__svg" width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.2324 5.68066L0.704101 11.1807L0.704102 0.180664L10.2324 5.68066Z" fill="white"/>
            </svg>                   -->
          </a>
        </div>
      </div>
    </section>
    
  </main>

  <?php get_footer(); ?>