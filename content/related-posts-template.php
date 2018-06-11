
<?php if (!empty($related_posts)) { ?>
    <div class="posts-relacionados clearfix">
        <h4 class="main-title mb-3"><?php _e('Leia Também', 'wpcrumbs'); ?></h4>

        <ul class="relacionados-lista row">
            <?php
            foreach ($related_posts as $post) {
                setup_postdata($post);
                ?>
                <li class="col-md-4">
                    <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="thumb">
                                <?php echo get_the_post_thumbnail(null, 'post-home', array( 'class'=>'img-fluid', 'alt' => the_title_attribute(array('echo' => false)))); ?>
                            </div>
                        <?php } ?>
                        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                            <?php title_limite(38); ?>
                        </a></h4>
                    </a>
                </li>
            <?php } ?>
        </ul>
        <div class="clearfix"></div>
    </div>
    <?php
}