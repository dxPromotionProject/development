
<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<?php while (have_posts()): the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <!-- その記事を単体で表示したい時はaタグのhref属性の中にthe_permalink()を入れて個々の表示を行う -->
    <!-- the_content()の代わりにthe_exerpt()でもOK(投稿の内容を全て表示したくない場合に使用すること) -->
    <?php the_content(); ?>
    <!-- 10件以上の投稿をした場合はnext_posts_link() -->
<?php endwhile; ?>

<?php get_template_part('includes/footer'); ?>
