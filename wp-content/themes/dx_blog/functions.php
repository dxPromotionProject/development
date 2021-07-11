<?php
//アイキャッチ画像の表示の設定
add_theme_support( 'post-thumbnails' );

/**
 * This example adds a div wrapper around each
 * row in the registration form.
 */
add_filter( 'wpmem_register_form_args', 'my_register_form_row_wrapper', 10, 2 );
function my_register_form_row_wrapper( $args, $tag ) {
    $args = array(
		'txt_before'       => '<div class="register_description">資料は会員限定のコンテンツとなります。<br>下記フォームに必要事項を入力し、
								<br>「会員登録し資料をダウンロードする」ボタンを 押してください。</div>',
		// 'txt_after'        => '</div>',
		// 'heading_before'   => '<div class="register_description">資料は会員限定のコンテンツとなります。
		// 下記フォームに必要事項を入力し、
		// 「会員登録し資料をダウンロードする」ボタンを 押してください。',
		// 'heading_after'    => '</div>',
        'row_before' => '<div class="my-row-wrapper">',
        'row_after'  => '</div>',
		// 'row_before'       => '<div class="igarashiiiiii-text"></div>'',
    );
 
    return $args;
}


/**
 * The following example would change the
 * class assigned to buttons.
 */
// add_filter( 'wpmem_register_form_args', 'my_register_form_button_class', 10, 2 );
// function my_register_form_button_class( $args, $tag ) {
//     $args['button_class'] = 'btn btn-primary';
//     return $args;
// }

// echo "反応しているあkの確認";
?>
