	<?php 
	$gamesSection = new WP_Query(array(
		'posts_per_page' => 3,
		'category_name' => 'games'
	));

	while($gamesSection->have_posts()) {
		$gamesSection->the_post(); ?>


		<div class="col-md-4 text-light">
			
				<div class="thumb-games">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-games', array( 'title' => get_the_title()) ); ?></a>
				</div>

				<h4 class="game-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		</div>

	<?php }

	?>

	<?php wp_reset_postdata(); ?>




