<?php 

// REGISTRANDO O MENU
register_nav_menus(
    array(
        'meu_menu' => __( 'Menu Principal', 'meu-text-domain' )
    )
);


function admiraljota_setup(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('slide-image', 1200, 420, true);
	add_image_size('blog-games', 370, 220, true);
	add_image_size('blog-single-image', 740, 360, true);
    add_image_size('post-home', 310, 190, true);
	add_theme_support( 'custom-logo' );
}

add_action('after_setup_theme', 'admiraljota_setup');



function admiraljota_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'admiraljota' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Adicione seu widget aqui', 'admiraljota' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'admiraljota' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Adicione seu widget aqui', 'admiraljota' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'admiraljota' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Adicione seu widget aqui', 'admiraljota' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'admiraljota' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Adicione seu widget aqui', 'admiraljota' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'admiraljota_widgets_init' );

function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = $excerpt.'...';
  return $excerpt;
}


add_theme_support( 'custom-logo', array(
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );