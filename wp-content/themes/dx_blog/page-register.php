<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<div id="registerTitle">
    <h1>新規会員登録</h1>
    <h2>New member registration</h2>
</div>


<?php echo do_shortcode('[wpmem_form register]');?>

<?php get_template_part('includes/footer'); ?>