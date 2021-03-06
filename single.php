<?php get_header();  ?>

<div class="container">
	
	<div class="row">

		<div class="col-lg-8 col-md-12 col sm-12">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php bootstrap_breadcrumb(); ?>
					<div class="thumbnail-post mb-0">
						<?php the_post_thumbnail('blog-single-image', array( 'title' => get_the_title())); ?>
					</div>


					<div class="main-single bg-light p-3">
						<h1 class="title-single mb-3"><?php the_title(); ?></h1>

						<div class="single-post-info mb-4">
							<p class="text-secondary lead"><?php the_date(); ?> - 

								<?php if( get_field('sub-titulo') ): ?>
									<strong><?php the_field('sub-titulo'); ?></strong>
									<?php endif; ?></p>

								</div>
								<?php the_content(); ?>

							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="clearfix"></div>
					<?php wcr_related_posts(); ?>

					<?php get_template_part( 'content/content-autorbox'); ?>

					<div class="comentarios">
						<?php comments_template(); ?>
					</div>


				</div>

				<aside class="col-lg-4 col-md-4 col-sm-12">
					<?php dynamic_sidebar('sidebar'); ?>
				</aside>
			</div>


		</div>

		<?php get_footer(); ?>