<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>
<div id="documentMain">

    <div id="documentTopTitle">
        <h1>のお役立ち資料</h1>
        <div class="blueLine"></div>
    </div>

    <!-- 1列目 -->

    <div class="documentSubTitle">
        <h1>編集部イチオシのお役立ち資料</h1>
        <p>RECOMMENDED　BOOK</p>
    </div>

    <div class="blueLine"></div>

    <div class="documentContainer">
        <div class="documentImage firstDocument">
            <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
                <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
            </a>
        </div>

        <div class="documentImage otherDocument">
            <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
                <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
            </a>
        </div>
        
        <div class="documentImage otherDocument">
            <a href="">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
                <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
            </a>
        </div>
    </div>

    <div class="displayNextDocument" onclick="clickFirstNextDocument()">
        <div class="documentInner">
            <p>他の資料を見る</p>
        </div>
    </div>

    <!-- 2列目 -->
    <div id="documentFirstDisplay">
        <div class="documentSubTitle">
            <h1>経費削減のお役立ち資料</h1>
            <p>COST REDUCTION　BOOK</p>
        </div>

        <div class="blueLine"></div>

        <div class="documentContainer">
            <div class="documentImage firstDocument">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
                    <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
                </a>
            </div>

            <div class="documentImage otherDocument">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
                    <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
                </a>
            </div>
            
            <div class="documentImage otherDocument">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
                    <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
                </a>
            </div>
        </div>

        <div class="displayNextDocument" onclick="clickSecondNextDocument()">
            <div class="documentInner">
                <p>他の資料を見る</p>
            </div>
        </div>
    </div>

    <!-- 3列目 -->
    <div id="documentSecondDisplay">
        <div class="documentSubTitle">
            <h1>売上UPのお役立ち資料</h1>
            <p>SALES　UP　BOOK</p>
        </div>

        <div class="blueLine"></div>

        <div class="documentContainer">
            <div class="documentImage firstDocument">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
                    <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
                </a>
            </div>

            <div class="documentImage otherDocument">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
                    <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
                </a>
            </div>
            
            <div class="documentImage otherDocument">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
                    <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
                </a>
            </div>
        </div>
    </div>

</div>

<!-- 以下でJavaScriptの読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/document.js"></script>

<?php get_template_part('includes/footer'); ?>
