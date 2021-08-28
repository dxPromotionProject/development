<!--詳細ページのサイドバー -->
<!-- 以下サイドバー　年別アーカイブ -->
<div class="sidebarNewArrivalContainer">
	<div class="sidebarNewArrivalTitle">
		<h1>新着記事</h1>
		<h2>NEW ARRIVAL</h2>
	</div>
	<?php query_posts('posts_per_page=3'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="sidebarNewArrivalLink">
		<a href="<?php the_permalink(); ?>">
			<p><?php the_title(); ?></p>
			<?php the_post_thumbnail(); ?>
		</a>
		<div class="sidebarNewArrivalContent">
			<h3><?php echo mb_substr(get_the_excerpt(), 0, 50) ; ?></h3>
		</div>
	</div>
	<?php endwhile; endif; ?>
</div>

<div class="sidebarNewArrivalContainer sidebarRecommend">
	<div class="sidebarNewArrivalTitle sidebarRecommendTitle">
		<h1>おすすめ記事</h1>
		<h2>RECOMMEND</h2>
	</div>
	<?php
		$args = array(
			'category__in' => array( 1,3 ),
			'order'=>'DESC',
			'posts_per_page'=>3,
		);
		$the_query = new WP_Query($args);
	?>
	<?php if ($the_query->have_posts()): ?>
	<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
	<div class="sidebarNewArrivalLink">
		<a href="<?php the_permalink(); ?>">
			<p><?php the_title(); ?></p>
			<?php the_post_thumbnail(); ?>
		</a>
		<div class="sidebarNewArrivalContent">
			<h3><?php echo mb_substr(get_the_excerpt(), 0, 50) ; ?></h3>
		</div>
	</div>
	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>
</div>
