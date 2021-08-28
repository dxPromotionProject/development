<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<div id="loginTitle">
    <h1>ログイン</h1>
    <h2>member login</h2>
</div>

<?php echo do_shortcode('[wpmem_form login]');?>

<?php echo do_shortcode('[swpm_reset_form]');?>

<script src="<?php echo get_template_directory_uri(); ?>/dist/js/check-mailaddress.js"></script>

<?php get_template_part('includes/footer'); ?>