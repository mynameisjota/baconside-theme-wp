<?php get_header(); ?>

<main class="container mt-5">
  <div class="row">

    <div class="col-lg-8 col-md-12 col-sm-12">
      <div id="content" role="main">
        <header>
          <h1 class="main-title">
            <?php _e('Resultado da busca para', 'b4st'); ?> <strong>&ldquo;<?php the_search_query(); ?>&rdquo;</strong>
          </h1>
        </header>
        <?php get_template_part('content/content-article'); ?>
      </div><!-- /#content -->
    </div>

    <aside class="main-sidebar col-lg-4 col-md-12 col-sm-12">
    <h4 class="text-color-primary font-weight-light mb-4">
      <?php dynamic_sidebar('sidebar'); ?>
    </h4>
  </aside>

  </div><!-- /.row -->
</main><!-- /.container-responsive -->

<?php get_footer(); ?>
