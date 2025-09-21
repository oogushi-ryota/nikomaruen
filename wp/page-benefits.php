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
              <h3 class="p-benefits-details__list-ttl">実費支給（上限なし）</h3>
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
              <p class="p-benefits-details__txt">年2回の賞与支給あり（※支給条件あり）。日々の努力や保育への貢献がしっかり評価されます。</p>
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
              <p class="p-benefits-details__txt">早番・遅番の時間帯に勤務された方には、早朝時間帯は正職員1日500円、パート職員は1日800円、遅番の時間帯17：15以降勤務するパート職員は400円を支給しております。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="p-benefits-job">
      <div class="p-benefits-job__inner">
        <h2 class="p-benefits-job__ttl c-sec-ttl">募集要項</h2>
        <ul class="c-tabbtn-list js-tabbtn-list">
          <?php if ( get_field('recruit_position_1_name') ) : ?>
            <li class="c-tabbtn-list__item js-tabbtn-item" id="tab-list1" data-term-id="1">
              <?php the_field('recruit_position_1_name'); ?>
            </li>
          <?php endif; ?>
          <?php if ( get_field('recruit_position_2_name') ) : ?>
            <li class="c-tabbtn-list__item js-tabbtn-item" id="tab-list2" data-term-id="2">
              <?php the_field('recruit_position_2_name'); ?>
            </li>
          <?php endif; ?>
          <?php if ( get_field('recruit_position_3_name') ) : ?>
            <li class="c-tabbtn-list__item js-tabbtn-item" id="tab-list3" data-term-id="3">
              <?php the_field('recruit_position_3_name'); ?>
            </li>
          <?php endif; ?>
        </ul>
        <table class="p-benefits-job__table js-tab-item" id="tab1">
          <tbody class="p-benefits-job__tbody">
            <?php if ( get_field('recruit_position_1_name') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">募集職種</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_1_name'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_1_requirements') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">応募資格</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_1_requirements'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_1_employment') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">雇用形態</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_1_employment'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_1_workplace') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">勤務地</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_1_workplace'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_1_hours') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">勤務時間</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_1_hours'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_1_salary') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">給与</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_1_salary'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_1_benefits') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">待遇</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_1_benefits'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_1_bonus') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">入職祝金</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_1_bonus'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_1_support') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">引越し費用ご負担</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_1_support'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_1_reason') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">募集理由</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_1_reason'); ?></td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
        <table class="p-benefits-job__table js-tab-item" id="tab2">
          <tbody class="p-benefits-job__tbody">
            <?php if ( get_field('recruit_position_2_name') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">募集職種</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_2_name'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_2_requirements') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">応募資格</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_2_requirements'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_2_employment') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">雇用形態</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_2_employment'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_2_workplace') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">勤務地</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_2_workplace'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_2_hours') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">勤務時間</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_2_hours'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_2_salary') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">給与</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_2_salary'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_2_benefits') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">待遇</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_2_benefits'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_2_bonus') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">入職祝金</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_2_bonus'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_2_support') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">引越し費用ご負担</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_2_support'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_2_reason') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">募集理由</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_2_reason'); ?></td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
        <table class="p-benefits-job__table js-tab-item" id="tab3">
          <tbody class="p-benefits-job__tbody">
            <?php if ( get_field('recruit_position_3_name') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">募集職種</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_3_name'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_3_requirements') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">応募資格</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_3_requirements'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_3_employment') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">雇用形態</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_3_employment'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_3_workplace') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">勤務地</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_3_workplace'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_3_hours') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">勤務時間</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_3_hours'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_3_salary') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">給与</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_3_salary'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_3_benefits') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">待遇</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_3_benefits'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_3_bonus') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">入職祝金</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_3_bonus'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_3_support') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">引越し費用ご負担</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_3_support'); ?></td>
              </tr>
            <?php endif; ?>
            <?php if ( get_field('recruit_position_3_reason') ) : ?>
              <tr class="p-benefits-job__tr">
                <th class="p-benefits-job__th">募集理由</th>
                <td class="p-benefits-job__td"><?php the_field('recruit_position_3_reason'); ?></td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>