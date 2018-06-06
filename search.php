<?php get_header(); ?>

<main class="container mt-5">
  <div class="row">

    <div class="col-sm">
      <div id="content" role="main">
        <header>
          <h1 class="main-title">
            <?php _e('Resultado da busca para', 'b4st'); ?> <strong>&ldquo;<?php the_search_query(); ?>&rdquo;</strong>
          </h1>
        </header>
        <?php get_template_part('content/content-article'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container-responsive -->

<?php get_footer(); ?>
