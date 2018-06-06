<?php get_header(); ?>

<main class="wrapper">
    <div class="container">

        <section class="main-body">
            <div class="row">
                <main class="col-lg-8 col-md-12 col-sm-12">

                    <div class="autor bg-danger" style="background: url(<?php the_field ('imagem-destaque-autor');  ?>);">

                        <div class="avatar-autor">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
                        </div>
                        
                        <div class="balao">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quidem ipsa perferendis assumenda itaque quia tempore quisquam inventore dignissimos nisi.
                        </div>

                        <div class="redesautor">
                            <?php if ( get_the_author_meta( 'googleuser' ) ) { ?><a href="<?php the_author_meta( 'googleuser' ); ?>?rel=author" title="Acesse meu Google +" target="_blank">Google +</a><?php } ?>

                            <?php if ( get_the_author_meta( 'twitteruser' ) ) { ?><a href="<?php the_author_meta( 'twitteruser' ); ?>" title="Acesse meu Twitter" target="_blank">Twitter</a><?php } ?>

                            <?php if ( get_the_author_meta( 'facebookuser' ) ) { ?><a href="<?php the_author_meta( 'facebookuser' ); ?>" title="Acesse meu Facebook" target="_blank">Facebook</a><?php } ?>

                        </div>
                    </div>

                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>  
                            <article class="box-post mb-4">
                                <div class="row">


                                    <div class="thumb-post-home col-lg-5 col-md-5 col-sm-12">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-home-image', array('class' => '')); ?></a>
                                    </div>

                                    <div class="body-post-home col-lg-7 col-md-7 col-sm-12">
                                        <h4 class="title-home"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>


                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <div class="btn-pagination float-left"><?php next_posts_link( 'Próxima Página' ); ?></div>
                    <div class="btn-pagination float-right"><?php previous_posts_link( 'Página Anterior' ); ?></div>
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