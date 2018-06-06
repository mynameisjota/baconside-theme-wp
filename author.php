<?php get_header(); ?>

<main class="wrapper">
    <div class="container">

        <section class="main-body">
            <div class="row">
                <main class="col-lg-8 col-md-12 col-sm-12">

                <?php get_template_part( 'content/content-autorbox'); ?>

                <?php get_template_part('content/content-article'); ?>

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