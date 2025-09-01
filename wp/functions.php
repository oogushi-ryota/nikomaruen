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

//MW WP Formの管理画面でホームURLを返す
function my_mwform_complete_message( $message, $form_key, $insert_id ) {
    $message = str_replace( '{home_url}', esc_url( home_url( '/' ) ), $message );
    return $message;
}
add_filter( 'mwform_complete_message_mw-wp-form-45', 'my_mwform_complete_message', 10, 3 );

//MW WP Form「希望施設名」の選択肢によってメールアドレスを変える
add_filter( 'mwform_admin_mail_mw-wp-form-45', function( $Mail, $values, $Data ) {
    $facility = $Data->get( 'facility' );
    $recipients = array( 'nikomaru@nikomaruen.jp' ); // 共通宛先

    if ( $facility === 'にこまるえん東白石' ) {
        $recipients[] = 'oosawa@nikomaruen.jp';
    } elseif ( $facility === 'にこまるえん南郷' ) {
        $recipients[] = 'sugimoto@nikomaruen.jp';
    } elseif ( $facility === 'にこまるえん白石' ) {
        $recipients[] = 'mieko@nikomaruen.jp';        
    } elseif ( $facility === 'にこまるえん円山' ) {
        $recipients[] = 'hitomi@nikomaruen.jp';
    }

    $Mail->to = implode( ',', $recipients );
    return $Mail;
}, 10, 3 );

// 404ページをトップにリダイレクト
add_action('template_redirect', function() {
    if (is_404()) {
        wp_redirect(home_url(), 301); // 301は恒久的リダイレクト
        exit;
    }
});

?>