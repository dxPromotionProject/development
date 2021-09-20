<?php
//アイキャッチ画像の表示の設定
add_theme_support( 'post-thumbnails' );

/**
 * This example adds a div wrapper around each
 * row in the registration form.
 */
// add_filter( 'wpmem_register_form_args', 'my_register_form_row_wrapper', 10, 2 );
// function my_register_form_row_wrapper( $args, $tag ) {
//     $args = array(
// 		'txt_before'       => '<div class="register_description">資料は会員限定のコンテンツとなります。<br>下記フォームに必要事項を入力し、
// 								<br>「会員登録し資料をダウンロードする」ボタンを 押してください。</div>',
// 		// 'txt_after'        => '</div>',
// 		// 'heading_before'   => '<div class="register_description">資料は会員限定のコンテンツとなります。
// 		// 下記フォームに必要事項を入力し、
// 		// 「会員登録し資料をダウンロードする」ボタンを 押してください。',
// 		// 'heading_after'    => '</div>',
//         'row_before' => '<div class="my-row-wrapper">',
//         'row_after'  => '</div>',
// 		// 'row_before'       => '<div class="igarashiiiiii-text"></div>'',
//     );
 
//     return $args;
// }


// ここ以降が自作のショートコード作成になる
// if(! function_exists('my_shortcode')){
// 	function my_shortcode(){
// 		return '表示されるテキスト';
// 	}
// 	add_shortcode('tag', 'my_shortcode');
// }

// usernameに日本語を対応可能にする
add_filter( 'sanitize_user', 'allow_japanese_as_username', 10, 3 );

function allow_japanese_as_username( $username, $raw_username, $strict ) {
	if ( $strict ) {
		$username = wp_strip_all_tags( $raw_username );
		$username = remove_accents( $username );
		$username = preg_replace( '|%([a-fA-F0-9][a-fA-F0-9])|', '', $username );
		$username = preg_replace( '/&.+?;/', '', $username );

		$username = preg_replace( '|[^a-zA-Z0-9ぁ-ゖァ-ヺ一-龢豈-頻 _.\-@]|', '', $username );
		$username = trim( $username );
		$username = preg_replace( '|\s+|', ' ', $username );
	}
	return $username;
}

// 下記のコードで登録フォームを変更できる
add_filter( 'wpmem_register_form', 'my_register_form_filter', 10, 4 );
 
function my_register_form_filter( $form, $toggle, $rows, $hidden ) {

	$termsUrl = home_url('terms');
	$policyUrl = home_url('policy');
	$registerUrl = home_url('register');
	$nowUrl = substr(get_the_permalink(), 0, -1);

	if ( $nowUrl === $registerUrl ) {
		return '
		<div class="member_register">
			<a id="register"></a>
			<form name="form" method="post" action="" id="wpmem_register_form" class="form">
			<input type="hidden" id="_wpmem_register_nonce" name="_wpmem_register_nonce" value="ee318ada44">
			<input type="hidden" name="_wp_http_referer" value="/register/">
				<fieldset>
					<div class="member_area">
						<h2 id="member_name">氏名</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="username" type="text" id="username" value="" class="textbox" required>
					</div>
					<div class="member_area">
						<h2 id="member_company">会社名</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="company_name" type="text" id="company_name" value="" class="textbox" required>
					</div>
					<div class="member_area">
						<h2 id="member_email">メールアドレス</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="user_email" type="email" id="user_email" value="" class="textbox" required>
					</div>
					<div class="member_area">
						<h2 id="member_position">役職</h2>
						<div class="register_required_display"><li></li></div>
						<input name="position_name" type="text" id="position_name" value="" class="textbox">
					</div>
					<div class="member_area">
						<h2 id="member_phone">電話番号</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="billing_phone" type="text" id="billing_phone" value="" class="textbox" required>
					</div>
					<div class="member_area">
						<h2 id="member_password">パスワード</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="user_password" type="password" id="user_password" value="" class="textbox" required>
					</div>
					<div class="member_area">
						<h2 id="member_password_confirm">パスワード（確認）</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="user_password_confirm" type="password" id="user_password_confirm" value="" class="textbox" required>
					</div>
					<input name="a" type="hidden" value="register">
					<input name="wpmem_reg_page" type="hidden" value="">
					<div id="member_agree">
						<a href="' . $termsUrl . '">利用規約</a>と<a href="' . $policyUrl . '">プライバシーポリシー</a>に同意の上
					</div>
					<div class="button_div">
						<div id="button_inner_div">
							<input name="submit" type="submit" value="会員登録する（無料）" class="bottons">
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		';
	} else {
		return '		
		<div class="member_register">
			<a id="register"></a>
			<form name="form" method="post" action="" id="wpmem_register_form" class="form">
			<input type="hidden" id="_wpmem_register_nonce" name="_wpmem_register_nonce" value="ee318ada44">
			<input type="hidden" name="_wp_http_referer" value="/register/">
				<fieldset>
					<div class="member_area">
						<h2 id="member_name">氏名</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="username" type="text" id="username" value="" class="textbox" required>
					</div>
					<div class="member_area">
						<h2 id="member_company">会社名</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="company_name" type="text" id="company_name" value="" class="textbox" required>
					</div>
					<div class="member_area">
						<h2 id="member_email">メールアドレス</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="user_email" type="email" id="user_email" value="" class="textbox" required>
					</div>
					<div class="member_area">
						<h2 id="member_position">役職</h2>
						<div class="register_required_display"><li></li></div>
						<input name="position_name" type="text" id="position_name" value="" class="textbox">
					</div>
					<div class="member_area">
						<h2 id="member_phone">電話番号</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="billing_phone" type="text" id="billing_phone" value="" class="textbox" required>
					</div>
					<div class="member_area">
						<h2 id="member_password">パスワード</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="user_password" type="password" id="user_password" value="" class="textbox" required>
					</div>
					<div class="member_area">
						<h2 id="member_password_confirm">パスワード（確認）</h2>
						<div class="register_required_display"><li>必須</li></div>
						<input name="user_password_confirm" type="password" id="user_password_confirm" value="" class="textbox" required>
					</div>
					<input name="a" type="hidden" value="register">
					<input name="wpmem_reg_page" type="hidden" value="">
					<div class="button_div">
						<div id="button_inner_div">
							<input name="submit" type="submit" value="会員登録し資料をダウンロードする（無料）" class="bottons">
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		';
	}
}

// 会員登録成功時と失敗時の切り分け
add_action( 'wpmem_register_redirect','the_reg_redirect' );
function the_reg_redirect(){
	if(is_page('register')){
		if(isset($_POST) && !empty($_POST)){
			$user_data = "";
			if(isset($_POST['user_email'])){
				$user_data = get_user_by('email', $_POST['user_email']);
			}

			if($user_data){
				$user_id = $user_data->ID;
				wp_redirect( home_url() . '/login');
				exit;
			}
		}
	}
}


//元のHTMLにdiv等を挿入することができる
// add_filter( 'wpmem_register_form_rows', 'my_register_form_rows_filter', 10, 2 );
// function my_register_form_rows_filter( $rows, $toggle ) {
//     // $rows['username'][field] = '<input name="log" type="text" id="log" value="" class="username" placeholder="半角英数字">';
//     $rows['username'][field_before] = '<div>aaaaaaaaaaaaaaaaaaaaaaaaa</div>';
//     return $rows;
// }

/**
 * The following example would change the
 * class assigned to buttons.
 */
// add_filter( 'wpmem_register_form_args', 'my_register_form_button_class', 10, 2 );
// function my_register_form_button_class( $args, $tag ) {
//     $args['button_class'] = 'btn btn-primary';
//     return $args;
// }


// 以下アーカイブページの設定
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'documentlist'; //スラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// ログインページ
function my_login_form_filter( $form, $action ) {
	$user_info = wp_get_current_user();
	$passResetUrl = home_url('password_reset');
	$loginUrl = home_url('login');
	$changePassUrl = home_url('change_password');
	$nowUrl = substr(get_the_permalink(), 0, -1);
	// 下記にユーザーが任意でパスワードを変更できるリンクを設定 
	if ( $nowUrl === $changePassUrl ) {
		  return '
		  <div id="wpmem_login">
		  <a id="pwdchange"></a>
		  <form action="" method="POST" id="wpmem_pwdchange_form" class="form">
			<input type="hidden" id="_wpmem_pwdchange_nonce" name="_wpmem_pwdchange_nonce" value="2952ee5e05">
			<input type="hidden" name="_wp_http_referer" value="/form/edit/">
				<fieldset id="pass_change_fieldset">
					<div class="pass_change_title_inner">パスワード変更</div>
					<div class="new_password">
						<label for="pass1">新しいパスワード</label>
						<div class="div_text">
							<input name="pass1" type="password" id="pass1" class="password" required="">
						</div>
					</div>
					<div class="new_password_again">
						<label for="pass2">新しいパスワード (再入力)</label>
						<div class="div_text">
							<input name="pass2" type="password" id="pass2" class="password" required="">
						</div>
					</div>
					<input name="redirect_to" type="hidden" value="/form/edit/"><input name="a" type="hidden" value="pwdchange">
					<input name="formsubmit" type="hidden" value="1">
					<div class="button_div">
						<div class="btn_inner_area">
							<button type="submit" name="Submit" value="パスワードの変更" class="buttons">パスワードを変更</button>
						</div>
					</div>
				</fieldset>
			</form>
			</div>
	';
	}
	// 下記にパスワードがわからない場合のメールを送るページ
	else if ( $nowUrl === $passResetUrl ) {
		  return '
		  <div id="wpmem_login">
			<a id="pwdreset"></a>
			<form action="'. $passResetUrl .'" method="POST" id="wpmem_pwdreset_form" class="form">
			<input type="hidden" id="_wpmem_pwdreset_nonce" name="_wpmem_pwdreset_nonce" value="cf2d02895d">
			<input type="hidden" name="_wp_http_referer" value="/wordpress/password_reset/">
			<fieldset id="pass_reset_fieldset">
			<div class="pass_reset_title_inner">パスワードリセット</div>
			<div class="reset_user_name">
			<label for="user">ユーザー名</label>
			<div class="div_text"><input name="user" type="text" id="user" value="" class="username" required=""></div>
			</div>
			<div class="reset_user_mail"><label for="email">メール</label>
			<div class="div_text"><input name="email" type="text" id="email" value="" class="textbox" required=""></div>
			</div>
			<input name="redirect_to" type="hidden" value="/wordpress/password_reset/"><input name="a" type="hidden" value="pwdreset">
			<input name="formsubmit" type="hidden" value="1">
			<div class="button_div">
				<div class="btn_inner_area">
					<button type="submit" name="Submit" value="パスワードをリセット" class="buttons" >パスワードをリセット</button>
				</div>
			</div>
			</fieldset>
			</form>
		  </div>';

  
	}elseif( $nowUrl === $loginUrl ) {
		return '
			<div id="wpmem_login">
			<form class="my_form" name="my_login_form" id="my_login_form" action="" method="post">
			<fieldset id="login_fieldset">
			<div class="message_area">
				<p id="message_content"></p>
			</div>
			<div class="login_mail">
				<label for="log">メールアドレス</label>
				<input class="col-12 l-mgb20" id="login_user_name" name="log" type="text" placeholder="portbent@pol.jp" required>
			</div>
			<div class="login_pass">
				<label for="pwd">パスワード</label>
				<input class="col-12 l-mgb30" id=" login_password" name="pwd" id="user_pass" type="password" required>
			</div>

			<input name="redirect_to" type="hidden" value="" /><input name="a" type="hidden" value="login" />
			<div class="my_btn_area">
				<div class="my_btn_inner_area">
					<button type="submit" name="my_submit" class="my_submit_btn" value="login" onclick="emailVal()">ログイン</button>
				</div>
			</div>

			<div class="forget_pass">
			<a href="'. $passResetUrl .'">パスワードを忘れた方はこちら
			<div class="icon-circle"></div>
			</a></div>
			</fieldset></form></div>
			';
	}
  }

  add_filter( 'wpmem_login_form', 'my_login_form_filter', 10, 2 );


?>
