<footer>
<div class="container">
    <p class="">更新情報や関連ニュースをチェック</p>
    <a href="">
        <!-- lineのアイコン入れる -->
        <img id="line" src="<?php echo get_template_directory_uri(); ?>/dist/img/line.png" alt="">
    </a>
    <a href="">
        <!-- tiktokのアイコン入れる -->
        <img id="tiktok" src="<?php echo get_template_directory_uri(); ?>/dist/img/tiktok.png" alt="">
    </a>
</div>
<div id="relation">
    <ul id="list">
        <li>
            <a href="<?php echo home_url('document'); ?>">お役立ち資料</a>
        </li>
        <li>
            <a href="">各種お問い合わせ</a>
        </li>
        <li>
            <a href="<?php echo home_url('terms'); ?>">利用規約</a>
        </li>
        <li>
            <a href="<?php echo home_url('description'); ?>">特定商取引に基づく表記</a>
        </li>
        <li>
            <a href="<?php echo home_url('policy'); ?>">プライバシーポリシー</a>
        </li>
        <li>
            <a href="<?php echo home_url('company'); ?>">運営会社</a>
        </li>
    </ul>
</div>
<div id="writing">@portbent.All right Reserved</div>
<?php wp_footer(); ?>
</footer>