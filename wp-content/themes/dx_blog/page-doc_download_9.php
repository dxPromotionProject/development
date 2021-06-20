<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<div class="docDownloadMain">
    <div class="docDownloadTitle">
        <h1>お役立ち資料ダウンロード</h1>
        <?php //echo do_shortcode( '[download id="51"]' );?>
        <h2>eBOOK　DOWNLOAD</h2>
    </div>

    <div class="docDownloadLeft">
        <div class="docDownloadContainer">
            <div class="docDownloadImage">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/undraw_Transfer_files_re_a2a9.png" alt="">
            </div>

            <div class="docDownloadDescription">
                <div class="docDownloadDescriptionInline">
                    <h2>この資料で分かる3つのポイント</h2>
                    <p>1．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                    <p>2．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                    <p>3．テキストテキストテキストテキストテキストテキストテキ<br>ストテキストテキストテキストテキストテキストテキス</p>
                </div>
            </div>
        </div>

        <div class="docDownloadButton">
            <div class="docDownloadButtonInner">
                <!-- <a href="http://localhost:8888/wordpress/download/51/"> -->
                <a href="<?php bloginfo('url'); ?>/download/79/">
                    <p>ダウンロードする（無料）</p>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('includes/footer'); ?>