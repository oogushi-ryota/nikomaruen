<?php

// 管理バー非表示
add_filter( 'show_admin_bar', '__return_false' );

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');

//自動補完リダイレクト機能を停止
add_filter( 'do_redirect_guess_404_permalink', '__return_false' );

//スラッグの変更によるリダイレクト機能を停止
remove_action( 'template_redirect', 'wp_old_slug_redirect' );

// MW WP Formで自動挿入されるp・brタグを削除
function mvwpform_autop_filter()
{
    if (class_exists('MW_WP_Form_Admin')) {
        $mw_wp_form_admin = new MW_WP_Form_Admin();
        $forms = $mw_wp_form_admin->get_forms();
        foreach ($forms as $form) {
            add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
        }
    }
}
mvwpform_autop_filter();

?>