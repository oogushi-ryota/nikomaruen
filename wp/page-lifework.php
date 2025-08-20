<?php
/*
Template Name: ライフワークバランス
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
            <span class="c-breadcrumb__link">ライフワークバランス</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-lifework-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="p-lifework-fv__txtarea c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">TEACHER’S ONE flow</span>
              <h1 class="c-under-fv__ja">
                <span class="p-lifework-fv__txt-obj">ライフワークバランス</span>
              </h1>
            </hgroup>
            <p class="p-lifework-fv__txt c-under-fv__txt">
              にこまるえんで働く保育士の1日をご紹介します。<br>
              にこまるえんの先生たちは、毎日子どもたちの笑顔に囲まれながら、元気いっぱいに過ごしています。<br>
              登園の受け入れから遊びや食事、午睡、降園対応まで、子どもたち一人ひとりに寄り添いながら、チームで協力して保育を行っています。
            </p>
          </div>
          <picture class="c-under-fv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/fv/fv_img.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/fv/fv_img.jpg" width="970" height="600" alt="ライフワークバランス">
          </picture>
        </div>
      </div>
    </section>

    <section class="p-lifework-flow">
      <div class="c-inner">
        <div class="p-lifework-flow__ttl-wrap">
          <h2 class="p-lifework-flow__ttl c-sec-ttl">1日のお仕事の流れ</h2>
        </div>
        <div class="p-lifework-flow__cont">
          <ul class="p-lifework-flow__list">
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">8:30</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">出勤</h3>
                <p class="p-lifework-flow__txt">出勤・着替えを済まして担当クラスに入り、子ども達の受け入れ</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">9:00</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">職員朝礼</h3>
                <p class="p-lifework-flow__txt">その日の保育内容や行事の確認、子どもたち一人ひとりの体調や気になる様子などを共有し、情報をしっかりと連携したうえで1日をスタート</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">9:15</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">午前の活動</h3>
                <p class="p-lifework-flow__txt">体操・立腰・名前呼び・水分補給</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">10:00</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">設定保育</h3>
                <p class="p-lifework-flow__txt">散歩・製作などを行います。</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">11:00</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">給食</h3>
                <p class="p-lifework-flow__txt">後片付けから手伝い、トイレなど生活面の自立を促し、手助けをします。</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">12:00</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">午睡</h3>
                <p class="p-lifework-flow__txt">
                  検温・午睡チェック・日誌など記入。<br>
                  その間に職員は給食を食べます。
                </p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">14:00 ~</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">午後の準備</h3>
                <p class="p-lifework-flow__txt">起床した子どもから排泄、おやつの準備</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">14:30 ~</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">おやつ</h3>
                <p class="p-lifework-flow__txt">職員も一緒に食べます。</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">15:00 ~</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">午後の活動</h3>
                <p class="p-lifework-flow__txt">お歌の時間・立腰</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">15:30 ~</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">自由遊び</h3>
                <p class="p-lifework-flow__txt">園にある絵本や玩具で一緒に遊びます。</p>
              </div>
            </li>
            <li class="p-lifework-flow__item">
              <span class="p-lifework-flow__time">17:00 ~</span>
              <div class="p-lifework-flow__details">
                <h3 class="p-lifework-flow__cont-ttl">勤務終了</h3>
                <p class="p-lifework-flow__txt">着替えて退勤します。</p>
              </div>
            </li>
          </ul>
          <div class="p-lifework-flow__imgarea">
            <picture class="p-lifework-flow__img p-lifework-flow__img--01">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img01.jpg" width="264" height="176" alt="">
            </picture>
            <picture class="p-lifework-flow__img p-lifework-flow__img--02">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img02.jpg" width="340" height="227" alt="">
            </picture>
            <picture class="p-lifework-flow__img p-lifework-flow__img--03">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img03.jpg" width="250" height="261" alt="">
            </picture>
            <picture class="p-lifework-flow__img p-lifework-flow__img--04">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img04.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img04.jpg" width="238" height="179" alt="">
            </picture>
            <picture class="p-lifework-flow__img p-lifework-flow__img--05">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img05.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img05.jpg" width="207" height="160" alt="">
            </picture>
            <picture class="p-lifework-flow__img p-lifework-flow__img--06">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img06.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifework/flow/flow_img06.jpg" width="340" height="227" alt="">
            </picture>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>