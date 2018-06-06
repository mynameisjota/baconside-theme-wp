<?php get_header(); ?>

<section class="container">
	<div class="row">
		<main class="col-lg-8 col-md-12 col-sm-12">

			<div class="titulo-page">
				<h1 class="main-title"><?php

				if ( is_category() ) {
					single_cat_title();
				} elseif ( is_tag() ) {
					single_tag_title();
				} elseif ( is_author() ) {
					the_post();
					echo 'Autor: ' . get_the_author();
					rewind_posts();
				} elseif ( is_day() ) {
					echo 'Dia: ' . get_the_date();
				} elseif ( is_month() ) {
					echo 'Semana: ' . get_the_date('F Y');
				} elseif ( is_year() ) {
					echo 'Ano: ' . get_the_date('Y');
				} else {
					echo 'Arquivos:';
				}

				?></h1>
			</div>
			
			<?php get_template_part('content/content-article') ?>

			<?php if ( function_exists('wp_bootstrap_pagination') )
			wp_bootstrap_pagination();
			?>
		</main>

		<aside class="main-sidebar col-lg-4 col-md-12 col-sm-12">
			<h4 class="text-color-primary font-weight-light mb-4">
				<?php dynamic_sidebar('sidebar'); ?>
			</h4>
		</aside>
	</div> <!-- row -->      
</section>


<?php get_footer(); ?>
