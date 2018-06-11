<?php get_header(); ?>

<main class="wrapper">
	<div class="container">

		<div id="main-slider" class="carousel slide mt-4" data-ride="carousel">

			<?php $args = array(
				'posts_per_page' => 3,
				'category_name' => 'destaque'
			);
			$slider = new WP_Query($args);
			if($slider->have_posts()):
				$count = $slider->found_posts;
				?>

				<div class="carousel-inner" role="listbox">
					<?php $i = 0; while($slider->have_posts()): $slider->the_post(); ?>
					<div class="carousel-item <?php echo ($i == 0) ? 'active' : ''?>">
						<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail( 'slide-image', array('class' => 'd-block img-fluid','title' => get_the_title() ) ) ; ?>
						</a>
							<div class="carousel-caption d-none d-md-block">
								<h3><?php the_title(); ?></h3>
								<p>
									<?php if( get_field('sub-titulo') ): ?>
										<?php the_field('sub-titulo'); ?>
									<?php endif; ?>	
								</p>
							</div>
						</div><!--.carousel-item-->
						<?php $i++; endwhile; ?>
					</div> <!--.carouse-inner-->

				<?php endif;  wp_reset_postdata(); ?>
				<a href="#main-slider" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
                <a href="#main-slider" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
			</div>
			
			<div class="game-section">
				<h3 class="main-title mb-1">Últimas em Games</h3>
				<div class="row">
					<?php get_template_part( 'content/content-games' ); ?>
				</div>
			</div>
			
			<section class="main-body">
				<div class="row">
					<main class="col-lg-8 col-md-12 col-sm-12">

						<h3 class="main-title mb-3">Últimas Postagens</h3>

						<?php get_template_part('content/content-article') ?>

					</main>

					<aside class="main-sidebar col-lg-4 col-md-12 col-sm-12">
						<h4 class="text-color-primary font-weight-light mb-4">
							<?php dynamic_sidebar('sidebar'); ?>
						</h4>
					</aside>
				</div> <!-- row -->      
			</section>

		</div> <!-- Container -->
	</main> <!-- Wrapper -->

	<?php get_footer(); ?>