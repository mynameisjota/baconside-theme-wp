<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="row no-gutters post-box">
			<div class="col-lg-5 col-md-5 col-sm-4">
				<div class="img">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-home', array('class' => 'img-fluid',  'title' => get_the_title())); ?></a>
				</div>
			</div>

			<div class="post-content col-lg-7 col-md-7 col-sm-8">
				<div class="cat-post d-flex">
					<p><?php the_category(); ?></p>
					<time class="text-light text-muted">- <?php the_date(); ?></time>		
				</div> 
				<h4 class="pb-0 pt-0 mb-0 pb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

				<p class="text-muted">
					<?php if( get_field('sub-titulo') ): ?>
						<?php the_field('sub-titulo'); ?>
					<?php endif; ?>										
				</p>


			</div>
		</div>

			<?php endwhile; ?>
	
				<?php else:

					get_template_part('content/content-none');

				 endif; ?>

<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
	<ul class="pagination">
		<li class="page-item older">
			<?php next_posts_link('<i class="fas fa-arrow-left"></i> ' . __('Anterior', 'themeBase')) ?></li>
			<li class="page-item newer">
				<?php previous_posts_link(__('Próximo', 'themeBase') . ' <i class="fas fa-arrow-right"></i>') ?></li>
			</ul>
		<?php } ?>



