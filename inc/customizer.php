<?php

function admiraljota_customize_register($wp_customize){

	// Banner Section

	$wp_customize->add_section('banner', array(

		'title'	=> __('Banner', 'admiraljota'),
		'description'	=> sprintf(__('Opções para o banner da home', 'admiraljota')),
		'priority'	=> 130
	));


	// Configurações da imagem do Banner

	$wp_customize->add_setting('banner_image', array(
		'default'		=> get_bloginfo('template_directory').'/img/banner.jpg',
		'type'			=> 'theme_mod'
	));


	// Controle da imagem

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
		'label'	=> __('Slide Um', 'admiraljota'),
		'section'	=> 'banner',
		'settings'	=> 'banner_image'
	)));


	// Boxes Section

	$wp_customize->add_section('boxes', array(
		'title'          => __('Fundo do contato', 'admiraljota'),
		'description'    => sprintf( __('Options for homepage boxes', 'admiraljota')
	),
		'priority'       => 130,
	));


 	// Controles da sessão

	$wp_customize->add_control( 'box1_text', array(
		'label'    => __('Contato', 'admiraljota'),
		'section'  => 'boxes',
		'priority' => 20,
	));



 		// Configurações da imagem do Banner

	$wp_customize->add_setting('avatar_image', array(
		'default'		=> get_bloginfo('template_directory').'/img/banner.jpg',
		'type'			=> 'theme_mod'
	));



	// Controle da imagem

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'avatar_image', array(
		'label'	=> __('Imagem de avatar', 'admiraljota'),
		'section'	=> 'boxes',
		'settings'	=> 'avatar_image'
	)));

}


add_action('customize_register', 'admiraljota_customize_register');