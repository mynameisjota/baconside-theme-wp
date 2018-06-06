<?php
get_header(); ?>

<div id="content" class="container">
	<div id="content" class="site-content" role="main">

		<header class="page-header mt-4">
			<h1 class="display-3"><?php _e( 'Nada Encontrado'); ?></h1>
		</header>

		<div class="page-wrapper">
			<div class="page-content">
				<p class="text-secondary"><?php _e('Não encontramos o que você procura, talvez usar outras palavras pode ajudar.'); ?></p>

				<form role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
					<label for="s" class="sr-only">Search</label>
					<div class="input-group">
						<input type="text" class="form-control" id="s" name="s" placeholder="Procurar..."<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
						</span>
					</div> <!-- .input-group -->
				</form>
			</div><!-- .page-content -->
		</div><!-- .page-wrapper -->

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>