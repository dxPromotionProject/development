<!-- 記事詳細 -->
<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<div class="articleDetail">
    <div class="articleDetailMain">
        <div class="detailThumbnail">
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="detailTitle">
            <div class="detailTitleMain">
                <div class="detailTitleName">
                    <h1><?php the_title(); ?></h1>
                    <div class="blueLine"></div>
                </div>
                <div class="detailContent">
                    <?php //echo do_shortcode('[toc]'); ?>
                    <?php
                        echo the_content();
                        preg_match_all('/<h[2]>.+<\/h[2]>/u', $content = $post->post_content, $matches);

                        // echo '<div id="test">';
                        // echo $matches[0][0];
                        // echo '</div>';
                        // print_r($matches[0][1]);

                        // $contents = $post->post_content;
                        // print_r($content);
                        // apply_filters('the_content',$contents);

                        // echo mb_strlen($matches[0][0]);
                        // $article_content =  apply_filters('the_content',$contents);
                        // $count_string = mb_strlen($matches[0][0]);
                        // $start = mb_strpos($article_content, $matches[0][0])+$count_string;
                        // $end = mb_strpos($article_content, $matches[0][1]);
                        // $first_content = mb_substr($article_content, $start, $end-$start);

                        // echo $first_content;
                    ?>
                </div> 
            </div>
        </div>

        <div class="detailArticle">
            <div class="mainvisual">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php query_posts('posts_per_page=10'); ?>
                    <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                        <div class="swiper-slide">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </div>
                    <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="articleDetailSidebar">
        <div class="articleDetailSidebarContent"><?php echo get_sidebar(); ?></div>
    </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/dist/js/single.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: '2',
        spaceBetween: 50,
        loop: true,
        loopedSlides: 10,
        pagination: '.swiper-pagination',
        disableOnInteraction: false,
        effect: 'slide',
    });
</script>


<?php get_template_part('includes/footer'); ?>