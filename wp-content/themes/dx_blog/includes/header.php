Headerの表示

<header>
    <div class="logo">
        
    <a href=""> 
        <img src="" alt="">
    </a>
    <p class="logo_word">リソースに悩む<br>経営者の為のメディア</p>
    </div>
    <div class="linkbox">
    <ul class="list">
        <li class="nav">
        <a href="">記事</a>
        </li>
        <li class="nav">
        <a href="">お役立ち資料</a>
        </li>
        <li class="nav">
        <a href="">運営会社</a>
        </li>
        <li class="nav">
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
        <a href="">新規会員登録</a>
        </li>
    </ul>
    </div>
</header>

<br>


<!-- 各ページにトップページに戻るリンクをつけておく -->
<a href="<?php echo home_url(); ?>">home</a>

<a href="<?php echo home_url('document'); ?>">document</a>

<a href="<?php echo home_url('description'); ?>">description</a>

<a href="<?php echo home_url('company'); ?>">company</a>

<a href="<?php echo home_url('terms'); ?>">terms</a>

<a href="<?php echo home_url('register'); ?>">register</a>

<a href="<?php echo home_url('policy'); ?>">policy</a>

<a href="<?php echo home_url('download'); ?>">download</a>

<br>