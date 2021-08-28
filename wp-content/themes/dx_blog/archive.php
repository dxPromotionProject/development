<!-- 記事一覧 -->
<!DOCTYPE html>
<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<section class="archiveMain">
    <h2>NWES</h2>
    <div class="archiveContainer">
        <nav>
            <ol>
            <?php
                wp_get_archives('type=yearly');// 投稿年順
            ?>
            </ol>
        </nav>
        <ol class="archiveContaineList">
            <?php
            $args= array(
                'posts_per_page' => 10000,
                'paged' => $paged
            );
            if(is_year()){
                $setYear=get_the_date('Y');
                $args['year']=$setYear;
            }
            query_posts($args);
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="articleBoxs">
                <article>
                <a href="<?php the_permalink(); ?>">
                    <time><?php the_time('Y.m.d'); ?></time>
                    <p><?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?></p>
                    <h3><?php the_title();?></h3>
                </a>
                </article>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </li>
        </ol>
    </div>
</section>


<?php get_template_part('includes/footer'); ?>