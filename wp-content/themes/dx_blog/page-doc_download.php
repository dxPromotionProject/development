<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<div class="docDownloadMain">
    <div id="docDownloadTitle">
        <h1>お役立ち資料ダウンロード</h1>
        <?php //echo do_shortcode( '[download id="51"]' );?>
        <h2>eBOOK　DOWNLOAD</h2>
    </div>

    <div class="docDownloadLeft">
        <div class="docDownloadContainer">
            <div class="docDownloadImage">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Investing_re_bov7.png" alt="">
            </div>

            <div class="docDownloadDescription">
                <p>この資料で分かる3つのポイント</p>
                <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
                <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
                <p>テキストテキストテキストテキストテキ<br/>ストテキストテキストテキストテキストテキ<br/>ストテキストテキストテキス</p>
            </div>
        </div>

        <div class="docDownloadButton">
            <div class="docDownloadButtonInner">
                <!-- <a href="http://localhost:8888/wordpress/download/51/"> -->
                <a href="<?php bloginfo('url'); ?>/download/51/">
                    <p>ダウンロードする（無料）</p>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('includes/footer'); ?>