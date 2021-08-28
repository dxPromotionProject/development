<?php get_header(); ?>

<?php get_template_part('includes/header'); ?>

<div id="topTitle">
    <div id="topSentence">
        <div id="ballon">
            <p>DX推進で</p>
        </div>
        <div id="topBorder">
            <p>経費削減と売上UP</p>
        </div>
        <h2>DX推進において競合他社に先手を打つ為の情報をお届けします</h2>
    </div>
    <div id="topImage">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/DX_Top.png">
    </div>
</div>

<div class="latestArticle">
    <div class="mainvisual">
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php query_posts('posts_per_page=5'); ?>
            <?php if (have_posts()) : while (have_posts()): the_post(); ?>
                <div class="swiper-slide">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                        <?php the_post_thumbnail(); ?>
                        <!-- その記事を単体で表示したい時はaタグのhref属性の中にthe_permalink()を入れて個々の表示を行う -->
                        <!-- thef_content()の代わりにthe_exerpt()でもOK(投稿の内容を全て表示したくない場合に使用すること) -->
                    </a>
                </div>
                <!-- 10件以上の投稿をした場合はnext_posts_link() -->
            <?php endwhile; endif; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<div id="recommendArticleTitle">
    <p>おすすめ記事</p>
    <p id="recommendArticleTitleSub">RECOMMEND</p>
</div>

<div class="recommendArticleTitleLine blueLine"></div>

<div class="recommendArticle">
    <div class="recommendArticleContent">
        <?php
            $args = array(
                'category__in' => array( 1,3 ),
                'order'=>'DESC',
                'posts_per_page'=>6,
            );
            $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="recommendArticleContentDetail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <h3>
                        <?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?>
                    </h3>    
                    <h2><?php the_title(); ?></h2>
                </a>
        </div>
        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: '3',
        spaceBetween: 30,
		loop: true,
        loopedSlides: 5,
		centeredSlides: true,
		pagination: '.swiper-pagination',
        disableOnInteraction: false,
    });
    
  </script>


<?php get_template_part('includes/footer'); ?>

