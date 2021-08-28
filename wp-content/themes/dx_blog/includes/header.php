<header>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <div class="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/company_logo.jpg" alt="オファーコンサルティング"></a>
        <p>リソースに悩む<br>経営者の為のメディア</p>
    </div>
    <div class="linkbox">
        <div class="displayUserName">
            <?php if(is_user_logged_in()): ?>
            ようこそ　：　<?php global $current_user; get_currentuserinfo(); echo $current_user->user_login; ?>　様<br>
            <a href="<?php echo home_url('change_password'); ?>">パスワードの変更</a>
            <?php endif; ?>
        </div>
        <ul class="list">
            <li id="article" class="nav">
                <a href="<?php echo get_post_type_archive_link( '経費削減' ); ?>">記事</a>
            </li>
            <li id="usefulDocument" class="nav">
                <a href="">お役立ち資料</a>
            </li>
            <li id="operatingCompany" class="nav">
                <a href="">運営会社</a>
            </li>
            <li class="nav" id="line">
                <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/line.png" alt="">
                <!-- 一旦暫定対応 -->
                </a>
            </li>
            <li class="nav">
                <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/tiktok.png" alt="">
                    <!-- 一旦暫定対応 -->
                </a>
            </li>
            <li class="nav" id="sign_up">
            <!-- <div class="nav" id="sign_up"> -->
                <a href="<?php echo home_url('register'); ?>">
                    新規会員登録
                </a>
            <!-- </div> -->
            </li>
            <li class="nav" id="login">
            <!-- <div class="nav" id="sign_up"> -->
                <a href="<?php echo home_url('login'); ?>">
                    ログイン
                </a>
            <!-- </div> -->
            </li>
        </ul>
    </div>
</header>

<br>


<!-- 各ページにトップページに戻るリンクをつけておく -->

<a href="<?php echo home_url('doc_download_1'); ?>">download1</a>
<a href="<?php echo home_url('doc_download_2'); ?>">download2</a>
<a href="<?php echo home_url('doc_download_3'); ?>">download3</a>
<a href="<?php echo home_url('doc_download_4'); ?>">download4</a>
<a href="<?php echo home_url('doc_download_5'); ?>">download5</a>
<a href="<?php echo home_url('doc_download_6'); ?>">download6</a>
<a href="<?php echo home_url('doc_download_7'); ?>">download7</a>
<a href="<?php echo home_url('doc_download_8'); ?>">download8</a>
<a href="<?php echo home_url('doc_download_9'); ?>">download9</a>
<a href="<?php echo home_url('nonmember_download_1'); ?>">非会員用download1</a>
<a href="<?php echo home_url('nonmember_download_2'); ?>">非会員用download2</a>

<br>