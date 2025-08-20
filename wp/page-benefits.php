<?php
/*
Template Name: 福利厚生・待遇
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
            <span class="c-breadcrumb__link">福利厚生・待遇</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-benefits-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">BENEFIT</span>
              <h1 class="c-under-fv__ja">
                <span class="p-benefits-fv__txt-obj">福利厚生・待遇</span>
              </h1>
            </hgroup>
            <h2 class="p-benefits-fv__ttl">
              <span class="c-color-txt">「ここでずっと働きたい」</span><br>
              そう思える職場づくりを目指しています。
            </h2>
            <p class="p-benefits-fv__txt c-under-fv__txt">
              にこまるえんでは、職員が安心して働き続けられることが、子どもたちの笑顔や健やかな成長につながると考えています。<br>
              産休・育休、時短勤務、充実した有給制度など、それぞれのライフステージに合わせた制度を整備。<br>
              また、スタッフ同士が支え合い、困ったときに頼れるあたたかな風土も魅力のひとつです。<br>
              保育のやりがいを感じながら、心にゆとりを持って働ける環境をにこまるえんは大切にしています。
            </p>
          </div>
          <picture class="c-under-fv__img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/fv/fv_img.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/fv/fv_img.jpg" width="970" height="600" alt="福利厚生・待遇">
          </picture>
        </div>
      </div>
    </section>

    <section class="p-benefits-details">
      <div class="c-inner">
        <div class="p-benefits-details__ttl-wrap">
          <h2 class="p-benefits-details__ttl c-sec-ttl">福利厚生</h2>
        </div>
        <ul class="p-benefits-details__list">
          <li class="p-benefits-details__item p-benefits-details__item--01">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img01.svg" width="136" height="136" alt="各種社会保険完備">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">各種社会保険完備</h3>
              <p class="p-benefits-details__txt">雇用保険・健康保険・厚生年金・労災保険など、法定の社会保険をしっかり完備しています。安心して長く働ける環境です。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--02">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img02.svg" width="136" height="136" alt="交通費規定支給">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">交通費規定支給</h3>
              <p class="p-benefits-details__txt">公共交通機関を利用される方には、交通費を規定に基づいて支給。通勤にかかる負担を軽減します。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--03">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img03.svg" width="136" height="136" alt="昇給あり">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">昇給あり</h3>
              <p class="p-benefits-details__txt">年1回、評価に応じた昇給の機会があります。日々のがんばりがしっかりと給与に反映される仕組みです。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--04">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img04.svg" width="136" height="136" alt="有給休暇あり">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">有給休暇あり</h3>
              <p class="p-benefits-details__txt">有休の取得を推奨しています。体調不良やプライベートの予定など、必要なときにしっかり休める環境です。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--05">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img05.svg" width="136" height="136" alt="扶養内勤務もOK">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">扶養内勤務もOK</h3>
              <p class="p-benefits-details__txt">ライフスタイルに合わせて、扶養内でのパート勤務も可能です。子育てや家庭との両立を応援します。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--06">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img06.svg" width="136" height="136" alt="賞与年2回">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">賞与年2回</h3>
              <p class="p-benefits-details__txt">年2回の賞与支給あり（※支給条件あり）。日々の努力やチームへの貢献がしっかり評価されます。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--07">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img07.svg" width="136" height="136" alt="住宅・燃料手当">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">住宅・燃料手当</h3>
              <p class="p-benefits-details__txt">住宅手当や冬季の燃料手当など、地域や生活に合わせた手当も支給。暮らしを支える制度が整っています。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--08">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img08.svg" width="136" height="136" alt="退職金制度あり">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">退職金制度あり</h3>
              <p class="p-benefits-details__txt">長く働いた方には退職金制度をご用意。将来も安心してキャリアを築いていただけます。</p>
            </div>
          </li>
          <li class="p-benefits-details__item p-benefits-details__item--09">
            <picture class="p-benefits-details__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/benefits/details/details_img09.svg" width="136" height="136" alt="朝夕手当あり">
            </picture>
            <div class="p-benefits-details__txtarea">
              <h3 class="p-benefits-details__list-ttl">朝夕手当あり</h3>
              <p class="p-benefits-details__txt">早番・遅番の時間帯に勤務された方には、1日300円の手当を支給。生活に合わせた働き方をサポートします。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="p-benefits-job">
      <div class="p-benefits-job__inner">
        <h2 class="p-benefits-job__ttl c-sec-ttl">募集要項</h2>
        <table class="p-benefits-job__table">
          <tbody class="p-benefits-job__tbody">
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">雇用形態</th>
              <td class="p-benefits-job__td">正社員</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">職種</th>
              <td class="p-benefits-job__td">保育士 / 幼稚園教諭 / 正職員保育士</td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">給与</th>
              <td class="p-benefits-job__td">
                月給174,000円スタート　処遇改善30,000円スタート　住宅手当5,000円<br>
                合計209,000円<br><br>
                賞与2回：7月と12月（令和3年実績 3.４ヶ月 591,600円）<br>
                燃料手当 11月（世帯主60,000円 その他30,000円）
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">勤務地</th>
              <td class="p-benefits-job__td">
                ①にこまるえん円山　②にこまるえん白石　③にこまるえん東白石<br class="is-pc">
                ④にこまるえん南郷
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">勤務時間</th>
              <td class="p-benefits-job__td">
                7：00～19：00のシフト制週40時間の完全週休二日制です。<br>
                （週に2回必ず休みがあります）
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">シフトの決め方</th>
              <td class="p-benefits-job__td">
                シフトサイクル：1ヶ月<br>
                シフト希望はほぼ100％通ります！休み希望がかぶった時もみんなで協力して調整します♪
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">応募資格</th>
              <td class="p-benefits-job__td">
                保育士免許をお持ちの方<br>
                保育士経験１年以上
              </td>
            </tr>
            <tr class="p-benefits-job__tr">
              <th class="p-benefits-job__th">待遇・福利厚生</th>
              <td class="p-benefits-job__td">
                ・各社保完備(法定)<br>
                ・交通費規定支給・昇給<br>
                ・有休<br>
                ・扶養内OK<br>
                ・賞与年2、住宅<br>
                ・燃料手当、退職金制度<br>
                ・朝夕手当(1日300円)あり
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>