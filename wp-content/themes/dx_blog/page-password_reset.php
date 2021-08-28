<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<div id="paswordResetTitle">
    <h1>パスワードを忘れた方</h1>
    <h2>Fogotten your password</h2>
</div>

<div>
    <?php echo do_shortcode('[wpmem_form password]');?>
</div>

<?php get_template_part('includes/footer'); ?>