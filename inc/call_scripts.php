<?php 

function admiraljota_files(){

	wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
	wp_enqueue_style('fontawesome', get_theme_file_uri('/assets/fontawesome-all.css'));

	wp_enqueue_style('admiraljota_styles', get_stylesheet_uri());
	// SCRIPTS
	wp_enqueue_script('jquery');
	wp_enqueue_script('main-admiraljota-js', get_theme_file_uri('/js/bootstrap.min.js'));
	wp_enqueue_script('menu-js', get_theme_file_uri('/js/menu.js'));

	wp_register_script('font-awesome-config-js', get_template_directory_uri() . '/theme/js/font-awesome-config.js', false, null, null);
	wp_enqueue_script('font-awesome-config-js');

	wp_register_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/js/all.js', false, '5.0.13', null);
	wp_enqueue_script('font-awesome');
}

add_action('wp_enqueue_scripts', 'admiraljota_files');