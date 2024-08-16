<?php

/* ===============================================*
 * WordPress
 *===============================================*/

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');

/**
 * <title>の区切り文字を変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * 非公開実績タイトルの「保護中」を削除する
 */
add_filter('protected_title_format', 'my_protected_title');
function my_protected_title($title)
{
    return '%s';
}

/**
 * Contact Form 7のときは整形機能をOFFにする
 */
add_filter('wpcf7_autop_or_not' , 'my_wpcf7_autop');
function my_wpcf7_autop()
{
  return false;
}



/**
 * 投稿や固定ページでPHPを読み込む
 */
function Include_my_php($params = array()) {
extract(shortcode_atts(array(
'file' => 'default'
), $params));
ob_start();
include(get_theme_root() . '/' . get_template() . "/$file.php");
return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');



/* ===============================================*
 * 外部ファイルを読み込む
 *===============================================*/

function my_enqueue_scripts() {
    
    // スタイルシート
    wp_enqueue_style('peno-works-ress', get_template_directory_uri().'/assets/css/ress.css');
    wp_enqueue_style('peno-works-common', get_template_directory_uri().'/assets/css/common.css');
    wp_enqueue_style('peno-works-editor-style', get_template_directory_uri().'/assets/css/editor-style.css');
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null);
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', array(), null);
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v6.5.2/css/all.css');
    wp_enqueue_style('google-web-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
    

    // デフォルトのjQueryを削除。GoogleCDN3.6.0ver読み込み。
    // is_admin：管理画面でないなら
    // if (!is_admin()) {
    //     //デフォルトjquery削除
    // 	wp_deregister_script('jquery');
    //     //GoogleCDNから読み込む
    // 	wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
    // }


    // wp_get_theme()：現在使用中のテーマのバージョンを取得する
    $version = wp_get_theme()->get( 'Version' );

    
    // JSファイル
    // Jqueryを使う宣言
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(),$version,true);
    wp_enqueue_script('peno-works-header_menu', get_template_directory_uri() . '/assets/js/header_menu.js' , array(),$version,true);
    wp_enqueue_script('peno-works-common', get_template_directory_uri() . '/assets/js/common.js' , array(),$version,true);
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );




/* ===============================================*
 * ブロックエディター関連
 *===============================================*/

/**
 * ブロックのカスタマイズ用JSファイルを読み込む
 */
function add_my_assets_to_block_editor() {
    wp_enqueue_script('block-custom', get_stylesheet_directory_uri().'/editor-helper.js', array(), "", true);
    
}
add_action('enqueue_block_editor_assets', 'add_my_assets_to_block_editor');


/**
 * 管理画面ブロックエディターにCSSを読み込む
 */

function my_editor_support(){
    add_theme_support('editor-style');
    add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'my_editor_support');





/* ===============================================*
 * 非公開ページ関連設定
 *===============================================*/

/**
 * 非ログイン時に記事一覧ページを見せないようにする
 */
function un_logged_in_user_redirect() {
    if( (! is_user_logged_in()  && is_post_type_archive('private-works')) || (! is_user_logged_in()  && is_singular('private-works') &&  ! is_single('login')) ) {
        // 条件１：”ログインしていない”かつ"投稿タイプのスラッグがprivate-worksのアーカイブページ"
        // 条件２：”ログインしていない”かつ"個別記事のprivate-works"かつ"個別記事のスラッグがloginでない"
        wp_redirect( '/login' );// ログインページのURL
        exit();
    }
}
add_action( 'template_redirect','un_logged_in_user_redirect');
// アクセスした場合はリダイレクトする

/**
 * ログイン後のリダイレクト先指定 wpmem_login_redirect
 */
add_filter( 'wpmem_login_redirect', 'my_login_redirect', 10, 2 );
function my_login_redirect( $redirect_to, $user_id ) {
     
    // リダイレクト先のURLを指定　下記のようにwordpressのメソッドを利用することも可能
    return home_url( '/private-works/' );
}

/**
 * ログアウトURLを変更 wpmem_logout_link
 */
add_filter( 'wpmem_logout_link', 'my_logout_link' );
function my_logout_link( $string ) {
    $string = home_url('/');
    return $string;
}


/**
 * ログイン後に/loginに訪れたユーザーをリダイレクトするコード。プラグインのコードが先に動いているので動かない
 */
// function logged_in_user_redirect() {
//     if( is_user_logged_in()  && is_singular('private-works') && is_single('/login') ) {
//         // "ログイン中"かつ"個別記事のprinate-works"かつ"個別記事のスラッグがlogin"
//         wp_redirect( '/private-works' );
//         // ログインページのURL
//         exit();
//     }
// }
// add_action( 'template_redirect','logged_in_user_redirect');

/**
 * WordPressにログインした際に表示される管理バーを非表示
 */
function theme_show_admin_bar( $content ) {
	// 管理者・編集者の権限グループの場合は表示
	if ( current_user_can( 'administrator' ) || current_user_can( 'editor' ) ) {
		return $content;
	// 他の権限グループの場合は非表示
	} else {
		return false;
	}
}
add_filter( 'show_admin_bar' , 'theme_show_admin_bar' );


/**
 * 「既存ユーザのログイン」から「ログイン」へテキストの変更
 */
add_filter( 'wpmem_default_text', 'sv_wpmem_default_text' );
function sv_wpmem_default_text( $text ) {
    $text['login_heading'] = 'ログイン';
    
    return $text;
}

/**
 * ログインエラーメッセージをカスタマイズ
 */
add_filter( 'wpmem_login_failed', 'my_login_failed_msg' );
 
function my_login_failed_msg( $str )
{
    $str = '正しいユーザーIDまたはパスワードを入力してください。';
    return $str;
}

/**
 * ログインフォームのテキスト変更
 */
add_filter( 'wpmem_inc_login_inputs', 'my_login_inputs' );
function my_login_inputs( $default_inputs ) {
 
    $default_inputs[0]['name'] = 'ユーザー名';
    $default_inputs[1]['name'] = 'パスワード';
 
    return $default_inputs;
}

/**
 * ログインフォームをカスタマイズ
 */
add_filter( 'wpmem_login_form_args', function ( $args, $action ) {
 
    $args['buttons_before'] = '<div class="my-row-wrapper">';
    $args['buttons_after']  = '</div>';
    $args['button_class']  = 'btn';
    // パラメーターキーにユニークタグを代入
    return $args;
     
}, 10, 3 );



