<?php get_header();  ?>

<div class="container">
	
	<div class="row">

		<div class="col-lg-8 col-md-12 col sm-12">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h1 class="main-title"><?php the_title(); ?></h1>
					<div class="main-single bg-light p-3">

								<?php the_content(); ?>

							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="clearfix"></div>


				</div>
				<aside class="col-lg-4 col-md-4 col-sm-12">
					<?php dynamic_sidebar('sidebar'); ?>
				</aside>
			</div>


		</div>

		<?php get_footer(); ?>